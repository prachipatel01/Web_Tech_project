$('.read-more-1').click(function(){
  $('.read-more-1').css("display","none");
  $('.content-hidden-1').css("display","contents");
  $('.read-less-1').css("display","contents");
});
$('.read-less-1').click(function(){
  $('.read-more-1').css("display","contents");
  $('.content-hidden-1').css("display","none");
  $('.read-less-1').css("display","none");
});

$('.read-more-2').click(function(){
  $('.read-more-2').css("display","none");
  $('.content-hidden-2').css("display","contents");
  $('.read-less-2').css("display","contents");
});
$('.read-less-2').click(function(){
  $('.read-more-2').css("display","contents");
  $('.content-hidden-2').css("display","none");
  $('.read-less-2').css("display","none");
});



const header = document.querySelector("nav");

window.addEventListener("scroll", function(){
  
  let scrollPosition = window.pageYOffset;
  let scrollvalue = scrollPosition*0.9;


  if(scrollvalue<100){
    header.style.visibility="visible";
    header.classList.remove("navbar-after");
  }
  else if(scrollvalue>100){
    header.style.visibility="visible";
    header.classList.add("navbar-after");
  }

})
