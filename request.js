function createRequest() {
  if (window.XMLHttpRequest) {
    // Code for IE7+, Firefox, Chrome, Opera, Safari
    return new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    // Code for IE6, IE5
    return new ActiveXObject('Microsoft.XMLHTTP');
  } else {
    return null;
  }
}
