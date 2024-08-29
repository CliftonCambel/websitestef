document.getElementById('contactForm').addEventListener('submit', function(event) {
    var naam = document.getElementById('naam').value.trim();
    var email = document.getElementById('email').value.trim();
    var onderwerp = document.getElementById('onderwerp').value.trim();
    var bericht = document.getElementById('bericht').value.trim();

    if (naam === "" || email === "" || onderwerp === "" || bericht === "") {
        alert("Alle velden zijn verplicht!");
        event.preventDefault(); // Voorkom het verzenden van het formulier
    } else if (!validateEmail(email)) {
        alert("Vul een geldig e-mailadres in!");
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
    });
});
