 
let count = 0;

document.querySelector(".des").addEventListener("click", () => {
    count--;
    document.querySelector(".number").innerHTML = count;
    if(count<=1){
      document.querySelector(".number").innerHTML = count=1;

    }
});

document.querySelector(".inc").addEventListener("click", () => {
    count++;
    document.querySelector(".number").innerHTML = count;
});



  document.querySelector(".img1").src ="./img/banner.png";

 



 
