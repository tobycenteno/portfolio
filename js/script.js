let percent = document.querySelector('.percent');
let body = document.querySelector('body');
let val = 0;


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

