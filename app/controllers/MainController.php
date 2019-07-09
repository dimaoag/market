<?php
namespace app\controllers;


use site\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use app\models\admin\Room;

class MainController extends AppController
{

    public function indexAction()
    {

        $firstFloorRooms = \R::getAll("SELECT * FROM room WHERE floor = ? ORDER BY id", [Room::FLOOR_ONE]);
        $secondFloorRooms = \R::getAll("SELECT * FROM room WHERE floor = ? ORDER BY id", [Room::FLOOR_TWO]);
        $thirdFloorRooms = \R::getAll("SELECT * FROM room WHERE floor = ? ORDER BY id", [Room::FLOOR_THREE]);


        $title = 'Главная';
        $description = 'Description';
        $keywords = '';



        $this->setMeta($title, $description, $keywords);
        $this->setData(compact('firstFloorRooms', 'secondFloorRooms', 'thirdFloorRooms'));
    }




    public function sendAction()
    {
        if (!empty($_POST)){

            $services = '';
            $username = $_POST['username'] ? trim(htmlspecialchars($_POST['username'])) : null;
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;
            $email = $_POST['email'] ? htmlspecialchars($_POST['email']) : null;
            if (isset($_POST['service_name'])) {
                foreach ($_POST['service_name'] as $key => $value){
                    $services .= htmlspecialchars($value) . ', ';
                }
            }


            $messageText = '
                    <h1>Новая заявка</h1>
                    <p><b>Имя </b> - '. $username .' </p>
                    <p><b>Телефон </b> - '. $phone .' </p>
                    <p><b>Email </b> - '. $email .' </p>';

            if ($services){
                $messageText .= '<p><b>Типы услуг: </b> - ' . $services .' </p> ';
            }

            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'))
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Заявка с сайта ' . $_SERVER['SERVER_NAME']))
                ->setContentType("text/html")
                ->setFrom([App::$app->getProperty('admin_email_from') => $_SERVER['SERVER_NAME']])
                ->setTo(App::$app->getProperty('admin_email_to'))
                ->setBody($messageText);

            // Send the message
            $result = $mailer->send($message);


            if ($result){
                echo json_encode(['success' => 1]);
                die();
            }

        }
        redirect();
    }


    public function sendServiceAction()
    {
        if (!empty($_POST)){

            $username = $_POST['username'] ? trim(htmlspecialchars($_POST['username'])) : null;
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;
            $service_name = $_POST['service_name'] ? htmlspecialchars($_POST['service_name']) : null;


            $messageText = '
                    <h1>Новая заявка</h1>
                    <p><b>Имя </b> - '. $username .' </p>
                    <p><b>Телефон </b> - '. $phone .' </p>
                    <p><b>Типы услуги: </b> - '. $service_name .' </p>';


            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'))
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Заявка с сайта ' . $_SERVER['SERVER_NAME']))
                ->setContentType("text/html")
                ->setFrom([App::$app->getProperty('admin_email_from') => $_SERVER['SERVER_NAME']])
                ->setTo(App::$app->getProperty('admin_email_to'))
                ->setBody($messageText);

            // Send the message
            $result = $mailer->send($message);


            if ($result){
                echo json_encode(['success' => 1]);
                die();
            }
        }
        redirect();
    }



    public function thanksAction()
    {

    }



}