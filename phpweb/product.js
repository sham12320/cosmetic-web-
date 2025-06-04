let b3 = document.querySelector(".b3"); // Selects the first element with class "b3"

b3.addEventListener("click", (e) => {
    e.preventDefault(); // Prevents the default action (like link navigation)
    console.log(1);     // Logs 1 in the console when clicked
});





let b3i = document.querySelector(".b3i"); 

b3i.addEventListener("click", (e) => {
    e.preventDefault()
    console.log(2); // Logs the number 1 when the element is clicked
});
