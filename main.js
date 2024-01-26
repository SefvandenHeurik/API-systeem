function openTab(tabName) {
    // Verberg alle tabbladen
    var tabs = document.getElementsByClassName("tabContent");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = "none";
    }
  
    // Toon het gekozen tabblad
    document.getElementById(tabName).style.display = "block";
  }

function redirectToDash() {
    // Redirect to mainscreen.html
    window.location.href = "docenten.php";
}

function redirectTomainscreen() {
  // Redirect to mainscreen.html
  window.location.href = "mainscreen.php";
}
function redirectToregister() {
    // Redirect to forgetpassword.html
    window.location.href = "register_form.php";
}

function redirectToinlogdocent() {
  // Redirect to inlogmain.html
  window.location.href = "inlogdocent.php";
}

function redirectToindex() {
  // Redirect to index.html
  window.location.href = "index.html";
}

  // Haal de ingevoerde tekst op
  var textValue = document.getElementById("textInput").value;
  
  // Voer de actie uit met de opgehaalde tekst (bijv. verzenden naar server)
  console.log("Ingevoerde tekst: ", textValue);

  
  
 

  
