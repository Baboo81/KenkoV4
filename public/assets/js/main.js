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

// ----------------------------
// Trust Section : logos animation
// ----------------------------
document.addEventListener("DOMContentLoaded", () => {
    const logos = document.querySelectorAll(".logo");
    let index = 0;
    if (logos.length > 0) {
        setInterval(() => {
            logos[index].classList.remove("active");
            index = (index + 1) % logos.length;
            logos[index].classList.add("active");
        }, 3000);
    }
});
