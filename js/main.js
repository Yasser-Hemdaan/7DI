const parentContainer = document.querySelector(".parentContainer");
const menuBtn = document.querySelector("#menu");
const navBody = document.querySelector(".navBody");
const toTopBtn = document.querySelector(".toTopBtn");


menuBtn.addEventListener("click", (ev) => {
  if (navBody.style.right === "") {
    menuBtn.style.position = "fixed";
    navBody.style.right = "0";
  } else {
    menuBtn.style.position = "";
    navBody.style.right = "";
  }
});





















// window.addEventListener("scroll", () => {
//     const scrolled = window.scrollY;
//     if(scrolled > 200){
//         toTopBtn.fadeIn("normal");
//   }
//   else{
//     toTopBtn.fadeOut("normal");
//   }
    
// });
