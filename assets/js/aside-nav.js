/**
 * aside navigation dropdown
 */

const link = document.querySelectorAll(".dropdown-link");
//console.log(link);
const dropdown = document.querySelectorAll(".dropdown-nav");
//console.log(dropdown);

for (let i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function () {
    console.log("Click!");
    //for (i = 0; i < dropdown.length; i++) {
    if (dropdown[i].style.display === "none") {
      dropdown[i].style.display = "block";
    } else {
      dropdown[i].style.display = "none";
    }
    //}
  });
}
