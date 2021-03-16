// swap logo with login form
const logoLink = document.getElementById("logo");
const loginContainer = document.querySelector(".login-container");

logoLink.addEventListener("click", () => {
  logoLink.style.display = "none";
  loginContainer.style.display = "block";
});

// login f-n and validation
const loginBtn = document.getElementById("login-btn");

loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  //vars
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const loginForm = document.getElementById("login-form");

  //validation
  if (username === "user" && password === "pass") {
    window.location = "./../../pages/info.html";
    return false;
  } else {
    alert("Погрешно корисничко име или шифра.");
    loginForm.reset();
  }
});