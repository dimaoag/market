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


        $title = 'Субаренда помещений в Бизнес-центре | г. Киев Бульвар Вацлава Гавела 8';
        $description = 'Выбери любую площадь для своего бизнеса. В подарок крутейшие соседи: лучшие студии, магазины, фуд-корты. Посмотри фото и параметры каждой комнаты на сайте!';
        $keywords = 'аренда киев, аренда без посредников киев, аренда недвижимости киев,
        аренда помещений в киеве, аренда коммерческой недвижимости киев, 
        аренда помещение магазин , киев аренда в тц, аренда площади в тц, аренда торговой площади в тц, аренда островка в тц';

        $this->setMeta($title, $description, $keywords);
        $this->setData(compact('firstFloorRooms', 'secondFloorRooms', 'thirdFloorRooms'));
    }



    public function roomAction()
    {
        /** @var $room Room */
        $id = $_GET['id'] ? $_GET['id'] : null;
        $room  = \R::findOne('room', 'id = ? ', [$id]);

        if (!$id || !$room){
            redirect(PATH . '/main/index');
        }

        $gallery = \R::find('gallery', 'room_id = ? ', [$room->id]);

        $title = 'Помещение ' . $room->name;
        $this->setMeta($title);
        $this->setData(compact('room', 'gallery'));
    }



    public function sendAction()
    {
        if (!empty($_POST)){

            $username = $_POST['username'] ? trim(htmlspecialchars($_POST['username'])) : null;
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;

            if (isset($_POST['room_name'])) {
                $room_name = htmlspecialchars($_POST['room_name']);
            }

            $messageText = '
                    <h1>Новая заявка</h1>
                    <p><b>Имя </b> - '. $username .' </p>
                    <p><b>Телефон </b> - '. $phone .' </p>';

            if (isset($room_name)){
                $messageText .= '<p><b>Название помещения: </b> - ' . $room_name .' </p> ';
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


//            if ($result){
//                echo json_encode(['success' => 1]);
//                die();
//            }

        }
        redirect(PATH . '/main/thanks');
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