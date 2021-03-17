// object loop
const infoObject = {
  "full_name": "Bruce Lee",
  "title": "legend",
  "links": {
    "crf": "https://crf.trezor.gov.rs/",
    "croso": "https://www.croso.gov.rs/cir/index.php",
    "trezor": "https://www.trezor.gov.rs/src/",
    "poreska": "https://www.purs.gov.rs/",
    "eUprava": "https://euprava.gov.rs/",
    "gradKraljevo": "https://www.kraljevo.rs/",
    "nbs": "https://nbs.rs/sr_RS/indeks/",
    "vmCommerce": "https://vmcommerce.rs/",
    "maxPro": "https://maxpro.rs/",
    "skola": "https://ossvetozarmarkovic.wordpress.com/"
  }
}

let output = "";

for (const key in infoObject.links) {
  // if the links has the key property
  // for ... go trough each link
  if (infoObject.links.hasOwnProperty(key)) {
    output += '<li style="background: #f1c40f;">' +
      '<a href = "' + infoObject.links[key] + '">' + key + '</a>' +
      '</li>';
  }
}

const update = document.querySelector(".unordered-info");
console.log(update);

update.innerHTML = output;

// ------------------------------ //

// array loop
const infoObjectArray = {
  "full_name": "Bruce Lee",
  "title": "legend",
  "links": [
    { "crf": "https://crf.trezor.gov.rs/" },
    { "croso": "https://www.croso.gov.rs/cir/index.php" },
    { "trezor": "https://www.trezor.gov.rs/src/" },
    { "poreska": "https://www.purs.gov.rs/" },
    { "eUprava": "https://euprava.gov.rs/" },
    { "gradKraljevo": "https://www.kraljevo.rs/" },
    { "nbs": "https://nbs.rs/sr_RS/indeks/" },
    { "vmCommerce": "https://vmcommerce.rs/" },
    { "maxPro": "https://maxpro.rs/" },
    { "skola": "https://ossvetozarmarkovic.wordpress.com/" },
  ],
}

let outputArray = "";

for (let i = 0; i < infoObjectArray.links.length; i++) {
  for (const key in infoObjectArray.links[i]) {
    if (infoObjectArray.links[i].hasOwnProperty(key)) {
      outputArray += '<li style="background: #2ecc71;">' +
        '<a href="' + infoObjectArray.links[i][key] + '">' + key + '</a>' +
        '</li>';
    }
  }
}

const orderedUpdate = document.querySelector(".ordered-info");
console.log(orderedUpdate);

orderedUpdate.innerHTML = outputArray;