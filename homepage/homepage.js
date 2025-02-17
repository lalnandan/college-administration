// Add interactivity (e.g., animations, dynamic content loading)
document.addEventListener("DOMContentLoaded", function () {
    // Example: Add animation to feature cards
    const featureCards = document.querySelectorAll(".feature-cards .card");
    featureCards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "opacity 0.5s, transform 0.5s";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, index * 200);
    });
});