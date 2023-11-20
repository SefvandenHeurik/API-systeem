function openTab(tabName) {
    // Verberg alle tabbladen
    var tabs = document.getElementsByClassName("tabContent");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = "none";
    }
  
    // Toon het gekozen tabblad
    document.getElementById(tabName).style.display = "block";
  }