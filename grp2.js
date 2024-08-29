// code for onclick for info button
function showInfo(containerId) {
    document.getElementById(containerId).style.display = 'block';
}

function hideInfo(containerId) {
    document.getElementById(containerId).style.display = 'none';
}
// for backtotop button
let backToTopBtn = document.getElementById('backToTop');

// Show the button when the user scrolls down 15px from the top of the document
window.onscroll = function () {
    if (
        document.body.scrollTop > 15 ||
        document.documentElement.scrollTop > 15
    ) {
        backToTopBtn.style.display = 'block';
    } else {
        backToTopBtn.style.display = 'none';
    }
};

// Function to scroll to the top of the document
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
}
