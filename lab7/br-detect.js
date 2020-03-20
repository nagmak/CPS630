window.addEventListener("load", function() {
    // CHROME
    if (navigator.userAgent.indexOf("Chrome") != -1 ) {
      var theDiv = document.getElementById("javascriptstuff");
      var content = document.createTextNode("Google Chrome");
      theDiv.appendChild(content);

      //console.log("Google Chrome");
    }
    // FIREFOX
    else if (navigator.userAgent.indexOf("Firefox") != -1 ) {
      var theDiv = document.getElementById("javascriptstuff");
      var content = document.createTextNode("Mozilla Firefox");
      theDiv.appendChild(content);
    }
    // INTERNET EXPLORER
    else if (navigator.userAgent.indexOf("MSIE") != -1  || navigator.userAgent.indexOf("Trident") != -1) {
      var theDiv = document.getElementById("javascriptstuff");
      var content = document.createTextNode("Internet Exploder");
      theDiv.appendChild(content);
    }
    // OTHERS
    else {
      var theDiv = document.getElementById("javascriptstuff");
      var content = document.createTextNode("Others");
      theDiv.appendChild(content);
    }
  });