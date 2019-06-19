<?php
use site\App;

?>

<section class="content-header">
    <h1>Добавить нового сотрудника</h1>
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
                        <div class="col-md-12 account-left form-wrap">
                            <form method="post" id="form" action="<?=ADMIN?>/employee/add"
                                    data-toggle="validator" enctype="multipart/form-data" role="form" autocomplete="off"
                                    data-add_url="<?=ADMIN?>/employee/add-image"
                                    data-remove_url="<?=ADMIN?>/employee/remove-image-file"
                            >
                                <div class="form-group has-feedback file-upload-wrap">
                                    <label>Фото <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('employee_img_width') ?>px; высота - <?= App::$app->getProperty('employee_img_height') ?>px; ) </small> </label>
                                    <div class="upload" id="upload">

                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="username">Имя и Фамилия</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Имя и Фамилия"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="position">Должность</label>
                                    <input type="text" name="position" class="form-control" id="position" placeholder="Должность"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <!--                                    <div class="box-footer">-->
                                    <button type="submit" class="btn btn-block btn-success" id="submit-all">Сохранить</button>
                                    <!--                                    </div>-->
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

