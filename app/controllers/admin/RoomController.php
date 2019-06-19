<?php
namespace app\controllers\admin;


use app\models\admin\Room;
use http\Url;
use site\App;
use site\libs\Pagination;


class RoomController extends AdminController {

    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 25;
        $count = \R::count('room');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $rooms = \R::getAll("SELECT * FROM room ORDER BY id LIMIT $start, $perpage");

        $this->setMeta('Все помещения');
        $this->setData(compact('rooms', 'count', 'pagination'));

    }


    public function floorAction()
    {
        $floor = isset($_GET['floor']) ? $_GET['floor'] : exit('Error');
        $floors = [
            Room::FLOOR_ONE => 'первом',
            Room::FLOOR_TWO => 'втором',
            Room::FLOOR_THREE => 'третьем',
        ];

        $floorName = $floors[$floor];

        $rooms = \R::getAll("SELECT * FROM room WHERE floor = ? ORDER BY id", [$floor]);
        $this->setMeta('Все помещения на' . $floorName);
        $this->setData(compact('rooms', 'floorName'));
    }



    public function addAction()
    {
        if (!empty($_POST)){
            $employee = new Employee();
            $data = $_POST;
            $data['status'] = Employee::STATUS_ACTIVE;
            $employee->load($data);
            $employee->getImg();
            if (!$employee->validate($data)){
                $employee->getErrors();
                redirect();
            }
            if ($employee->save('employee')){
                $_SESSION['success'] = 'Данние добавлены!';
            }
            redirect(ADMIN .'/employee');
        }
        $this->setMeta('Добавить нового сутрудника');
    }



    public function editAction()
    {
        /** @var $room Room */
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $room = new Room();
            $data = $_POST;
            $room->load($data);
            $room->getImg(Room::IMAGE_TYPE_ROOM);
            $room->getImg(Room::IMAGE_TYPE_LOGO);
            if (!$room->validate($data)){
                $room->getErrors();
                redirect();
            }
            if ($room->update('room', $id)){
                $_SESSION['success'] =  'Данные успешно изменены!';
            }
            redirect(ADMIN .'/room/edit?id=' . $id);
        }
        $id = (int)$this->getRequestId();
        $room = \R::findOne('room', 'id = ?', [$id]);
        $this->setMeta('Изменить  ' . $room->name);
        $this->setData(compact('room'));
    }



    public function addRoomImageAction()
    {
        $wmax = App::$app->getProperty('room_img_width');
        $hmax = App::$app->getProperty('room_img_height');
        $name = 'file';
        $room = new Room();
        $room->uploadImg('room', Room::IMAGE_TYPE_ROOM, $name, $wmax, $hmax);
        die();
    }



    public function addLogoImageAction()
    {
        $wmax = App::$app->getProperty('logo_img_width');
        $hmax = App::$app->getProperty('logo_img_height');
        $name = 'file';
        $room = new Room();
        $room->uploadImg('logo', Room::IMAGE_TYPE_LOGO, $name, $wmax, $hmax);
        die();
    }




    public function removeRoomImageFileAction()
    {
        if (!empty($_POST)){
            $fileName = $_POST['name'] ? htmlspecialchars($_POST['name']) : null;
            @unlink(WWW . '/upload/room/' . $fileName);
            echo json_encode(['result'=>'success']);
        }
        die();
    }


    public function removeLogoImageFileAction()
    {
        if (!empty($_POST)){
            $fileName = $_POST['name'] ? htmlspecialchars($_POST['name']) : null;
            @unlink(WWW . '/upload/logo/' . $fileName);
            echo json_encode(['result'=>'success']);
        }
        die();
    }



    public function deleteRoomImageAction(){

        $res = false;
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;

        if (!$id || !$name) {
            echo json_encode($res);
            die();
        }

        $employee  = \R::find( 'room', ' id = ? AND image = ?', [$id, $name]);
        if (!$employee){
            echo json_encode($res);
            die();
        }

        if (\R::exec("UPDATE room SET image = ? WHERE id = ?", [null, $id])){
            @unlink(WWW . '/upload/room/'. $name);
            $res = true;
        }

        echo  json_encode($res);
        die();
    }


    public function deleteLogoImageAction(){

        $res = false;
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;

        if (!$id || !$name) {
            echo json_encode($res);
            die();
        }

        $employee  = \R::find( 'room', ' id = ? AND logo = ?', [$id, $name]);
        if (!$employee){
            echo json_encode($res);
            die();
        }

        if (\R::exec("UPDATE room SET logo = ? WHERE id = ?", [null, $id])){
            @unlink(WWW . '/upload/logo/'. $name);
            $res = true;
        }

        echo  json_encode($res);
        die();
    }





}