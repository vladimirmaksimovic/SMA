/**
 * login
 */

// swap logo with login form
const logoLink = document.getElementById("logo");
const loginContainer = document.querySelector(".login-container");
const landingMenu = document.querySelector(".landing-menu-container");

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
  const loginMsg = document.getElementById("login-msg");

  function validationMsg(msg) {
    const p = document.createElement("P");
    loginMsg.appendChild(p).innerText = `${msg}`;
    loginMsg.style.display = "block";
    loginForm.reset();
    setTimeout(() => {
      loginMsg.removeChild(loginMsg.childNodes[0]);
      loginMsg.style.display = "none";
    }, 4000);
  }

  //validation
  if (username === "user" && password === "pass") {
    /* window.location = "./../../view/pages/info.php";
    return false; */
    loginContainer.style.display = "none";
    landingMenu.style.display = "flex";
  } else if (username === "" && password === "") {
    validationMsg("* Unesite korisnicko ime i lozinku");
  } else if (username !== "user" || username === "") {
    validationMsg("* Pogresno korisnicko ime");
  } else if (password !== "pass" || password === "") {
    validationMsg("* Pogresna lozinka");
  }
});

/**
 * table search
 */

// contact search
function contactSearch() {
  // vars
  const input = document.getElementById("search-bar");
  const filter = input.value.toUpperCase();
  const table = document.getElementById("address-table");
  const tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// search by account name
function accountSearch() {
  // vars
  const input = document.getElementById("search-bar");
  const filter = input.value.toUpperCase();
  const table = document.getElementById("account-table");
  const tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // change to [0] for search by account number
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// search by account
function accountNameSearch() {
  // vars
  const input = document.getElementById("search-bar-name");
  const filter = input.value.toUpperCase();
  const table = document.getElementById("account-table");
  const tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // [0] for search by account number, [1] for search by account name
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

// search by account number
function accountNumberSearch() {
  // vars
  const input = document.getElementById("search-bar-number");
  const filter = input.value.toUpperCase();
  const table = document.getElementById("account-table");
  const tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    // [0] for search by account number, [1] for search by account name
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
