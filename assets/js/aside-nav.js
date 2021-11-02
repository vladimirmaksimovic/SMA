// custom header navbar dropdown
const dropBtn = document.querySelector(".links-drop");
const dropContainer = document.querySelector(".links-container");

const hideLinks = () => {
  dropContainer.style.display = "none";
};

function showLinks() {
  dropContainer.style.display = "flex";
}

dropBtn.addEventListener("mouseenter", showLinks);
dropContainer.addEventListener("mouseleave", hideLinks);

// custom aside navbar dropdown

const dropdownBtn = document.getElementsByClassName("dropdown-btn");
/* var i; */
const dropdownNav = document.getElementsByClassName("dropdown-container");

for (let i = 0; i < dropdownBtn.length; i++) {
  dropdownBtn[i].addEventListener("click", function () {
    this.classList.toggle("active");
    //var dropdownContent = this.nextElementSibling;
    if (dropdownNav[i].style.display === "flex") {
      dropdownNav[i].style.display = "none";
    } else {
      dropdownNav[i].style.display = "flex";
    }
  });
}
