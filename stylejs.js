var typed = new Typed(".text", {
    strings: ["Software developer", "Full stack developer"], //"Backend, database and Frontend developer", "web developer", "mobile developer", "software developer"],
    typeSpeed: 100, // Corrected from "typespeed" to "typeSpeed"
    backSpeed: 100, // Corrected from "backspeed" to "backSpeed"
    backDelay: 100, // Corrected from "backdelay" to "backDelay"
    loop: true
});

const circles = document.querySelectorAll('.circle');

circles.forEach(elem => {
    // Retrieve the number of dots and the percentage value from the data attributes
    const dots = parseInt(elem.getAttribute("data-dots"), 10);
    const percent = parseFloat(elem.getAttribute("data-percent"));

    // Validate if the retrieved data is valid
    if (isNaN(dots) || isNaN(percent)) {
        console.error("Invalid data-dots or data-percent value.");
        return;
    }

    // Calculate the number of dots to be marked based on the percentage
    const markedDots = Math.floor(dots * percent / 100);
    let points = "";
    const rotate = 360 / dots;  // Calculate the rotation angle for each dot

    for (let i = 0; i < dots; i++) {
        // Add a 'glow' class if the dot should be marked
        const isMarked = i < markedDots ? 'glow' : '';
        points += `<div class="points ${isMarked}" style="--i:${i}; --rot:${i * rotate}deg;"></div>`;
    }

    // Set the inner HTML of the element to the generated points
    elem.innerHTML = points;
});

// @ media menu styling
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let selections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height)
        {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a [href*=' + id + ' ]').classList.add('active')
            })
        }
    })
}
menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
