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
