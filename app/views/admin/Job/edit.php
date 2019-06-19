<?php

use app\models\admin\Job;

/** @var $job Job */

?>


<section class="content-header">
    <h1>Изменить <?= $job->title?></h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/job"><i class="fa fa-folder"></i>Все работы </a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left doc-edit-form-wrap">
                            <form method="post" action="<?=ADMIN?>/job/edit?id=<?=$job->id?>" data-toggle="validator" role="form" autocomplete="off">
                                <div class="form-group has-feedback">
                                    <label for="name">Название</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Название"
                                           data-error="Minimum of 3 chars" data-minlength="3"
                                           value="<?= $job->title ?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Код видео на YouTube в формате (8Uk5g6KXfHk)</label>
                                    <input type="text" name="url_video" class="form-control" id="url_video" placeholder="Код видео"
                                           value="<?= $job->url_video ?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group" style="margin-bottom: 30px; display: inline-block">
                                    <div class="col-sm-2">
                                        <img src="http://i3.ytimg.com/vi/<?= $job->url_video ?>/maxresdefault.jpg" alt="" style="width: 100%">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group has-feedback">
                                    <label for="status">Статус</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <?php foreach (Job::getStatuses() as $key => $value): ?>
                                            <?php if ($key == $job->status):?>
                                                <option value="<?=$key?>" selected><?=$value?></option>
                                            <?php else: ?>
                                                <option value="<?=$key?>"><?=$value?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <input type="hidden" name="id" value="<?=$job->id;?>">
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

