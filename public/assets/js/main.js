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
// Kenko-Web : Trust Section : logos animation
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

// ----------------------------
// Kenko-Ho : Slider
// ----------------------------
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');

if (next && prev) {
    next.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    });

    prev.addEventListener('click', () => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    });

    // Auto run slider
    setInterval(() => {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    }, 3000);
}
