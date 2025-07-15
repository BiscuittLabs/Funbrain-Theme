// 🕹️ gameboard.js
// Adds interactivity for the Funbrain Arcade gameboard UI
// - Highlights tiles on hover
// - Animates the player piece to clicked tile
// - Updates sidebar info on tile click

document.addEventListener("DOMContentLoaded", function () {
	// 🟨 Grab all SVG game tiles (paths with .game-tiles class)
	const tiles = document.querySelectorAll(".game-tiles");
	//const tileDict = {}; // 🏷️ Placeholder: for fast tile lookup if needed later

	// 🎲 Get the player's marker and the board container
	const player = document.querySelector(".player-piece");
	const board = document.querySelector(".board");
	const path = document.querySelector(".game-path");

	// 👉 Moves player piece smoothly to a tile's position
	const movePlayerTo = (tile) => {
		// 📐 Find the on-screen position of the tile and board
		const tileRect = tile.getBoundingClientRect();
		const boardRect = board.getBoundingClientRect();

		// 📝 Debug output: show which tile was clicked
		console.log(tile);

		// 🎯 Calculate position (relative to top-left of board)
		const x = tileRect.left - boardRect.left;
		const y = tileRect.top - boardRect.top;

		// ✨ Animate the player piece to the new coordinates using GSAP
		gsap.to(player, {
			x,
			y,
			duration: 0.5,
			ease: "power2.out"
		});
	};

	// 🧩 Reference to sidebar info panel
	const sidebar = document.querySelector(".sidebar");

	// ⬆️ Replace sidebar content based on tile data attributes
	const updateSidebar = (tile) => {
		const title = tile.dataset.title || "Untitled Project";
		const desc = tile.dataset.desc || "No description.";
		const link = tile.dataset.link || "#";

		sidebar.innerHTML = `
            <h2>${title}</h2>
            <p>${desc}</p>
            <a href="${link}" style="display:inline-block;margin-top:1rem;font-weight:bold;">Learn More →</a>
        `;
	};

	// 🗺️ (Optional: Jump player to start tile on load)
	// movePlayerTo(document.getElementById("tile-0"));

	// 🎯 Set up events for each tile
	tiles.forEach((tile) => {
		//tileDict[tile.id] = tile; // 🏷️ Optional: store in dictionary

		// ⚡️ Highlight tile on hover
		tile.addEventListener("mouseenter", () => tile.classList.toggle("active"));
		tile.addEventListener("mouseout", () => tile.classList.toggle("active"));

		// 🎬 On click: animate player and update sidebar info
		tile.addEventListener("click", () => {
			movePlayerTo(tile);
			updateSidebar(tile);
		});
	});
});
