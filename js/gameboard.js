// gameboard.js
// Adds interactivity for the gameboard portfolio
// - Toggles visibility of project
// - Animates the tiles
// - Moves player piece

document.addEventListener("DOMContentLoaded", function () {
    // 🔍 Get the hamburger button and nav menu by ID
    const tiles = document.querySelectorAll(".game-tiles");
    //const tileDict = {};
    const player = document.querySelector(".player-piece");
    const board = document.querySelector(".board");

    const movePlayerTo = (tile) => {
        const tileRect = tile.getBoundingClientRect();
        const boardRect = board.getBoundingClientRect();
        console.log(tile);

        const x = tileRect.left - boardRect.left;
        const y = tileRect.top - boardRect.top;

        gsap.to(player, {
            x,
            y,
            duration: 0.5,
            ease: "power2.out"
        });
    };

    const sidebar = document.querySelector(".sidebar");

    const updateSidebar = (tile) => {
        const title = tile.dataset.title || "Untitled Project";
        const desc = tile.dataset.desc || "No description.";
        const link = tile.dataset.link || "#";

        sidebar.innerHTML = `
            <h2>${title}</h2>
            <p>${desc}</p>
            <a href="${link}" style="display:inline-block;margin-top:1rem;font-weight:bold;">Learn More →</a>`;
    };

    //movePlayerTo(document.getElementById("tile-0"));

    tiles.forEach((tile) => {
        //tileDict[tile.id] = tile;
        tile.addEventListener("mouseenter", () => tile.classList.toggle("active"));
        tile.addEventListener("mouseout", () => tile.classList.toggle("active"));
        tile.addEventListener("click", () => {
            movePlayerTo(tile);
            updateSidebar(tile);
        });
    });
});
