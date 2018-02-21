$(document).ready(function(){
  $('.main-slider').slick({
    // autoplay: true,
    fade: true,
    speed: 1500,
    dots: false,
    autoplaySpeed: 5000,
    arrows: true,
    nextArrow:'<button class="next-arrow"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.046 307.046"><path d="M239.087 142.427L101.259 4.597c-6.133-6.129-16.073-6.129-22.203 0L67.955 15.698c-6.129 6.133-6.129 16.076 0 22.201l115.621 115.626-115.621 115.61c-6.129 6.136-6.129 16.086 0 22.209l11.101 11.101c6.13 6.136 16.07 6.136 22.203 0l137.828-137.831c6.135-6.127 6.135-16.058 0-22.187z" fill="#FFF"/></svg></span></button>',
    prevArrow:'<button class="prev-arrow"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.065 137.064"><path d="M55.12 68.532l51.606-51.614a7.006 7.006 0 0 0 0-9.911l-4.955-4.956a7.008 7.008 0 0 0-9.91 0L30.337 63.577a7.01 7.01 0 0 0 0 9.911l61.524 61.523a7.007 7.007 0 0 0 9.91 0l4.955-4.955a7.006 7.006 0 0 0 0-9.911L55.12 68.532z" fill="#FFF"/></svg></span></button>',
  });

  $('.novelty-slider').slick({
    // autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 1500,
    dots: false,
    autoplaySpeed: 5000,
    arrows: true,
    nextArrow:'<button class="next-arrow"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.046 307.046"><path d="M239.087 142.427L101.259 4.597c-6.133-6.129-16.073-6.129-22.203 0L67.955 15.698c-6.129 6.133-6.129 16.076 0 22.201l115.621 115.626-115.621 115.61c-6.129 6.136-6.129 16.086 0 22.209l11.101 11.101c6.13 6.136 16.07 6.136 22.203 0l137.828-137.831c6.135-6.127 6.135-16.058 0-22.187z" fill="#FFF"/></svg></span></button>',
    prevArrow:'<button class="prev-arrow"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.065 137.064"><path d="M55.12 68.532l51.606-51.614a7.006 7.006 0 0 0 0-9.911l-4.955-4.956a7.008 7.008 0 0 0-9.91 0L30.337 63.577a7.01 7.01 0 0 0 0 9.911l61.524 61.523a7.007 7.007 0 0 0 9.91 0l4.955-4.955a7.006 7.006 0 0 0 0-9.911L55.12 68.532z" fill="#FFF"/></svg></span></button>',
  });

  $('[data-toggle="tooltip"]').tooltip()

  //select dropdowns
  $('.select-button').on('click', function(e){
    e.preventDefault();

    if ($(this).parent('.fw-select').find('ul').css('display') == 'none') {
      $('.select-sorting').slideUp();
      $(this).parent('.fw-select').find('ul').slideDown(150);
    } else {
      $('.select-sorting').slideUp();
      $(this).parent('.fw-select').find('ul').slideUp();
    }
  });

  $('.select-sorting li a').on('click', function(w){
    w.preventDefault();
    var text = $(this).text();
    $(this).parents(".fw-select").find(".select-button span").html(text)
    $(this).parents('.select-sorting').fadeOut();
  });

  $(document).mouseup(function (e){
    var div = $(".fw-select");
    if (!div.is(e.target) && div.has(e.target).length === 0) {
      div.find('.select-sorting').fadeOut();
    }
  });

  $('.filter-toggle').on('click', function(){
    $(this).toggleClass('active');
    $(this).siblings('.filter-dropdown').slideToggle();
  });

  $(document).scroll(function () {
    if ($(this).scrollTop() > 250) {
      $('.fixed-aside').addClass('visible');
    } else {
      $('.fixed-aside').removeClass('visible');
    }
  });

  $('#scroll-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    })
  });
});




