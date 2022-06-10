function changeTabs(evt, tabName) {
    var i, mainSection, tabButtons;
  
    mainSection = document.getElementsByClassName("main_section");
    for (i = 0; i < mainSection.length; i++) {
      mainSection[i].style.display = "none";
    }
  
    tabButtons = document.getElementsByClassName("slidebar_buttons-link");
    for (i = 0; i < tabButtons.length; i++) {
      tabButtons[i].className = tabButtons[i].className.replace(" active", "");
    }
  
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}




