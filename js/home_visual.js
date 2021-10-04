$(function () {

  $(".home_visual .imgbox1").clone().appendTo(".home_visual .slider_container")
  $(".home_visual .imgbox3").clone().prependTo(".home_visual .slider_container")
  var n = 1
  var flag = true
  var intervalID
  var timeoutID

  timeoutID = setTimeout(function(){
    intervalID = setInterval(function(){
      n ++
      change()
    },3000)
  },5000)

  function change() {
    $(".home_visual .slider_container").stop().animate({ "top": (n - 1) * -100 + "%" }, function () {
      if (n > 3) { n = 1 }
      if (n < 1) { n = 3 }
      $(".home_visual .slider_container").css("top", (n - 1) * -100 + "%")
    })
    setTimeout(function () { flag = true }, 500)
    $(".home_visual .controls button").removeClass("active")
    $(".home_visual .controls .btn"+n).addClass("active")

  }//fn_change

  function autoplay(){
    clearTimeout(timeoutID) 
    clearInterval(intervalID) 

    timeoutID = setTimeout(function(){
      intervalID = setInterval(function(){
        n ++
        change()
      },3000)
    },5000)
  }//fn_autoplay
  $(".home_visual .controls button").click(function () {
    n = $(this).attr("data-n")
    change()
    autoplay()
  })



})//ready