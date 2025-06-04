let b2 = document.querySelector(".b2");
let b1 = document.querySelector(".b1");

let dis1 = document.querySelector('.dis-con');
let dis2 = document.querySelector('.review-main');

let i =1;
b2.addEventListener("click", () => {
  
    dis2.classList.remove("remove2");
    dis1.classList.add("remove");
    b2.classList.add("ad2")
    b1.classList.add("ad1")
     


    

   

    
});


b1.addEventListener("click", () => {
  
    dis2.classList.add("remove2");
    dis1.classList.remove("remove");
     b2.classList.remove("ad2")
    b1.classList.remove("ad1")

      

   

    
});

 
 
  
 