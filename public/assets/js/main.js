"use strict";

//-----------------------
// Librairie : Lucide
//-----------------------
document.addEventListener("DOMContentLoaded", () => {
    if(window.lucide) {
        lucide.createIcons();
    }
});

// ----------------------------
// Logo animation
// ----------------------------
let logo = document.getElementById('logoAnimation');
let largeurEcran = window.innerWidth - 50;
let hauteurEcran = window.innerHeight - 50;

if (logo) {
    setInterval(() => {
        const x = Math.random() * largeurEcran;
        const y = Math.random() * hauteurEcran;
        logo.style.left = x + 'px';
        logo.style.top = y + 'px';
    }, 3000);
}

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
    }, 8000);
}

// ----------------------------
// Kenko : Footer
// ----------------------------
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('mapid');

    // Vider le container pour éviter une map "fantôme"
    if (mapContainer) mapContainer.innerHTML = "";

    // Créer la map seulement si elle n'existe pas encore
    if (!window.map) {
        window.map = L.map('mapid').setView([50.71036, 4.36889], 16.4);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(window.map);
        L.marker([50.71036, 4.36889]).addTo(window.map);
    }
});
