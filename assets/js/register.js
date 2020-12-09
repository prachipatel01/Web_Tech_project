var loginbtn = document.querySelector('.login-btn');
var loginbg = document.querySelector('.login-bg');
var loginClose = document.querySelector('.login-close');



loginbtn.addEventListener('click', function(){
  loginbg.classList.add('bg-active');
})

loginClose.addEventListener('click', function(){
  loginbg.classList.remove('bg-active');
})



const header = document.querySelector("nav");

window.addEventListener("scroll", function(){
  let scrollPosition = window.pageYOffset;
  let scrollvalue = scrollPosition*0.9;
  
  if(scrollvalue>80){
    header.style.visibility="hidden";
  }
  else{
    header.style.visibility="visible";
  }
  //parallex2.style.transform  = 'translateY(' + scrollPosition*(-1) + 'px';

})


$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});