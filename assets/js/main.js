// logo show
const logoImg = document.getElementById("logoImg");
//console.log(logoImg);
const signOutContainer = document.getElementById("sign-out-container");

logoImg.addEventListener("click", () => {
  logoImg.style.display = "none";
  signOutContainer.style.display = "block";
});

/* logoImg.addEventListener("mouseleave", () => {
  logoImg.style.display = "block";
  signOutContainer.style.display = "none";
});
 */
