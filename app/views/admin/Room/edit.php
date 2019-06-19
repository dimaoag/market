<?php

use app\models\admin\Room;
use site\App;


/** @var $room Room */
/** @var $gallery array */
?>


<section class="content-header">
    <h1>Изменить <?= $room->name?></h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/room"><i class="fa fa-folder"></i>Все помещения</a></li>
        <li><?= $room->name?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left edit-form-wrap">
                            <form method="post" id="form" action="<?=ADMIN?>/room/edit"
                                  data-toggle="validator" role="form" autocomplete="off"
                                  data-add_room_image_url="<?=ADMIN?>/room/add-room-image"
                                  data-add_logo_image_url="<?=ADMIN?>/room/add-logo-image"
                                  data-remove_room_image_url="<?=ADMIN?>/room/remove-room-image-file"
                                  data-remove_logo_image_url="<?=ADMIN?>/room/remove-logo-image-file"
                                  data-remove_room_photo_db_url="<?=ADMIN?>/room/delete-room-image"
                                  data-remove_logo_photo_db_url="<?=ADMIN?>/room/delete-logo-image"
                            >

                                <?php if (!$room->image): ?>
                                    <div class="form-group has-feedback file-upload-wrap room-file-upload">
                                        <label>Фото помещения  </label>
                                        <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('room_img_width') ?>px; высота - <?= App::$app->getProperty('room_img_height') ?>px; ) </small>
                                        <div class="upload" id="upload-room">

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <p><b>Фото помещения</b></p>
                                        <div class="col-md-4 gallery-item">
                                            <a href="<?= PATH ?>/upload/room/<?= $room->image ?>" target="blank">
                                                <img src="<?= PATH ?>/upload/room/<?= $room->image ?>" class="img-responsive" alt="image"/>
                                            </a>
                                            <button type="button" class="btn btn-link remove_room_image" data-name="<?= $room->image ?>" data-id="<?= $room->id ?>">Удалить</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php endif; ?>

                                <div class="form-group has-feedback">
                                    <label for="name">Секция</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Секция"
                                           data-error="Minimum of 2 chars" data-minlength="2" maxlength="255"
                                           value="<?= $room->name ?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="area">Площадь</label>
                                    <input type="text" name="area" class="form-control" id="area" placeholder="Площадь" pattern="^\d*\.?\d*$"
                                           value="<?= $room->area ?>"
                                           required >
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="company_name">Название компании</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Название компании"
                                           value="<?= $room->company_name ?>" maxlength="255"
                                            >
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <?php if (!$room->logo): ?>
                                    <div class="form-group has-feedback file-upload-wrap logo-file-upload">
                                        <label>Логотип  </label>
                                        <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('logo_img_width') ?>px; высота - <?= App::$app->getProperty('logo_img_height') ?>px; ) </small>
                                        <div class="upload" id="upload-logo">

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <p><b>Логотип</b></p>
                                        <div class="col-md-4 gallery-item">
                                            <a href="<?= PATH ?>/upload/logo/<?= $room->logo ?>" target="blank">
                                                <img src="<?= PATH ?>/upload/logo/<?= $room->logo ?>" class="img-responsive" alt="image"/>
                                            </a>
                                            <button type="button" class="btn btn-link remove_logo_image" data-name="<?= $room->logo ?>" data-id="<?= $room->id ?>">Удалить</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="editor1">Описание</label>
                                    <textarea class="form-control" rows="20" id="editor1" name="description">
                                        <?= $room->description ?>
                                    </textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="status">Статус</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <?php foreach (Room::getStatuses() as $key => $value): ?>
                                            <?php if ($key == $room->status):?>
                                                <option value="<?=$key?>" selected><?=$value?></option>
                                            <?php else: ?>
                                                <option value="<?=$key?>"><?=$value?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <input type="hidden" name="id" id="room_id" value="<?=$room->id;?>">
                                <input type="hidden" name="floor" value="<?=$room->floor;?>">
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
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">

                    <div class=" file-upload-wrap gallery-upload">
                        <p><b>Галерея c фото</b>
                            <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('gallery_img_width') ?>px; высота - <?= App::$app->getProperty('gallery_img_height') ?>px; ) </small>
                        </p>
                        <div class="upload" id="upload-gallery" data-url="<?=ADMIN?>/room/upload-gallery">

                        </div>
                    </div>

                    <div class="gallery-container" id="gallery-container">
                        <?php if (!empty($gallery)): ?>
                            <?php foreach ($gallery as $galleryItem): ?>
                                <div class="col-md-3 gallery-item">
                                    <a href="<?= PATH ?>/upload/gallery/<?= $galleryItem['image'] ?>" target="blank">
                                        <img src="<?= PATH ?>/upload/gallery/<?= $galleryItem['image'] ?>" class="img-responsive" alt="image"/>
                                    </a>
                                    <button type="button" class="btn btn-link remove_gallery_image" data-url="<?= ADMIN ?>/room/delete-gallery-image" data-name="<?= $galleryItem['image'] ?>" data-id="<?= $galleryItem['id'] ?>">Удалить</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

