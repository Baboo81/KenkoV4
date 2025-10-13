"use strict";

//-----------------------
// Librairie : Lucide
//-----------------------
document.addEventListener("DOMContentLoaded", () => {
    if(window.lucide) {
        lucide.createIcons();
    }
});

//---------------------------
// Kenko-web : cards-popup
//---------------------------
function showPopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "flex";
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) popup.style.display = "none";
}
