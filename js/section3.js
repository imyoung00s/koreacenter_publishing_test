$(function () {
  var tabClass

  /* swipe 기능 구현 */
  swiper()
  function swiper() {
    $(".swiper-container").each(function(){
      new Swiper('.swiper-container', {
        navigation: {
         
          variableWidth: true,
          nextEl: '.next',
          prevEl: '.prev',
        },
        observer: true,
        observeParents: true,
      });
    })
    

  }

  /* tab 기능 구현 */
  $(".section3 .tab_btn_container button").click(function () {
    tabClass = $(this).attr("attr-tab")
    $(".section3 .tab_btn_container button").removeClass("active")
    $(this).addClass("active")
    $(".section3 .tab_contents .tab_contents_slider .tab_box").removeClass("active")
    $(".section3 .tab_contents .tab_contents_slider .tab_box" + tabClass).addClass("active")
    $(".section3 .desc_container .textbox").removeClass("active")
    $(".section3 .desc_container .textbox" + tabClass).addClass("active")
  })

  /* colorbox  기능 구현 */
  $(".section3 .prd_colors .color").each(function(){
    var color = $(this).attr("data-c")
    $(this).css({
      "background" : color  
    })
  })//each
})//ready