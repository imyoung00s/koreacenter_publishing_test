$(function(){
  $("header .gnb li a").addClass("en");

  /* 팝업닫기 */
  $(".review_event_pop .top_close_btn").click(function(){
    $(".review_event_pop").addClass("active");
    $("header").addClass("active");
  })//click

  /* gnb bg */
  function header_bg(){
    if(scrt > 1){
      $("header").addClass("active2");
    }else{
      $("header").removeClass("active2");
    }
  }//header_bg
  $(window).scroll(function(){
    header_bg();
  })

  /* gnb hover */
  $(".gnb_2dep").hide()
  $("header .header_center .gnb_wrap .gnb .gnb_1dep >li >a").each(function(){
    $(this).parent().parent().mouseenter(function(){
      $(this).parent().find(".gnb_2dep").stop().fadeIn(500)
    }).mouseleave(function(){
      $(this).parent().find(".gnb_2dep").stop().fadeOut(300)
    })
  })
})//ready