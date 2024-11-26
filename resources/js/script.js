// Script for handling modal behavior
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("login");
    const loginLink = document.querySelector("a[href='#login']");
    const closeButton = document.querySelector(".close-button");

    // Open modal when login link is clicked
    loginLink.addEventListener("click", (e) => {
        e.preventDefault();
        modal.style.display = "flex";
    });

    // Close modal when close button is clicked
    closeButton.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Close modal if clicking outside modal content
    window.addEventListener("click", (e) => {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    });
});
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
}
});
