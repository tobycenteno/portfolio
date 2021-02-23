let percent = document.querySelector('.percent');
let body = document.querySelector('body');
let loader = document.querySelector('.home-loader');
let val = 0;


if(loader) {
  if (!sessionStorage.getItem( 'doNotShow' ) ) {
    sessionStorage.setItem( 'doNotShow', true );
    setTimeout(() => {
      var timer = setInterval(function(){
        if(val >= 99){
          clearInterval(timer);
       }
       val++;
       percent.innerHTML = val;
      },30);
    }, 500);
   
    setTimeout(() => {
       body.classList.add('loaded');
    }, 4000);
  
    setTimeout(() => {
      AOS.init();
    }, 5000);
  
  } else {
    loader.style.display = "none";
    AOS.init();
  }
}

$(document).ready(function() {
  $('.image-link').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    alignTop : true,
    image: {
      verticalFit: false
    }
  });
});
  





