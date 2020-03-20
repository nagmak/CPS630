window.addEventListener("load", function() {
    // CHROME
    if (navigator.userAgent.indexOf("Chrome") != -1 ) {
      console.log("Google Chrome");
    }
    // FIREFOX
    else if (navigator.userAgent.indexOf("Firefox") != -1 ) {
      console.log("Mozilla Firefox");
    }
    // INTERNET EXPLORER
    else if (navigator.userAgent.indexOf("MSIE") != -1  || navigator.userAgent.indexOf("Trident") != -1) {
      console.log("Internet Exploder");
    }
    // EDGE
    else if (navigator.userAgent.indexOf("Edge") != -1 ) {
      console.log("Internet Exploder");
    }
    // SAFARI
    else if (navigator.userAgent.indexOf("Safari") != -1 ) {
      console.log("Safari");
    }
    // OPERA
    else if (navigator.userAgent.indexOf("Opera") != -1 ) {
      console.log("Opera");
    }
    // YANDEX BROWSER
    else if (navigator.userAgent.indexOf("Opera") != -1 ) {
      console.log("YaBrowser");
    }
    // OTHERS
    else {
      console.log("Others");
    }
  });