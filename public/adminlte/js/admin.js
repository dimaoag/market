
if ($('div').is('.file-upload-wrap')){

    var roomFileName = '';
    var logoFileName = '';
    var form = $('#form');
    var add_room_image_url = form.data('add_room_image_url');
    var add_logo_image_url = form.data('add_logo_image_url');
    var remove_room_image_url = form.data('remove_room_image_url');
    var remove_logo_image_url = form.data('remove_logo_image_url');


    function removeRoomFile(){
        $.ajax({
            type: 'POST',
            url: remove_room_image_url,
            data: {name: roomFileName},
            success: function (data) {

            }
        });
        return true;
    }


    function removeLogoFile(){
        $.ajax({
            type: 'POST',
            url: remove_logo_image_url,
            data: {name: logoFileName},
            success: function (data) {

            }
        });
        return true;
    }



    $(document).ready(function(){


        if ($('div').is('.room-file-upload')){

            var myDropzoneRoomImage = new Dropzone("#upload-room", {
                url: add_room_image_url,
                maxFiles: 1,
                autoProcessQueue: true,
                addRemoveLinks: true,
                acceptedFiles:".png,.jpg,.jpeg",
                maxFilesize: 5, //mb
                dictMaxFilesExceeded: "Достигнут лимит на количество загруженных картинок. Максимальное количество загрузки  {{maxFiles}} шт.",
                dictDefaultMessage: '<div class="dz-message">Нажмите здесь или перетащите сюда файлы для загрузки</div>',
                dictRemoveFile: '<div class="remove-link-dropzone-image" onclick="removeRoomFile();">Удалить фото</div>',
                init: function () {
                    $(this.element).html(this.options.dictDefaultMessage);


                    // var dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
                    //
                    // // for Dropzone to process the queue (instead of default form behavior):

                    //
                    //
                    // //send all the form data along with the files:
                    // this.on("sending", function(data, xhr, formData) {
                    //     formData.append("title", jQuery("#title").val());
                    //     formData.append("price_old", jQuery("#price_old").val());
                    //     formData.append("price_new", jQuery("#price_new").val());
                    //     formData.append("link", jQuery("#link").val());
                    //     formData.append("description", jQuery("#editor1").val());
                    // });


                    this.on("maxfilesexceeded", function() {
                        if (this.files[1] != null){
                            this.removeRoomFile(this.files[1]);
                        }
                    });

                },
                success: function (file, response) {
                    response = $.parseJSON(response);
                    roomFileName = response.file;
                },
            });

            // myDropzone.on("addedfile", function(file) {
            //
            //
            // });


            // myDropzone.on("removedfile", function(file) {

            // });

        }




        if ($('div').is('.logo-file-upload')){

            var myDropzoneLogoImage = new Dropzone("#upload-logo", {
                url: add_logo_image_url,
                maxFiles: 1,
                autoProcessQueue: true,
                addRemoveLinks: true,
                acceptedFiles:".png,.jpg,.jpeg",
                maxFilesize: 5, //mb
                dictMaxFilesExceeded: "Достигнут лимит на количество загруженных картинок. Максимальное количество загрузки  {{maxFiles}} шт.",
                dictDefaultMessage: '<div class="dz-message">Нажмите здесь или перетащите сюда файлы для загрузки</div>',
                dictRemoveFile: '<div class="remove-link-dropzone-image" onclick="removeLogoFile();">Удалить фото</div>',
                init: function () {
                    $(this.element).html(this.options.dictDefaultMessage);


                    // var dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
                    //
                    // // for Dropzone to process the queue (instead of default form behavior):

                    //
                    //
                    // //send all the form data along with the files:
                    // this.on("sending", function(data, xhr, formData) {
                    //     formData.append("title", jQuery("#title").val());
                    //     formData.append("price_old", jQuery("#price_old").val());
                    //     formData.append("price_new", jQuery("#price_new").val());
                    //     formData.append("link", jQuery("#link").val());
                    //     formData.append("description", jQuery("#editor1").val());
                    // });


                    this.on("maxfilesexceeded", function() {
                        if (this.files[1]!=null){
                            this.removeLogoFile(this.files[1]);
                        }
                    });

                },
                success: function (file, response) {
                    response = $.parseJSON(response);
                    logoFileName = response.file;
                },
            });

        }


    });

}




