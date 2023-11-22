function openTab(tabName) {
    // Verberg alle tabbladen
    var tabs = document.getElementsByClassName("tabContent");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = "none";
    }
  
    // Toon het gekozen tabblad
    document.getElementById(tabName).style.display = "block";
  }

function redirectToIndex() {
    // Redirect to index.html
    window.location.href = "index.html";
}
function redirectToforgetpassword() {
    // Redirect to forgetpassword.html
    window.location.href = "forgetpassword.html";
}

function redirectToInlogmain() {
    // Redirect to Inlogmain.html
    window.location.href = "Inlogmain.html";
}

function redirectToInlogmain() {
  // Redirect to Inlogmain.html
  window.location.href = "Inlogmain.html";
}