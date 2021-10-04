$(function(){
  win_info()
  function win_info(){
    winh = $(window).height()
    winw = $(window).width()
    scrt = $(window).scrollTop()
    scrl = $(window).scrollLeft()
  }//fn win_info

  $(window).resize(function(){
    win_info()
  })//resize

  $(window).scroll(function(){
    win_info()
  })//scroll
  
})//ready