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
 * aside navigation slider
 */

const slider = document.getElementById('slider');
slider.addEventListener('click', navSlider());
function navSlider(e) {
  console.log(e.target);
}

/**
 * calculations
 */

// vars
const calcThreeMonth = document.getElementById("threeMonthCalc");
const calcSixMonth = document.getElementById("sixMonthCalc");
const calcTwelveMonth = document.getElementById("twelveMonthCalc");
const clearInputFields = document.querySelectorAll(".clear-btn");
const calcCreditLimit = document.getElementById("creditLimitCalc");

// 3 month average
calcThreeMonth.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(".calc-input-three");
  let totalCalc = document.getElementById("total-three-month-calc");
  let averageCalc = document.getElementById("average-three-month-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  totalCalc.value = sum;
  averageCalc.value = average;
});

// 6 month average
calcSixMonth.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(".calc-input-six");
  let totalCalc = document.getElementById("total-six-month-calc");
  let averageCalc = document.getElementById("average-six-month-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  console.log(totalCalc);
  console.log(averageCalc);
  console.log(`Sum = ${sum}, Average = ${average}`);
  totalCalc.value = sum;
  averageCalc.value = average;
});

// 12 month average
calcTwelveMonth.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(".calc-input-twelve");
  let totalCalc = document.getElementById("total-twelve-month-calc");
  let averageCalc = document.getElementById("average-twelve-month-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  console.log(totalCalc);
  console.log(averageCalc);
  console.log(`Sum = ${sum}, Average = ${average}`);
  totalCalc.value = sum;
  averageCalc.value = average;
});

// clear fields
for (let j = 0; j < clearInputFields.length; j++) {
  clearInputFields[j].addEventListener("click", (event) => {
    event.preventDefault();
    const inputArray = document.getElementsByTagName("input");

    for (let i = 0; i < inputArray.length; i++) {
      inputArray[i].value = "";
    }
  });
}

// credit limit
calcCreditLimit.addEventListener("click", (event) => {
  event.preventDefault();

  const netSalary = document.getElementById("net-salary");
  const suspensions = document.getElementById("suspensions");
  let thirdSalary = document.getElementById("one-third-salary");
  let halfSalary = document.getElementById("one-half-salary");
  const thirdSalaryLimit = document.getElementById("one-third-limit");
  const halfSalaryLimit = document.getElementById("one-half-limit");

  third = parseFloat(netSalary.value) / 3;
  half = parseFloat(netSalary.value) / 2;

  const thirdLimit = third - parseFloat(suspensions.value);
  const halfLimit = half - parseFloat(suspensions.value);

  thirdSalary.value = third;
  halfSalary.value = half;
  thirdSalaryLimit.value = thirdLimit;
  halfSalaryLimit.value = halfLimit;
});

/**
 * table search
 */

// contact search
function contactSearch() {
  // vars
  const input = document.getElementById("search-bar");
  const filter = input.value.toUpperCase();
  const table = document.getElementById("address-book");
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
  const table = document.getElementById("account-plan");
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
  const table = document.getElementById("account-plan");
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
  const table = document.getElementById("account-plan");
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
