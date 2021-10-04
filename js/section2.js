$(function () {
  $(".section2_slider .imgbox1").clone().appendTo(".section2 .slider_container")
  $(".section2_slider .imgbox3").clone().prependTo(".section2 .slider_container")
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
    $(".section2_slider .slider_container").stop().animate({ "left": (n - 1) * -100 + "%" }, function () {
      if (n > 3) { n = 1 }
      if (n < 1) { n = 3 }
      $(".section2_slider .slider_container").css("left", (n - 1) * -100 + "%")
    })
    setTimeout(function () { flag = true }, 500)
    $(".section2 .controls button").removeClass("active")
    $(".section2 .controls .btn"+n).addClass("active")
    $(".section2 .desc_slider .textbox").removeClass("active")
    $(".section2 .desc_slider .textbox"+n).addClass("active")

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
  $(".section2 .controls button").click(function () {
    n = parseInt($(this).attr("data-n"))
    change()
    autoplay()
  })
  
  

})//ready