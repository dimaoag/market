<?php

use app\models\admin\Employee;
use site\libs\Pagination;

/** @var $employees Employee [] */
/** @var $pagination Pagination */
/** @var $count integer */
?>


<section class="content-header">
    <h1>Команда</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/employee"><i class="fa fa-folder"></i>Команда</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?=ADMIN?>/employee/add" class="btn btn-success">Добавить сотрудника</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Имя, Фамилия</th>
                                    <th>Должность</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($employees as $employee):?>
                                <tr>
                                    <td><?=$employee['username'];?></td>
                                    <td><?=$employee['position'] ?></td>
                                    <td><?= $employee['status'] == Employee::STATUS_ACTIVE ? 'Активный' : 'Не активный';?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/employee/edit?id=<?=$employee['id'];?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/employee/delete?id=<?=$employee['id'];?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-content">
                        <p><?=count($employees);?> сотрудник(ов) с <?=$count?></p>
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