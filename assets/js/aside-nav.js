/**
 * aside navigation dropdown
 */

/* const link = document.querySelectorAll(".dropdown-link");
const dropdown = document.querySelectorAll(".dropdown-nav");

for (let i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function () {
    if (dropdown[i].style.display === "none") {
      dropdown[i].style.display = "block";
    } else {
      dropdown[i].style.display = "none";
    }
  });
} */

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
/* var dropdown = document.getElementsByClassName("nav-container");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} */

const dropdownBtn = document.getElementsByClassName("dropdown-btn");
/* var i; */
const dropdownNav = document.getElementsByClassName("dropdown-container");

for (let i = 0; i < dropdownBtn.length; i++) {
  dropdownBtn[i].addEventListener("click", function () {
    this.classList.toggle("active");
    //var dropdownContent = this.nextElementSibling;
    if (dropdownNav[i].style.display === "block") {
      dropdownNav[i].style.display = "none";
    } else {
      dropdownNav[i].style.display = "block";
    }
  });
}