// 🍔 menu.js
// Adds interactivity for the hamburger button on mobile
// - Toggles navigation visibility
// - Animates the hamburger icon into an "X"

document.addEventListener("DOMContentLoaded", function () {
  // 🔍 Get the hamburger button and nav menu by ID
  const hamburger = document.getElementById("hamburger");
  const nav = document.getElementById("mainNav");

  // ✅ When the button is clicked...
  hamburger.addEventListener("click", () => {
    // 👇 Show/hide the navigation menu
    nav.classList.toggle("active");
    //console.log("Swap Hamburger");

    // ✖️ Animate the hamburger into an X and back
    hamburger.classList.toggle("active");
  });
});
