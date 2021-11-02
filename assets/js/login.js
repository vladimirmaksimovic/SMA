/**
 * Login vars
 */

const logo = document.querySelector("#logo");
const loginContainer = document.querySelector(".login-container");
const landingMenu = document.querySelector(".landing-menu-container");
const loginBtn = document.getElementById("login-btn");

/**
 * Login f-n toggler
 */

const logoToggler = () => {
  logo.style.display = "none";
  loginContainer.style.display = "block";
};

logo.addEventListener("click", logoToggler);

logo !== null ? logo.addEventListener("click", logoToggler) : console.error("");

/**
 * Login validation
 */

loginBtn.addEventListener("click", (e) => {
  e.preventDefault();

  // login input vars
  const username = document.querySelector("#username").value;
  const password = document.querySelector("#password").value;
  const loginForm = document.querySelector("#login-form");
  const loginMsg = document.querySelector("#login-msg");

  const validationMsg = (msg) => {
    const loginErrorMsg = document.createElement("p");
    loginMsg.append(loginErrorMsg);
    loginErrorMsg.textContent = msg;
    loginMsg.style.display = "block";
    loginForm.reset();
    setTimeout(() => {
      loginMsg.removeChild(loginMsg.childNodes[0]);
      loginMsg.style.display = "none";
    }, 1750);
  };

  //validation
  if (username === "user" && password === "pass") {
    /* window.location = "./../../view/pages/info.php";
     return false; */
    loginContainer.style.display = "none";
    landingMenu.style.display = "flex";
  } else if (username === "" && password === "") {
    validationMsg("* Унесите корисничко име и лозинку!");
  } else if (username !== "user" || username === "") {
    validationMsg("* Погрешно корисничко име!");
  } else if (password !== "pass" || password === "") {
    validationMsg("* Погрешна лозинка!");
  }
});
