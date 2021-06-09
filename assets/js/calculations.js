/**
 * calculations
 */

// vars
const calcBtn = document.querySelector(".calc-btn");
const threeMonthCalc = document.getElementById("threeMonthCalc");
const sixMonthCalc = document.getElementById("sixMonthCalc");
const twelveMonthCalc = document.getElementById("twelveMonthCalc");

// calculations select
const calcSelectBtn = document.getElementById("calcSelectBtn");

calcSelectBtn.addEventListener("click", function () {
  const calculationsSelect = document.getElementById("calculations");
  const calculationsContainer = document.querySelectorAll(
    ".calculation-container"
  );

  for (let i = 0; i < calculationsContainer.length; i++) {
    calculationsContainer[i].style.display = "none";
    if (calculationsSelect.value === calculationsContainer[i].id) {
      calculationsContainer[i].style.display = "block";
    }
  }
});

// 3 month
threeMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(
    ".three-months-calculation-input"
  );
  let totalCalc = document.getElementById("three-month-total-calc");
  let averageCalc = document.getElementById("three-month-average-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  totalCalc.innerHTML = sum.toFixed(2);
  averageCalc.innerHTML = average.toFixed(2);
});

// 6 month average
sixMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(
    ".six-months-calculation-input"
  );
  let totalCalc = document.getElementById("six-month-total-calc");
  let averageCalc = document.getElementById("six-month-average-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  totalCalc.innerHTML = sum.toFixed(2);
  averageCalc.innerHTML = average.toFixed(2);
});

// 12 month average
twelveMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  const inputFields = document.querySelectorAll(
    ".twelve-months-calculation-input"
  );
  let totalCalc = document.getElementById("twelve-month-total-calc");
  let averageCalc = document.getElementById("twelve-month-average-calc");

  let sum = 0;
  let average;

  for (let i = 0; i < inputFields.length; i++) {
    let value = parseFloat(inputFields[i].value);
    sum = sum + value;
    average = sum / i;
  }

  totalCalc.innerHTML = sum.toFixed(2);
  averageCalc.innerHTML = average.toFixed(2);
});

// credit limit
const calcCreditLimit = document.getElementById("creditLimitCalc");

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

// clear fields and values
const clearInputFields = document.querySelectorAll(".clear-btn");

for (let i = 0; i < clearInputFields.length; i++) {
  clearInputFields[i].addEventListener("click", (event) => {
    event.preventDefault();

    const inputArray = document.getElementsByTagName("input");
    for (let j = 0; j < inputArray.length; j++) {
      inputArray[j].value = "";
    }

    const calcOutput = document.querySelectorAll(".calc-output");
    for (let k = 0; k < calcOutput.length; k++) {
      calcOutput[k].innerHTML = "";
    }
  });
}
