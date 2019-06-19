<?php

use app\models\admin\Room;

/** @var $rooms Room [] */
/** @var $floorName string */

?>


<section class="content-header">
    <h1>Все помещения на <?= $floorName ?></h1>
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
                                    <th>Название</th>
                                    <th>Этаж</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($rooms as $room):?>
                                <tr>
                                    <td><?= $room['name'];?></td>
                                    <td><?= Room::getFloorName($room['floor']) ?></td>
                                    <td><?= Room::getStatusName($room['status']) ?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/employee/edit?id=<?=$room['id'];?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/employee/delete?id=<?=$room['id'];?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>