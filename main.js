function openTab(tabName) {
    // Verberg alle tabbladen
    var tabs = document.getElementsByClassName("tabContent");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = "none";
    }
  
    // Toon het gekozen tabblad
    document.getElementById(tabName).style.display = "block";
  }

function redirectTomainscreen() {
    // Redirect to mainscreen.html
    window.location.href = "mainscreen.html";
}
function redirectToforgetpassword() {
    // Redirect to forgetpassword.html
    window.location.href = "forgetpassword.html";
}

function redirectTomainscreen() {
    // Redirect to mainscreen.html
    window.location.href = "mainscreen.html";
}

function redirectToinlogdocent() {
  // Redirect to inlogmain.html
  window.location.href = "inlogdocent.html";
}

function redirectToindex() {
  // Redirect to index.html
  window.location.href = "index.html";
}

  // Haal de ingevoerde tekst op
  var textValue = document.getElementById("textInput").value;
  
  // Voer de actie uit met de opgehaalde tekst (bijv. verzenden naar server)
  console.log("Ingevoerde tekst: ", textValue);
  
  // Reset het invoerveld naar leeg
  document.getElementById("textInput").value = "";

