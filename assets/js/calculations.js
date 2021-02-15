/* const sumBtn = document.getElementById("threeMonthCalc");
console.log(inputFields[1].value);

sumBtn.addEventListener("click", (event) => {
  event.preventDefault();
  const inputFields = document.getElementsByClassName("calc-input");
  for (let i = 0; i < inputFields.length; i++) {
    let sum = 0;
    inputFields.value += inputFields[i].value;
    console.log(inputFields);
  }
}) */

// 3 month average
const threeMonthCalc = document.getElementById("threeMonthCalc");
const clearInputFields = document.getElementById("btn-clear");

threeMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  // get inputs
  const firstMonth = parseFloat(document.getElementById("first-month").value);

  const secondMonth = parseFloat(document.getElementById("second-month").value);
  const thirdMonth = parseFloat(document.getElementById("third-month").value);
  const totalMonth = document.getElementById("total-month");
  const averageMonth = document.getElementById("average-month");

  // total
  const total = firstMonth + secondMonth + thirdMonth;
  totalMonth.value = parseFloat(total);

  // average
  const average = total / 3;
  averageMonth.value = average
})

// clear fields
clearInputFields.addEventListener("click", (event) => {
  event.preventDefault();

  const inputArray = document.getElementsByTagName("input");
  console.log(inputArray[0]);

  for (let i = 0; i < inputArray.length; i++) {
    inputArray[i].value = '';
  }
})

// 6 month average


// 12 month average