$(".edit-form-wrap").on( "click", ".remove_room_image", function() {
    var name = $(this).data('name');
    var id = $(this).data('id');
    var form = $('#form');
    var url = form.data('remove_room_photo_db_url');

    $.ajax({
        url: url,
        method:"POST",
        data:{
            name:name,
            id:id,
        },
        success:function(data) {
            console.log(data);
            document.location.reload(true);
            // if(data !== 'true'){
            //     alert('Error!')
            // }
        }
    });
});



$(".edit-form-wrap").on( "click", ".remove_logo_image", function() {
    var name = $(this).data('name');
    var id = $(this).data('id');
    var form = $('#form');
    var url = form.data('remove_logo_photo_db_url');

    $.ajax({
        url: url,
        method:"POST",
        data:{
            name:name,
            id:id,
        },
        success:function(data) {
            document.location.reload(true);
            // if(data !== 'true'){
            //     alert('Error!')
            // }
        }
    });
});




$(document).ready(function() {

    if ($('div').is('.gallery-upload')) {
        var url = $('#upload-gallery').data('url');
        var galleryContainer = $('#gallery-container');

        var myDropzoneGallery = new Dropzone("#upload-gallery", {
            url: url,
            maxFiles: 10,
            autoProcessQueue: true,
            addRemoveLinks: true,
            acceptedFiles:".png,.jpg,.jpeg",
            maxFilesize: 5, //mb
            dictMaxFilesExceeded: "Достигнут лимит на количество загруженных картинок. Максимальное количество загрузки  {{maxFiles}} шт.",
            dictDefaultMessage: '<div class="dz-message">Нажмите здесь или перетащите сюда файлы для загрузки</div>',
            // dictRemoveFile: '<div class="remove-link-dropzone-image" onclick="removeRoomFile();">Удалить фото</div>',
            init: function () {
                $(this.element).html(this.options.dictDefaultMessage);


                // var dzClosure = this; // Makes sure that 'this' is understood inside the functions below.
                //
                // // for Dropzone to process the queue (instead of default form behavior):

                //
                //
                //send all the form data along with the files:
                this.on("sending", function(data, xhr, formData) {
                    formData.append("id", jQuery("#room_id").val());
                });


            },
            success: function (file, response) {
                galleryContainer.append(response);
            },
            complete: function (file) {
                this.removeFile(file);
            },

        });

    }
});




$(".gallery-container").on( "click", ".remove_gallery_image", function() {
    var name = $(this).data('name');
    var id = $(this).data('id');
    var url =  $(this).data('url');
    var galleryItemBlock = $(this).closest('.gallery-item');

    $.ajax({
        url: url,
        method:"POST",
        data:{
            name:name,
            id:id,
        },
        success:function(data) {
            console.log(data);
            // document.location.reload(true);
            if(data !== 'true'){
                alert('Error!')
            }
            galleryItemBlock.remove();
        }
    });
});




// alert before delete item
$('.delete').click(function () {
    var res = confirm('Вы действительно хотите это сделать?');
    if (!res){
        return false;
    }
});


$('.sidebar-menu a').each(function () {
    var currentLocation = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if(link == currentLocation){
        $(this).parent().addClass(' active'); //parent
        $(this).closest('.treeview').addClass(' active'); //child
    }
});



// CKEDITOR.replace('editor1');
$('#editor1').ckeditor();


//datepicker
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    inline: true,
    language: 'ru',
    changeYear: true,
    changeMonth: true,
    todayHighlight: true,
    autoclose: true
});


