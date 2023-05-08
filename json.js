let output = document.getElementById('error_email');
let xmlHttp = createRequest();
if (xmlHttp === null) {
  alert('Unable to create request!');
}
function submitData(fdata) {
  xmlHttp.onload = function () {
    console.log(xmlHttp.responseText);
    jData();
  };
  xmlHttp.open(fdata.method, fdata.action, true);
  xmlHttp.send(new FormData(fdata));
  return false;
}

function jData() {
  let url = 'database.php';
  xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
      output.innerHTML = xmlHttp.responseText;
    }
  };
  xmlHttp.open('GET', url, true);
  xmlHttp.send();
}