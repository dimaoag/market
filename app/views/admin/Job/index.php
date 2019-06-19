<?php

use app\models\admin\Job;
use site\libs\Pagination;


/** @var $jobs Job [] */
/** @var $count integer */
/** @var $pagination Pagination */


?>


<section class="content-header">
    <h1>Все работы</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/job"><i class="fa fa-folder"></i>Все работы</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?=ADMIN?>/job/add" class="btn btn-success">Добавить новую работу</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>URL</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($jobs as $job):?>
                                <tr>
                                    <td><?=$job['title'];?></td>
                                    <td><?=$job['url_video'];?></td>
                                    <td><?= $job['status'] == Job::STATUS_ACTIVE ? 'Активный' : 'Не активный';?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/job/edit?id=<?=$job['id'];?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/job/delete?id=<?=$job['id'];?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-content">
                        <p><?=count($jobs);?> работ(а) с <?=$count?></p>
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