<?php

use app\models\admin\Employee;
use site\App;


/** @var $employee Employee */

?>


<section class="content-header">
    <h1>Изменить <?= $employee->username?></h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/employee"><i class="fa fa-folder"></i>Команда</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left edit-form-wrap">
                            <form method="post" id="form" action="<?=ADMIN?>/employee/edit?id=<?=$employee->id?>"
                                  data-toggle="validator" role="form" autocomplete="off"
                                  data-add_url="<?=ADMIN?>/employee/add-image"
                                  data-remove_url="<?=ADMIN?>/employee/remove-image-file"
                                  data-remove_photo_db_url="<?=ADMIN?>/employee/delete-image"
                            >

                                <?php if (!$employee->image): ?>
                                    <div class="form-group has-feedback file-upload-wrap">
                                        <label>Фото <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('employee_img_width') ?>px; высота - <?= App::$app->getProperty('employee_img_height') ?>px; ) </small> </label>
                                        <div class="upload" id="upload">

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <div class="col-md-4 gallery-item">
                                            <a href="<?= PATH ?>/upload/<?= $employee->image ?>" target="blank">
                                                <img src="<?= PATH ?>/upload/<?= $employee->image ?>" class="img-responsive" alt="image"/>
                                            </a>
                                            <button type="button" class="btn btn-link remove_image" data-name="<?= $employee->image ?>" data-id="<?= $employee->id ?>">Удалить</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php endif; ?>

                                <div class="form-group has-feedback">
                                    <label for="username">Имя и Фамилия</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Имя и Фамилия"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           value="<?= $employee->username ?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="position">Должность</label>
                                    <input type="text" name="position" class="form-control" id="position" placeholder="Должность"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           value="<?= $employee->position ?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="status">Статус</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <?php foreach (Employee::getStatuses() as $key => $value): ?>
                                            <?php if ($key == $employee->status):?>
                                                <option value="<?=$key?>" selected><?=$value?></option>
                                            <?php else: ?>
                                                <option value="<?=$key?>"><?=$value?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="clearfix"></div>
                                <input type="hidden" name="id" value="<?=$employee->id;?>">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

