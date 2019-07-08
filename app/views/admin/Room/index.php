<?php

use site\libs\Pagination;
use app\models\admin\Room;


/** @var $rooms Room [] */
/** @var $pagination Pagination */
/** @var $count integer */
?>


<section class="content-header">
    <h1>Все помещения</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/room"><i class="fa fa-folder"></i>Все помещения</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Секция</th>
                                    <th>Этаж</th>
                                    <th>Название компании</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($rooms as $room):?>
                                <tr>
                                    <td><a href="<?=ADMIN?>/room/edit?id=<?=$room['id'];?>"><?= $room['name'];?></a></td>
                                    <td><?= Room::getFloorName($room['floor']) ?></td>
                                    <td><?= $room['company_name'] ?></td>
                                    <td><?= Room::getStatusName($room['status']) ?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/room/edit?id=<?=$room['id'];?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-content">
                        <p><?=count($rooms);?> помещений(е) с <?=$count?></p>
                        <?php if ($pagination->getCountPages() > 1):?>
                            <?=$pagination?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>