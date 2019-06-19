<?php
namespace app\controllers\admin;


use app\models\admin\Job;
use site\libs\Pagination;


class JobController extends AdminController {


    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 25;
        $count = \R::count('job');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $jobs = \R::getAll("SELECT * FROM job ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Все работы');
        $this->setData(compact('jobs', 'count', 'pagination'));
    }



    public function addAction()
    {
        if (!empty($_POST)){
            $job = new Job();
            $data = $_POST;
            $data['status'] = Job::STATUS_ACTIVE;
            $job->load($data);
            if (!$job->validate($data)){
                $job->getErrors();
                redirect();
            }
            if ($job->save('job')){
                $_SESSION['success'] = 'Работа создана!';
            }
            redirect(ADMIN .'/job');
        }
        $this->setMeta('Добавить новую работу');
    }



    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $job = new Job();
            $data = $_POST;
            $job->load($data);
            if (!$job->validate($data)){
                $job->getErrors();
                redirect();
            }
            if ($job->update('job', $id)){
                $_SESSION['success'] =  'Работа успешно изменена!';
            }
            redirect(ADMIN .'/job/edit?id=' . $id);
        }
        $id = (int)$this->getRequestId();
        $job = \R::findOne('job', 'id = ?', [$id]);
        /** @var $job Job */

        $this->setMeta('Изменить пример работы ' . $job->title);
        $this->setData(compact('job'));
    }



    public function deleteAction(){
        /** @var Job $job */
        $id = $this->getRequestId();
        $job = \R::findOne('job', "id = ?", [$id]);
        if (!$job){
            redirect(ADMIN .'/job');
        }
        \R::exec("DELETE FROM job WHERE id = ?", [$job->id]);
        $_SESSION['success'] =  'Пример работы успешно удален!';
        redirect(ADMIN .'/job');
    }


}