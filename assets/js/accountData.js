// JS AJAX

// define request var
let request;

// check for Http Request and store it
if (window.XMLHttpRequest) {
  request = new XMLHttpRequest();
} else {
  request = new ActiveXObject("Microsoft.XMLHTTP");
}

// open request asking for specific file
request.open("GET", "/assets/data/data.json");

// event handler to monitor status of the request
request.onreadystatechange = function () {
  if (request.status === 200 && request.readyState === 4) {
    // parse json data into string
    const info = JSON.parse(request.responseText);

    let output = "";

    for (let i = 0; i < info.links.length; i++) {
      for (const key in info.links[i]) {
        if (info.links[i].hasOwnProperty(key)) {
          output +=
            '<li style="background: #9b59b6;">' +
            '<a href="' +
            infoObjectArray.links[i][key] +
            '">' +
            key +
            "</a>" +
            "</li>";
        }
      }
    }

    const update = document.querySelector(".account-info");

    update.innerHTML = output;
  }
};

// send request to server
request.send();
