<?php
namespace app\models\admin;

use app\models\AppModel;

/**
 * @property int $id
 * @property string $name
 * @property string $company_name
 * @property string $logo
 * @property string $description
 * @property integer $floor
 * @property string $area
 * @property string $image
 * @property integer $status
 *
 */

class Room extends AppModel {

    const STATUS_FREE   =    1;
    const STATUS_BOOKED =    2;


    const FLOOR_ONE     = 1;
    const FLOOR_TWO     = 2;
    const FLOOR_THREE   = 3;


    const IMAGE_TYPE_ROOM = 'image';
    const IMAGE_TYPE_LOGO = 'logo';
    const IMAGE_TYPE_GALLERY = 'gallery';


    public $attributes = [
        'name' => '',
        'company_name' => '',
        'description' => '',
        'floor' => '',
        'area' => '',
        'status' => '',
    ];


    public $rules = [
        'required' => [
            ['name'],
            ['floor'],
            ['status'],
        ],
        'integer' => [
            ['status'],
            ['floor'],
        ],

    ];



    public function getImg($imageType){
        if (!empty($_SESSION[$imageType])){
            $this->attributes[$imageType] = $_SESSION[$imageType];
            unset($_SESSION[$imageType]);
        }
    }


    public function uploadImg($dirName, $imageType, $name, $wmax, $hmax){
        $uploaddir = WWW . '/upload/'. $dirName .'/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name'])); // расширение картинки
        $types = array("image/gif", "image/png", "image/jpeg", "image/jpeg", "image/x-png"); // массив допустимых расширений
        if ($_FILES[$name]['size'] > 5242880){
            $res = array("error" => "Error! Max size of file - 5 Мб!");
            exit(json_encode($res));
        }
        if ($_FILES[$name]['error']){
            $res = array("error" => "Error!. Maybe file's size very big!");
            exit(json_encode($res));
        }
        if (!in_array($_FILES[$name]['type'], $types)){
            $res = array("error" => "Enable extensions are:  .gif, .jpg, .png");
            exit(json_encode($res));
        }
        $new_name = md5(time()).".$ext";
        $uploadfile = $uploaddir.$new_name;
        if(@move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)){

            $_SESSION[$imageType] = $new_name;

            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
            $res = array("file" => $new_name);
            exit(json_encode($res));
        }
    }



    public static function uploadGalleryImg($room_id ,$name, $wmax, $hmax){
        $uploaddir = WWW . '/upload/gallery/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name'])); // расширение картинки
        $types = array("image/gif", "image/png", "image/jpeg", "image/jpeg", "image/x-png"); // массив допустимых расширений
        if ($_FILES[$name]['size'] > 5242880){
            $res = array("error" => "Error! Max size of file - 5 Мб!");
            exit(json_encode($res));
        }
        if ($_FILES[$name]['error']){
            $res = array("error" => "Error!. Maybe file's size very big!");
            exit(json_encode($res));
        }
        if (!in_array($_FILES[$name]['type'], $types)){
            $res = array("error" => "Enable extensions are:  .gif, .jpg, .png");
            exit(json_encode($res));
        }
        $new_name = md5(time()).".$ext";
        $uploadfile = $uploaddir.$new_name;

        if(@move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)){

            \R::exec("INSERT INTO gallery (room_id, image) VALUES ('". (int)$room_id ."','". $new_name ."')");
            $id = \R::getInsertID();
            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
            $res = self::getOut($new_name, $id);
            unset($_FILES[$name]);
            exit($res);
        }
        die();
    }



    /**
     * @param string $target путь к оригинальному файлу
     * @param string $dest путь сохранения обработанного файла
     * @param string $wmax максимальная ширина
     * @param string $hmax максимальная высота
     * @param string $ext расширение файла
     */
    public static function resize($target, $dest, $wmax, $hmax, $ext){
        list($w_orig, $h_orig) = getimagesize($target);
        $ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

        if(($wmax / $hmax) > $ratio){
            $wmax = $hmax * $ratio;
        }else{
            $hmax = $wmax / $ratio;
        }

        $img = "";
        // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
        switch($ext){
            case("gif"):
                $img = imagecreatefromgif($target);
                break;
            case("png"):
                $img = imagecreatefrompng($target);
                break;
            default:
                $img = imagecreatefromjpeg($target);
        }
        $newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки

        if($ext == "png"){
            imagesavealpha($newImg, true); // сохранение альфа канала
            $transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
            imagefill($newImg, 0, 0, $transPng); // заливка
        }

        imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
        switch($ext){
            case("gif"):
                imagegif($newImg, $dest);
                break;
            case("png"):
                imagepng($newImg, $dest);
                break;
            default:
                imagejpeg($newImg, $dest);
        }
        imagedestroy($newImg);
    }



    public static function getStatuses()
    {
        return [
            self::STATUS_FREE => 'Свободный',
            self::STATUS_BOOKED => 'Забронированый'
        ];
    }


    public static function getFloors()
    {
        return [
            self::FLOOR_ONE => 'Первый',
            self::FLOOR_TWO => 'Второй',
            self::FLOOR_THREE => 'Третий',
        ];
    }


    public static function getStatusName($status)
    {
        return self::getStatuses()[$status];
    }


    public static function getFloorName($floor)
    {
        return self::getFloors()[$floor];
    }


    public static function getOut($fileName, $id)
    {
        $out = '
           <div class="col-md-3 gallery-item">
                <a href="'. PATH .'/upload/gallery/'. $fileName .'" target="blank">
                    <img src="'. PATH .'/upload/gallery/'. $fileName .'" class="img-responsive" alt="image"/>
                </a>
                <button type="button" class="btn btn-link remove_gallery_image" data-url="'.ADMIN.'/room/delete-gallery-image" data-name="'.$fileName.'" data-id="'. $id .'">Удалить</button>
           </div>
        ';

        return $out;
    }






}