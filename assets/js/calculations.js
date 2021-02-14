// 3 month average
const threeMonthCalc = document.getElementById("threeMonthCalc");

threeMonthCalc.addEventListener("click", (event) => {
  event.preventDefault();

  // get inputs
  const firstMonth = parseInt(document.getElementById("first-month").value);
  const secondMonth = parseInt(document.getElementById("second-month").value);
  const thirdMonth = parseInt(document.getElementById("third-month").value);
  const totalMonth = document.getElementById("total-month");
  const averageMonth = document.getElementById("average-month");

  // total
  const total = firstMonth + secondMonth + thirdMonth;
  totalMonth.value = total;

  // average
  const average = total / 3;
  averageMonth.value = average
})

// 6 month average


// 12 month average
