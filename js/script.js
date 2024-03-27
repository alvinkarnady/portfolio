
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    sendMail(); // Call sendMail function

    // You can add additional code here, such as showing a loading spinner
});

// EMAILJS
function sendMail() {
    let parms = {
        name: document.getElementById("name").value,
        subject: document.getElementById("subject").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        message: document.getElementById("message").value
    }
    emailjs.send("service_o3idppd", "template_m20172z", parms)
        .then(function (response) {
            alert("Email Sent!!!");
        }, function (error) {
            alert("Email failed to send. Please try again later or Click Gmail Icon in home page!.");
            console.error('Error sending email:', error);
        });
}



// typed js
const typed = new Typed('.multiple-text', {
    strings: ['Web Developer', 'Graphic Designer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});


// light dark mode

const checkbox = document.querySelector('input[type="checkbox"]');

checkbox.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark-mode");
        // document.body.classList.remove("light-mode");

    } else {
        // document.body.classList.add("light-mode");
        document.body.classList.remove("dark-mode");

    }
});


// toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};



// scroll sections active link 

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');


window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });

    // sticky navbar
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    // remove toggle icon and navbar when click navbar link (scroll)
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');


};


// scroll reveal
ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });


