<?php


?>

<section class="content-header">
    <h1>Создать пример работы</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/job"><i class="fa fa-folder"></i>Все работы</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left doc-form-wrap">
                            <form method="post" id="doc-form" action="<?=ADMIN?>/job/add" data-toggle="validator" role="form" autocomplete="off">
                                <div class="form-group has-feedback">
                                    <label for="name">Название</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Название"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Код видео на YouTube в формате (8Uk5g6KXfHk)</label>
                                    <input type="text" name="url_video" class="form-control" id="url_video" placeholder="Код видео"
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

