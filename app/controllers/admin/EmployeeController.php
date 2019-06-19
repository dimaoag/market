<?php
namespace app\controllers\admin;


use app\models\admin\Employee;
use site\App;
use site\libs\Pagination;


class EmployeeController extends AdminController {

    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 25;
        $count = \R::count('employee');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $employees = \R::getAll("SELECT * FROM employee ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Все сотрудники');
        $this->setData(compact('employees', 'count', 'pagination'));
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
        /** @var $employee Employee */
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $employee = new Employee();
            $data = $_POST;
            $employee->load($data);
            $employee->getImg();
            if (!$employee->validate($data)){
                $employee->getErrors();
                redirect();
            }
            if ($employee->update('employee', $id)){
                $_SESSION['success'] =  'Данные успешно изменены!';
            }
            redirect(ADMIN .'/employee/edit?id=' . $id);
        }
        $id = (int)$this->getRequestId();
        $employee = \R::findOne('employee', 'id = ?', [$id]);
        $this->setMeta('Изменить  ' . $employee->username);
        $this->setData(compact('employee'));
    }




    public function deleteAction()
    {
        /** @var $employee Employee */
        $id = $this->getRequestId();
        $employee = \R::findOne('employee', "id = ?", [$id]);
        if (!$employee){
            redirect(ADMIN .'/employee');
        }
        \R::exec("DELETE FROM employee WHERE id = ?", [$employee->id]);
        @unlink(WWW . '/upload/' . $employee->image);
        $_SESSION['success'] =  'Данные успешно удалены!';
        redirect(ADMIN .'/employee');
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
        $wmax = App::$app->getProperty('employee_img_width');
        $hmax = App::$app->getProperty('employee_img_height');
        $name = 'file';
        $employee = new Employee();
        $employee->uploadImg($name, $wmax, $hmax);
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

        $employee  = \R::find( 'employee', ' id = ? AND image = ?', [$id, $name]);
        if (!$employee){
            echo json_encode($res);
            die();
        }

        if (\R::exec("UPDATE employee SET image = ? WHERE id = ?", [null, $id])){
            @unlink(WWW . '/upload/'. $name);
            $res = true;
        }

        echo  json_encode($res);
        die();
    }



}