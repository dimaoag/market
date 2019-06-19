<?php
namespace app\controllers\admin;


use app\models\admin\Service;
use site\App;
use site\libs\Pagination;


class ServiceController extends AdminController {

    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 25;
        $count = \R::count('service');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $services = \R::getAll("SELECT * FROM service ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Все услуги');
        $this->setData(compact('services', 'count', 'pagination'));
    }



    public function addAction()
    {
        if (!empty($_POST)){
            $service = new Service();
            $data = $_POST;
            $data['status'] = Service::STATUS_ACTIVE;
            $data['price'] ?: $data['price'] = 0;
            $service->load($data);
            $service->getImg();
            if (!$service->validate($data)){
                $service->getErrors();
                redirect();
            }
            if ($service->save('service')){
                $_SESSION['success'] = 'Услуга создана!';
            }
            redirect(ADMIN .'/service');
        }
        $this->setMeta('Добавить новый документ');
    }



    public function editAction()
    {
        /** @var $service Service */
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $service = new Service();
            $data = $_POST;
            $data['price'] ?: $data['price'] = 0;
            $service->load($data);
            $service->getImg();
            if (!$service->validate($data)){
                $service->getErrors();
                redirect();
            }
            if ($service->update('service', $id)){
                $_SESSION['success'] =  'Данные успешно изменены!';
            }
            redirect(ADMIN .'/service/edit?id=' . $id);
        }
        $id = (int)$this->getRequestId();
        $service = \R::findOne('service', 'id = ?', [$id]);
        $this->setMeta('Изменить документ ' . $service->title);
        $this->setData(compact('service'));
    }




    public function deleteAction()
    {
        /** @var $service Service */
        $id = $this->getRequestId();
        $service = \R::findOne('service', "id = ?", [$id]);
        if (!$service){
            redirect(ADMIN .'/service');
        }
        \R::exec("DELETE FROM service WHERE id = ?", [$service->id]);
        @unlink(WWW . '/upload/' . $service->image);
        $_SESSION['success'] =  'Данные успешно удалены!';
        redirect(ADMIN .'/service');
    }



    public function removeImageFileAction()
    {
        if (!empty($_POST)){
            $fileName = $_POST['name'] ? htmlspecialchars($_POST['name']) : null;
            @unlink(WWW . '/upload/' . $fileName);
            echo json_encode(['result'=>'success']);
        }
        die();
    }




    public function addImageAction()
    {
        $wmax = App::$app->getProperty('service_img_width');
        $hmax = App::$app->getProperty('service_img_height');
        $name = 'file';
        $doc = new Service();
        $doc->uploadImg($name, $wmax, $hmax);
        die();
    }



    public function deleteImageAction(){

        $res = false;
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;

        if (!$id || !$name) {
            echo json_encode($res);
            die();
        }

        $service  = \R::find( 'service', ' id = ? AND image = ?', [$id, $name]);
        if (!$service){
            echo json_encode($res);
            die();
        }

        if (\R::exec("UPDATE service SET image = ? WHERE id = ?", [null, $id])){
            @unlink(WWW . '/upload/'. $name);
            $res = true;
        }

        echo  json_encode($res);
        die();
    }



}