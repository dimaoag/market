<?php
namespace app\controllers\admin;


use app\models\admin\Contact;


class ContactController extends AdminController {


    public function indexAction()
    {
        redirect(ADMIN .'/contact/edit?id=' . 1);
    }



    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $contact = new Contact();
            $data = $_POST;
            $contact->load($data);
            if (!$contact->validate($data)){
                $contact->getErrors();
                redirect();
            }
            if ($contact->update('contact', $id)){
                $_SESSION['success'] =  'Данные успешно изменены!';
            }
            redirect(ADMIN .'/contact/edit?id=' . $id);
        }
        $id = (int)$this->getRequestId();
        $contact = \R::findOne('contact', 'id = ?', [$id]);
        /** @var $contact Contact */

        $this->setMeta('Изменить контакты');
        $this->setData(compact('contact'));
    }


}