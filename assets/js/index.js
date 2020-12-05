var loginbtn = document.querySelector('.login-btn');
var loginbg = document.querySelector('.login-bg');
var signupbtn = document.querySelector('.signup-btn');
var signupbg = document.querySelector('.signup-bg');
var signupClose = document.querySelector('.signup-close');
var loginClose = document.querySelector('.login-close');
$(document).ready(function(){
    // Activate the Carousel, but pause it from the start
    $("#myCarousel").carousel("pause");
          
    // Click on the button to start sliding 
    $(".modal-close").click(function(){
      $("#myCarousel").carousel("cycle");
    });
  
    // Click on the button to stop sliding 
    $("#myBtn2").click(function(){
      $("#myCarousel").carousel("pause");
    });
      
    // Enable Carousel Indicators
    $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
      
    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
      $("#myCarousel").carousel("next");
    });
  });

loginbtn.addEventListener('click', function(){
  signupbg.classList.remove('bg-active');
  loginbg.classList.add('bg-active');
})

signupbtn.addEventListener('click', function(){
  loginbg.classList.remove('bg-active');
  signupbg.classList.add('bg-active');
})

signupClose.addEventListener('click', function(){
  signupbg.classList.remove('bg-active');
})

loginClose.addEventListener('click', function(){
  loginbg.classList.remove('bg-active');
})

const header = document.querySelector("nav");

window.addEventListener("scroll", function(){
  const parallex = document.getElementsByClassName("div2")[0];
  //const parallex2 = document.getElementsByClassName("s-c")[0];
  let scrollPosition = window.pageYOffset;
  let scrollvalue = scrollPosition*0.9;
  parallex.style.transform  = 'translateY(' + scrollPosition*0.9 + 'px';
  if(scrollvalue<500){
    header.style.visibility="visible";
    header.classList.remove("navbar-after");
  }
  else if((scrollvalue)>500 && (scrollvalue<1000)){
    header.style.visibility="visible";
    header.classList.add("navbar-after");
  }
  else if(scrollvalue>1000 && scrollvalue<1500){
    header.style.visibility="visible";
    header.classList.remove("navbar-after");
  }
  else if(scrollvalue<500){
    header.style.visibility="visible";
    header.classList.remove("navbar-after");
  }
  else if(scrollvalue>1500){
    header.style.visibility="hidden";
  }
  //parallex2.style.transform  = 'translateY(' + scrollPosition*(-1) + 'px';

})
