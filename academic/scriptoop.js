// Get the button
let topButton = document.getElementById("topBtn");

// Show the button when the user scrolls down 20px from the top of the document
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        topButton.style.display = "block";
    } else {
        topButton.style.display = "none";
    }
}

function backToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function toggleView() {
    const theorySection = document.getElementById('theory-section');
    const practicalSection = document.getElementById('practical-section');
    const switchButton = document.querySelector('.switch-button');

    if (theorySection.style.display === 'none') {
        theorySection.style.display = 'grid';
        practicalSection.style.display = 'none';
        switchButton.textContent = 'Switch to Practical';
    } else {
        theorySection.style.display = 'none';
        practicalSection.style.display = 'grid';
        switchButton.textContent = 'Switch to Theory';
    }

    // Adding smooth transition effects
    theorySection.style.opacity = theorySection.style.display === 'none' ? 0 : 1;
    practicalSection.style.opacity = practicalSection.style.display === 'none' ? 0 : 1;
}
