// vars
/* let totalMonth = document.querySelectorAll(".calc-total-output");
let averageMonth = document.querySelectorAll(".calc-average-output"); */
const calcThreeMonth = document.getElementById("threeMonthCalc");
const calcSixMonth = document.getElementById("sixMonthCalc");
const calcTwelveMonth = document.getElementById("twelveMonthCalc");
//const clearInputFields = document.getElementById("btn-clear");
const clearInputFields = document.querySelectorAll(".clear-btn");
const calcCreditLimit = document.getElementById("creditLimitCalc");
/* const calcBtn = document.querySelectorAll(".calc-btn");
console.log(calcBtn); */

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

  //console.log(totalCalc);
  //console.log(averageCalc);
  //console.log(`Sum = ${sum}, Average = ${average}`);
  totalCalc.value = sum;
  averageCalc.value = average;

  //console.log(totalMonth);
  /* for (let i = 0; i < totalMonth.length; i++) {
    totalMonth[i].value = sum;
    averageMonth[i].value = average;
  } */
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

  //console.log(totalMonth);
  /* for (let i = 0; i < totalMonth.length; i++) {
    totalMonth[i].value = sum;
    averageMonth[i].value = average;
  } */
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

  //console.log(totalMonth);
  /* for (let i = 0; i < totalMonth.length; i++) {
    totalMonth[i].value = sum;
    averageMonth[i].value = average;
  } */
});


// 3 month average
/* const threeMonthCalc = document.getElementById("threeMonthCalc");

threeMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  get inputs
  const firstMonth = parseFloat(document.getElementById("first-month").value);

  const secondMonth = parseFloat(document.getElementById("second-month").value);
  const thirdMonth = parseFloat(document.getElementById("third-month").value);
  const totalMonth = document.getElementById("total-month");
  const averageMonth = document.getElementById("average-month");

  total
  const total = firstMonth + secondMonth + thirdMonth;
  totalMonth.value = parseFloat(total);

  average
  const average = total / 3;
  averageMonth.value = average
}) */

// clear fields
for (let j = 0; j < clearInputFields.length; j++) {
  clearInputFields[j].addEventListener("click", (event) => {
    event.preventDefault();
    const inputArray = document.getElementsByTagName("input");

    for (let i = 0; i < inputArray.length; i++) {
      inputArray[i].value = '';
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
  halfSalary.value = half
  thirdSalaryLimit.value = thirdLimit;
  halfSalaryLimit.value = halfLimit;
});