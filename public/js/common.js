$('.our-team_slider').slick({
  dots: false,
  infinite: true,
  speed: 600,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: $('.prev-team'),
  nextArrow: $('.next-team'),
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        dots: true,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.prodaction-slider').slick({
  dots: true,
  infinite: true,
  speed: 600,
  fade: true,
  prevArrow: $('.prev-prodaction'),
  nextArrow: $('.next-prodaction'),
  slidesToShow: 1
});			

$(document).ready(function() {
  $('.open_servise_modal, .open_price_modal').magnificPopup({
    type:'inline',
    midClick: true,
  });
});

$(document).ready(function() {
    $(".main_menu a").click(function() {
      var elementClick = $(this).attr("href")
      var destination = $(elementClick).offset().top - 57;
      $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
      }, 800);
      return false;
    });
});

$(document).ready(function() {
  $('.burger').click(function(){
    $('.main_navbar_box').toggleClass('open_menu');
    $('body').toggleClass('overflow');
    $(this).toggleClass('bur_open');
  });
});

$(window).on('scroll', function() {

  $('.main_navbar_box').removeClass('open_menu');
  $('body').removeClass('overflow');
  $('.burger').removeClass('bur_open');

  var addscroll = $('header').outerHeight();
  if ($(this).scrollTop() > addscroll) {
    $('.header_menu_and_logo_wrapper').addClass('fixed-top');
  } else if ($(this).scrollTop() <=  addscroll) {
    $('.header_menu_and_logo_wrapper').removeClass('fixed-top');
  }
});

$("[data-mask='callback-catalog-phone']").mask("+99 9 9 9  9 9 9  9 9  9 9");



// gallery items
$(document).ready(function () {

  var jobsContainer = $('#jobs-container');

  $('#jobs-container').on('click', '#load-jobs-btn', function (event) {
    event.preventDefault();
    var offset = parseInt($(this).data('offset'));
    console.log(offset);
    $.ajax({
      url: path + '/main/load-jobs',
      data: {
        offset: offset,
      },
      method: 'POST',
      success: function (data) {
        var loadBtnBlock = jobsContainer.find($('#load-jobs-btn-wrap'));
        loadBtnBlock.remove();
        jobsContainer.append(data);

        $(".last-work-link_" + (offset + offset)).modalVideo();
      },
      error : function () {
        alert('Error!!!');
      }
    });
  });

});


$(".last-work-link").modalVideo();


$('.send-form').submit(function (e) {
  e.preventDefault();
  var form_data = $(this).serialize();


  $.ajax({
    url: $(this).attr('action'),
    method: 'POST',
    data: form_data,
    dataType: 'JSON',
    beforeSend: function() {
      $.magnificPopup.open({
        items: {
          src: '#thank-you-modal'
        },
        type: 'inline'
      });
    },
    success: function (res) {
      if (res.success === 1){
        $(this).reset();
      } else {
        alert('Error!!!');
      }
    },
    error: function () {
      alert('Error!!!');
    }
  });


  $(this)[0].reset();

  return false;
});
