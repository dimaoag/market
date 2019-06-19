<?php
namespace app\controllers\admin;


class MainController extends AdminController {

    public function indexAction(){


        $countJobs = \R::count('job');
        $countServices = \R::count('service');
        $countEmployees = \R::count('employee');


        $this->setMeta('Админка');
        $this->setData(compact('countJobs', 'countServices', 'countEmployees'));
    }
}