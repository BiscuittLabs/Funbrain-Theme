<?php
/**
* body.php
*
* Main content body for Funbrain Arcade Portfolio.
* Renders the homepage welcome message, dynamic arcade SVG board,
* and project sidebar.
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<main>
    <!-- 🎲 Main welcome section for the portfolio homepage -->
    <h1>🎲 Welcome to Funbrain Arcade Portfolio!</h1>
    <p>This is your custom theme homepage.</p>

    <!-- 🕹️ Example: Arcade grid project tiles (commented out for now) -->
    <!--
    <div class="arcade-grid">
        <section class="tile tile-1">🎨 Project 1</section>
        <section class="tile tile-2">🕹️ Project 2</section>
        <section class="tile tile-3">📦 Project 3</section>
        <section class="tile tile-4">🚀 Project 4</section>
    </div>
    -->

    <!-- 🕹️ Main board wrapper: sidebar + SVG game board + player piece -->
    <div class="gameboard-wrapper">

        <!-- 🧩 Sidebar: project info and hints -->
        <aside class="sidebar">
            <h2>🧩 Project Info</h2>
            <p>Hover a tile to learn more!</p>
        </aside>

        <!-- 🎮 Game board area -->
        <section class="board">
            <!-- 📐 SVG: The main arcade board graphics -->
            <!-- See <https://www.w3.org/Graphics/SVG/> for latest SVG specs -->
            <svg id="Layer_2" data-name="Layer 2"
                 xmlns="<http://www.w3.org/2000/svg>"
                 viewBox="0 0 467.63 395.29">
                <!-- 🖼️ Graphic elements and interactive tiles drawn here -->
                <!-- Tiles use classes + custom data attributes for interactivity -->
                <!-- Example:
                    <path
                        class="game-tiles"
                        id="tile-0"
                        d="... (SVG Path) ..."
                        data-title="Project 1"
                        data-desc="A fun mini-game built in JS."
                        data-link="/projects/project-1"/>
                 -->
                <!-- [Full SVG content unchanged for brevity] -->
                
        <g id="_1080_x_1080_px_Logo_1" data-name="1080 x 1080 px Logo 1">
          <g id="Graphic_Elements" data-name="Graphic Elements">
            <g>
              <path
                class="game-bg"
                d="M4.6,149.29c-15.18,68.01,7.84,124.66,75.64,149.07,14.64,5.92,28.97,10.91,42.55,18.13,10.89,5.67,20.8,12.81,30.07,20.75,16.46,13.88,31.25,30.01,49.8,41.26,28.44,18.19,65.55,21.99,96.95,8.93,12.63-4.96,25.04-11.91,36.75-19.21,12.24-7.68,24.33-15.65,36.57-23.35,32.57-20.14,63.03-38.15,80.35-73.96,23.66-49.96,16.93-112.37-13.56-157.96-27.47-40.76-76.8-73.56-120.88-93.93C279.74,1.39,235.6-3.32,193.11,2.47c-30.13,3.78-58.31,14.45-84.7,28.9C61.25,57.01,16.5,94.46,4.64,149.1l-.04.19Z" />
              <path
                class="game-tiles"
                id="tile-0"
                d="M72.45,260.08c5.77.94,17.65-3.65,21.44-9.45,1.26-1.93,1.37-3.65.34-5.25-3.38-4.79-6.5-9.84-9.29-14.98-5.31-9.82-9.51-20.29-12.52-31.13l-24.96,3.87c3.77,21.06,10.08,54.52,24.99,56.94Z" 
                    data-title="Project 1"
        data-desc="A fun mini-game built in JS."
        data-link="/projects/project-1"/>
              <path
                class="game-tiles"
                id="tile-1"
                d="M69.99,166.86l-25.23,1.14c-.57,9.21.2,20.52,2.19,32.18l24.53-3.8c-2.56-7.4-4.53-17.94-1.48-29.52Z" />
              <path
                class="game-tiles"
                id="tile-2"
                d="M44.97,164.99l25.92-1.17c2.1-6.23,6.16-13.99,11.59-19.84l-26.54-17.42c-8.53,10.71-9.78,23.06-10.97,38.43Z" />
              <path
                class="game-tiles"
                id="tile-3"
                d="M57.92,124.27l26.74,17.55c4.12-3.77,8.9-6.35,14.14-6.5l1.56-26.63c-15.93-1.47-32.26,4.53-42.44,15.58Z" />
              <path
                class="game-tiles"
                id="tile-4"
                d="M103.34,109.05l-1.55,26.46c8.16,1.23,13.95,8.18,16.73,11.89l22.83-12.19c-9.77-14.85-22.86-23.86-38.01-26.16Z" />
              <path
                class="game-tiles"
                id="tile-5"
                d="M152.15,176.49c.04-8.46-.35-23.95-9.18-38.74l-22.7,12.12c3.99,6.24,6.39,15.45,7,26.82l24.87-.19Z" />
              <path
                class="game-tiles"
                id="tile-6"
                d="M150.5,192.93c.81-4.47,1.46-8.09,1.6-13.44l-24.71.19c.19,7.95-.71,12.43-1.73,17.57-.76,3.79-1.61,8.05-2.1,14.45l23.95,5.56c.8-12.29,2.01-18.95,2.99-24.34Z" />
              <path
                class="game-tiles"
                id="tile-7"
                d="M147.33,220.3l-23.98-5.56c-.81,12.23-1.3,23.91,3.65,36.49l23.14-4.55c-2.86-6.29-3.54-13.04-2.81-26.38Z" />
              <path
                class="game-tiles"
                id="tile-8"
                d="M151.55,249.46l-23.36,4.6c7.46,16.35,20.65,25.16,25.38,27.91l11.74-18.37c-7.02-4.13-11.29-9.74-13.75-14.14Z" />
              <path
                class="game-tiles"
                id="tile-9"
                d="M167.96,265.02l-11.74,18.36c6.88,3.4,21.9,9,40.05,4.84l-3.95-20.29c-10.39,2.5-19.28-.44-24.36-2.91Z" />
              <path
                class="game-tiles"
                id="tile-10"
                d="M195.21,267.11l3.96,20.35c17.44-4.95,28.03-16.68,33.19-24.07l-17.08-13.34c-4.74,8.29-11.78,14.27-20.07,17.06Z" />
              <path
                class="game-tiles"
                id="tile-11"
                d="M216.69,247.34l17.33,13.54c3.65-5.91,11.49-21.16,9.22-40.1l-23.29,2.48c.67,5.29,1.34,14.44-3.26,24.08Z" />
              <path
                class="game-tiles"
                id="tile-12"
                d="M219.52,220.28l23.28-2.48c-1.74-9.78-6.17-17.33-14.52-31.12l-18.49,10.38c4.43,7.32,8.2,13.93,9.73,23.23Z" />
              <path
                class="game-tiles"
                id="tile-13"
                d="M208.22,194.5l18.49-10.38c-5.46-8.85-11.79-17.42-18.87-25.51l-19.28,12.1c10.5,10.45,16.61,18.97,19.66,23.79Z" />
              <path
                class="game-tiles"
                id="tile-14"
                d="M172.35,156.84c3.53,2.55,7.51,5.44,14.01,11.7l19.47-12.22c-5.65-6.26-11.58-11.95-22.41-22.31l-21.19,14.45c4.14,4.04,6.93,6.07,10.12,8.37Z" />
              <path
                class="game-tiles"
                id="tile-15"
                d="M139.58,117.05c4.32,12.59,12.78,21.46,20.49,29.26l21.13-14.41-1.62-1.55c-10.06-9.57-15.01-14.29-17.09-21.9l-22.9,8.59Z" />
              <path
                class="game-tiles"
                id="tile-16"
                d="M138.68,114.19l23.16-8.69c-.71-4.12-1.26-11.45,2.65-15.56l-18.16-22.07c-13.14,11.52-11.23,33.68-7.65,46.32Z" />
              <path
                class="game-tiles"
                id="tile-17"
                d="M174.77,61.07c-9.97-1.46-19.37.35-26.08,4.95l18.22,22.13c4.82-2.36,11.87-.19,17.13,3.22l16.73-16.92c-5.34-6.72-15.15-11.8-25.99-13.39Z" />
              <path
                class="game-tiles"
                id="tile-18"
                d="M206.44,85.22c-1.37-3.24-2.52-5.92-3.94-8.26l-16.03,16.22c4.68,3.9,6.32,8.46,8.18,13.67.99,2.76,2.09,5.85,3.79,9.25l18.95-9.38c-5.8-9.35-8.65-16.06-10.96-21.5Z" />
              <path
                class="game-tiles"
                id="tile-19"
                d="M219.02,109.26l-19.16,9.48c4.14,7.39,13.52,21.38,26.03,23.31l1.34-24.91c-3.09-.67-5.82-4.21-8.22-7.88Z" />
              <path
                class="game-tiles"
                id="tile-20"
                d="M230.26,116.84l-1.37,25.44c6.94-.02,14.66-3.67,20.98-9.97,5.74-5.72,9.09-12.46,9.15-18.3l-24.21-3.49c-.61,2.65-2.26,5.3-4.55,6.31Z" />
              <path
                class="game-tiles"
                id="tile-21" d="M219,90.42c2.36,2.61,5.1,4.69,7.56,6.56,4.12,3.12,8.02,6.1,8.46,10.55l23.7,3.41c-.94-4.29-3.95-7.29-7.65-10.97-4.71-4.69-10.51-10.47-14.23-21.13l-17.83,11.58Z" />
              <path
                class="game-tiles"
                id="tile-22"
                d="M235.62,56.65l-19.98-11.03c-7.03,13.44-6.4,31.48,1.49,42.44l18.75-12.18c-1.53-5.03-3.48-12.54-.26-19.23Z" />
              <path
                class="game-tiles"
                id="tile-23"
                d="M217.12,43l20.05,11.07c3.59-4.93,9.86-7.89,18.69-8.84l-4.73-21.93c-7.88,1.36-24.74,4.98-34.01,19.7Z" />
              <path
                class="game-tiles"
                id="tile-24"
                d="M254.1,22.83l4.78,22.2c10.64-.38,18.62,4.32,22.4,7.12l18.52-17.36c-16.79-13.85-36.49-13.24-45.7-11.96Z" />
              <path
                class="game-tiles"
                id="tile-25"
                d="M319.97,73.36c-2.28-18.44-10.71-29.96-17.89-36.59l-18.46,17.3c7.96,7.11,10.5,16.03,11.45,20.25l24.9-.97Z" />
              <path
                class="game-tiles"
                id="tile-26"
                d="M320.31,76.35l-24.65.96c.72,4.58,1.42,14.4-3.08,24.62l19.86,10.8c9.52-12.47,8.56-29.22,7.88-36.37Z" />
              <path
                class="game-tiles"
                id="tile-27"
                d="M303.57,121.49c2.33-1.99,4.72-4.06,6.88-6.42l-19.17-10.42c-3.55,6.62-7.76,9.59-11.84,12.47-3.26,2.3-6.63,4.67-9.84,9.05l21.63,10.91c2.38-7.06,7.44-11.39,12.34-15.57Z" />
              <path
                class="game-tiles"
                id="tile-28"
                d="M290.41,140.01l-22.5-11.35c-9.32,14.93-7.65,30.35-3.18,37.7l25.97-19.09c-1.17-2.28-.73-5.31-.3-7.27Z" />
              <path
                class="game-tiles"
                id="tile-29"
                d="M292.84,149.44l-26.31,19.33c8.88,9.96,30.85,13.11,46.3,2.9l-11.68-22.59c-2.26.84-5.75,1.7-8.3.36Z" />
              <path
                class="game-tiles"
                id="tile-30"
                d="M315.34,128.85c-2.41,7.49-4.91,15.22-11.48,18.98l11.41,22.05c3.22-2.67,4.62-5.46,7.33-10.81,2.63-5.2,6.56-12.97,14.55-25.11l-20.06-10.31c-.62,1.71-1.19,3.48-1.75,5.2Z" />
              <path
                class="game-tiles"
                id="tile-31"
                d="M318.18,120.83l20.64,10.61c8.93-13.3,13.81-18.28,20.02-20.23l-6.15-24.8c-16.29,5.63-28.86,20.96-34.51,34.42Z" />
              <path
                class="game-tiles"
                id="tile-32"
                d="M355.57,85.55l6.2,24.98c6.83-1.11,14.44.92,21.7,5.79l17.44-19.57c-5.07-3.75-24.59-16.71-45.33-11.21Z" />
              <path
                class="game-tiles"
                id="tile-33"
                d="M423.37,138.67c-1.05-7.93-4.31-26.41-20.14-40.03l-17.33,19.45c6.59,5.21,11.02,12.64,13.2,22.12l24.27-1.54Z" />
              <path
                class="game-tiles"
                id="tile-34"
                d="M423.74,141.65l-24.05,1.53c2.03,11.98-.96,20.96-4.25,26.75l20.3,12.45c10.08-16.7,8.83-33.6,8.01-40.73Z" />
              <path
                class="game-tiles"
                id="tile-35"
                d="M414.12,184.91l-20.28-12.44c-7.02,10.31-17.39,14.38-22.81,15.87l4.61,22.48c20.61-2.13,34.72-20.48,38.48-25.92Z" />
              <path
                class="game-tiles"
                id="tile-36"
                d="M372.62,211.03l-4.51-22c-6.94,1.33-11.53.07-17.25-1.49-3.57-.98-7.59-2.06-12.95-2.71l-1.7,22.48c12.47.15,19.55,1.44,25.28,2.48,3.98.73,7.23,1.32,11.14,1.24Z" />
              <path
                class="game-tiles"
                id="tile-37"
                d="M334.92,184.5c-9.89-.95-31.7-2.45-42.74,10l23.7,16.9c3.04-3.6,9.84-4.1,17.31-4.12l1.72-22.78Z" />
              <path
                class="game-tiles"
                id="tile-38"
                d="M314.49,214.09l-24.16-17.23c-4.28,6.28-6.08,15.3-4.81,24.46,1.19,8.57,4.89,16.08,9.99,20.38l20.81-19.44c-1.8-2.35-2.52-5.53-1.84-8.17Z" />
              <path
                class="game-tiles"
                id="tile-39"
                d="M341.29,244.1l-2.99-21.12c-.5.14-.98.28-1.49.43-6.37,1.88-13.52,3.99-18.28.9l-20.52,19.17c8.06,4.74,20.39,3.38,43.28.62Z" />
              <path
                class="game-tiles"
                id="tile-40"
                d="M353.19,242.47c9.52-1.44,15-2.26,21.42.62l14.31-19.27c-13.92-6.06-33.5-5.29-47.71-1.64l3.05,21.55c3.35-.43,6.3-.87,8.93-1.26Z" />
              <path
                class="game-tiles"
                id="tile-41"
                d="M391.95,264.86l23.34-6.5c-5.34-21.22-18.26-30.29-23.6-33.21l-14.37,19.35c7.22,4.27,12.66,11.84,14.64,20.37Z" />
              <path
                class="game-tiles"
                id="tile-42"
                d="M387.36,290.01l20.67,13.02c11.1-16.93,9.28-34.71,7.92-41.75l-23.46,6.54c.62,4.68.77,13.77-5.13,22.19Z" />
              <path
                class="game-tiles"
                id="tile-43"
                d="M367.91,302.4l3.08,24.83c7.9-1.53,24.04-6.45,35.33-21.74l-20.8-13.1c-3.27,3.78-8.8,8.16-17.61,10Z" />
              <path
                class="game-tiles"
                id="tile-44"
                d="M342.92,298.26l-12.54,21.99c16.01,9.07,32.52,8.06,37.65,7.45l-3.08-24.81c-9.89,1.21-17.8-2.41-22.03-4.63Z" />
              <path
                class="game-tiles"
                id="tile-45"
                d="M325.42,282.77c-.91-1.08-1.9-2.25-2.95-3.49l-20.26,13.7c3.28,4.69,13.02,17.68,25.6,25.73l12.49-21.9c-6.04-3.56-9.46-7.61-14.87-14.04Z" />
              <path
                class="game-tiles"
                id="tile-46"
                d="M294.39,250.64l-9.66,21.21c5.71,2.14,8.79,7.2,12.6,13.48,1.01,1.66,2.05,3.37,3.21,5.16l19.96-13.5c-12.93-15.04-20.02-23.18-26.11-26.35Z" />
              <path
                class="game-tiles"
                id="tile-47"
                d="M249.58,261.15l18.93,13.19c2.75-3.14,8.47-4.14,13.29-3.29l9.82-21.57c-13.29-4.61-33.88-.61-42.04,11.67Z" />
              <path
                class="game-tiles"
                id="tile-48"
                d="M267.1,277.01l-18.99-13.24c-7.66,16.09,5.53,40.42,8.99,46.32l20.67-13.2c-1.42-2.07-2.86-4.02-4.17-5.77-4.15-5.58-7.49-10.09-6.5-14.11Z" />
              <path
                class="game-tiles"
                id="tile-49"
                d="M262.58,318.2c3.39,4.66,6.15,8.48,5.56,11.72l24.47,11.65c4.28-13.07-8.03-34.18-13.2-42.2l-20.74,13.25c1.31,2,2.67,3.88,3.9,5.57Z" />
              <path
                class="game-tiles"
                id="tile-50"
                d="M249.5,333.93l-6.44,22.93c26.75.97,42.99-3.24,48.34-12.53l-24.68-11.75c-3.19,3.14-10.56,2.51-17.22,1.36Z" />
              <path
                class="game-tiles"
                id="tile-51"
                d="M214.4,318.64c-5.49-3.7-9.72-6.55-13.71-6.55-.88,0-1.75.14-2.62.44-6.99,2.43-11.92,14.35-9.6,23.19,3.18,12.06,21.45,19.5,51.5,21.01l6.56-23.36c-14.78-3.06-24.78-9.77-32.14-14.73Z" />
              <path
                class="game-border"
                d="M393.36,220.78c-15.09-7.43-37.37-6.48-52.76-2.25-1.03.28-2.1.6-3.18.92-6.13,1.81-13.07,3.87-16.52.71-1.94-1.78-2.77-5.03-1.81-7.09,1.52-3.26,7.91-3.91,16.95-3.87,13.23.05,20.51,1.38,26.36,2.45,4.76.87,8.53,1.56,13.6,1.21,25.03-1.71,41.19-25.94,42.95-28.69,12.28-19.23,9.85-38.9,9.06-45.37-.89-7.19-3.59-29.06-22.51-44.49-2.54-2.07-25.54-20-50.71-12.34-18.5,5.63-32.64,23.11-38.44,37.94-.88,2.25-1.65,4.63-2.39,6.93-2.49,7.72-4.84,15.01-11.26,17.88-2.73,1.22-6.09,1.91-7.42.69-1.06-.97-1.13-3.3-.2-6.92,1.85-7.22,6.74-11.39,11.92-15.81,2.88-2.46,5.85-4.99,8.47-8.17,11.87-14.41,9.83-34.39,9.17-40.96-2.16-21.24-12.12-34.04-20.11-41.04-19.02-16.68-42-14.99-51-13.49-7.65,1.28-27.97,4.67-38.32,22.71-8.6,14.98-7.78,36.16,1.85,48.21,2.81,3.51,6.19,6.07,9.17,8.34,4.21,3.2,7.54,5.72,7.31,9.37-.16,2.56-1.86,5.24-3.49,5.51-2.6.43-6.2-5.29-7.75-7.73-6.28-9.89-9.24-16.86-11.61-22.47-1.75-4.12-3.13-7.38-5.23-10.34-5.59-7.85-16.61-13.84-28.77-15.61-11.58-1.69-22.09.61-29.6,6.47-16.25,12.68-13.52,38.68-9.34,52.04,4.53,14.5,14.11,24.17,22.55,32.71,5.04,5.09,8.31,7.46,11.77,9.96,3.77,2.73,7.67,5.55,14.53,12.24,12.1,11.8,18.54,21.21,21.31,25.77,4.82,7.95,8.99,14.81,10.35,24.84.7,5.15,2,14.74-3.29,24.96-4.57,8.82-11.82,15.06-20.41,17.56-10.96,3.19-20.33-.45-24.94-2.9-7.76-4.13-12.14-10.25-14.45-14.67-3.44-6.56-4.17-12.81-3.28-27.86.79-13.26,2.05-20.19,3.06-25.75.91-5.02,1.63-8.99,1.69-15.47.07-8.52.22-26.24-10.36-43.03-10.69-16.98-25.45-27.06-42.67-29.12-17.95-2.16-36.65,4.81-47.64,17.75-10.26,12.08-11.3,25.66-12.63,42.86-.78,10.05.07,22.73,2.39,35.71,4.12,23.12,10.36,58.06,27.73,60.89,6.87,1.12,19.95-3.9,24.43-10.77,1.93-2.95,2.04-5.91.33-8.55l-.03-.05c-3.32-4.71-6.38-9.65-9.12-14.71-5.41-10.01-9.66-20.7-12.63-31.78l-.05-.15c-2.83-7.4-5.38-18.83-1.48-31.33,2.05-6.56,5.85-13.48,10.17-18.51,3.68-4.28,9.53-9.29,16.52-8.87,8.41.51,14.26,8.48,16.76,11.88,4.33,5.9,6.99,15.86,7.46,28.04.34,8.58-.57,13.13-1.63,18.41-.82,4.12-1.76,8.8-2.25,16.11-.91,13.61-1.77,26.47,4.21,40.75,8.45,20.18,25.37,30,28.68,31.76,6.48,3.45,23.83,10.91,45.02,5.52,20.29-5.16,32.05-19.07,37.26-26.9,3.26-4.9,13.64-22.62,10.38-44.99-1.67-11.46-6.43-19.34-15.93-35.03-5.94-9.82-12.95-19.31-20.84-28.22-6.26-7.07-12.41-12.95-24.64-24.65l-2.97-2.83c-10.32-9.82-15.02-14.3-16.63-22.03-1.15-5.5-1.12-12.29,2.43-14.85,4.16-3.01,11.79.29,15.91,3.24,5.01,3.58,6.47,7.67,8.48,13.31,1.14,3.21,2.44,6.84,4.64,10.95,4.04,7.57,15.13,25.29,30.73,26.42,8.14.59,17.42-3.44,24.79-10.79,6.74-6.72,10.48-14.88,9.99-21.83-.45-6.46-4.32-10.31-8.79-14.76-4.99-4.97-10.65-10.6-14.11-21.77-1.59-5.13-3.99-12.89-.15-19.25,3.08-5.1,9.43-8.05,18.86-8.76,11.65-.87,20.27,5.3,22.64,7.21,9.12,7.36,11.19,17.2,11.97,20.9.67,3.15,2.41,14.33-3.11,25.75-3.35,6.92-7.35,9.74-11.58,12.72-3.82,2.69-7.77,5.47-11.59,11.23-8.1,12.22-11.89,31.62-2.97,43.52,5.04,6.72,14.12,10.88,24.9,11.39,10.11.49,20.42-2.28,27.58-7.41,4.85-3.47,6.45-6.64,9.64-12.96,2.69-5.33,6.77-13.39,15.29-26.2,9.61-14.44,14.19-19.03,20.42-20.48,6.68-1.56,14.44.5,21.84,5.79,10.54,7.54,12.86,18.85,13.62,22.56,2.62,12.83-.9,22.06-4.33,27.56-7.05,11.31-18.57,15.05-23.19,16.14-7.06,1.65-11.35.48-17.29-1.14-4.02-1.1-8.57-2.34-14.97-2.98-9.75-.97-35.64-3.55-47.86,12.21-5.45,7.03-7.73,17.19-6.25,27.88,1.37,9.89,5.91,18.55,12.15,23.15,9.14,6.75,22.28,5.16,48.46,2.01,4.03-.49,7.45-1,10.47-1.46,9.78-1.48,14.68-2.22,20.77.88,7.63,3.88,13.35,11.81,14.93,20.68.54,3.02,1.74,13.55-5.3,22.51-2.96,3.76-8.48,8.58-18.03,10.22-10.72,1.84-19.29-2.81-22.94-4.79-6.4-3.48-9.58-7.25-15.34-14.09-1.16-1.38-2.43-2.88-3.84-4.52-14.92-17.36-22.4-26.07-29.65-29.06-7.66-3.16-17.37-3.57-26.66-1.12-9.63,2.54-17.4,7.89-21.32,14.69-11.02,19.11,6.99,48.84,9.08,52.17,1.61,2.56,3.31,4.91,4.82,6.98,3.16,4.36,5.9,8.12,4.83,10.01-.88,1.56-4.41,2.95-16.3.77-15.07-2.77-24.8-9.33-32.61-14.59-7.14-4.81-12.78-8.62-18.99-6.46-7.66,2.67-14.47,15.55-11.51,26.79,3.63,13.79,22.81,21.85,55.45,23.3,2.47.11,6.05.27,10.21.27,14.94,0,37.43-2.05,43.57-15.8,6.52-14.59-7.4-38.26-13.69-47.75-1.73-2.62-3.53-5.04-5.12-7.17-3.97-5.33-7.11-9.55-5.78-12.24,1.36-2.75,7.12-4.12,12.08-2.87,5.65,1.42,8.5,6.14,12.46,12.66,1.26,2.08,2.56,4.22,4.1,6.53,2.13,3.19,13.54,19.55,28.69,28.67,19.44,11.7,40.09,8.76,42.38,8.38,7.71-1.26,27.02-6.18,39.76-24.54,13.67-19.7,10.23-40.85,8.85-46.86-1.46-6.37-7.71-27.88-26.65-37.2ZM217.1,44.52l19.98,11.03c-3.22,6.69-1.27,14.2.26,19.23l-18.75,12.18c-7.89-10.96-8.52-29-1.49-42.44ZM86.4,229.31c2.78,5.15,5.91,10.19,9.29,14.98,1.03,1.6.92,3.32-.34,5.25-3.79,5.8-15.67,10.39-21.44,9.45-14.91-2.42-21.22-35.88-24.99-56.94l24.96-3.87c3.01,10.84,7.22,21.31,12.52,31.13ZM72.93,195.29l-24.53,3.8c-1.99-11.66-2.75-22.98-2.19-32.18l25.23-1.14c-3.05,11.57-1.08,22.12,1.48,29.52ZM72.35,162.72l-25.92,1.17c1.19-15.36,2.44-27.72,10.97-38.43l26.54,17.42c-5.44,5.85-9.49,13.61-11.59,19.84ZM86.11,140.72l-26.74-17.55c10.18-11.05,26.51-17.05,42.44-15.58l-1.56,26.63c-5.24.15-10.02,2.73-14.14,6.5ZM103.25,134.42l1.55-26.46c15.15,2.3,28.24,11.31,38.01,26.16l-22.83,12.19c-2.79-3.71-8.58-10.66-16.73-11.89ZM121.73,148.77l22.7-12.12c8.83,14.79,9.22,30.28,9.18,38.74l-24.87.19c-.61-11.37-3.01-20.57-7-26.82ZM127.12,196.16c1.03-5.14,1.92-9.62,1.73-17.57l24.71-.19c-.15,5.34-.79,8.97-1.6,13.44-.98,5.39-2.18,12.05-2.99,24.34l-23.95-5.56c.49-6.4,1.35-10.67,2.1-14.45ZM124.81,213.64l23.98,5.56c-.73,13.33-.04,20.09,2.81,26.38l-23.14,4.55c-4.96-12.58-4.46-24.26-3.65-36.49ZM129.64,252.96l23.36-4.6c2.47,4.39,6.73,10.01,13.75,14.14l-11.74,18.37c-4.73-2.75-17.91-11.56-25.38-27.91ZM157.68,282.29l11.74-18.36c5.08,2.47,13.97,5.41,24.36,2.91l3.95,20.29c-18.15,4.16-33.17-1.44-40.05-4.84ZM200.63,286.36l-3.96-20.35c8.29-2.79,15.33-8.77,20.07-17.06l17.08,13.34c-5.16,7.4-15.75,19.12-33.19,24.07ZM235.48,259.78l-17.33-13.54c4.6-9.65,3.93-18.79,3.26-24.08l23.29-2.48c2.27,18.94-5.57,34.19-9.22,40.1ZM244.26,216.71l-23.28,2.48c-1.53-9.29-5.31-15.91-9.73-23.23l18.49-10.38c8.34,13.79,12.78,21.34,14.52,31.12ZM228.17,183.02l-18.49,10.38c-3.05-4.82-9.16-13.34-19.66-23.79l19.28-12.1c7.08,8.09,13.41,16.66,18.87,25.51ZM207.29,155.23l-19.47,12.22c-6.5-6.26-10.49-9.15-14.01-11.7-3.19-2.31-5.99-4.34-10.12-8.37l21.19-14.45c10.83,10.36,16.76,16.05,22.41,22.31ZM181.04,129.26l1.62,1.55-21.13,14.41c-7.71-7.8-16.17-16.67-20.49-29.26l22.9-8.59c2.08,7.61,7.04,12.33,17.09,21.9ZM163.29,104.41l-23.16,8.69c-3.58-12.63-5.49-34.8,7.65-46.32l18.16,22.07c-3.92,4.11-3.37,11.44-2.65,15.56ZM168.37,87.06l-18.22-22.13c6.71-4.6,16.11-6.41,26.08-4.95,10.84,1.58,20.66,6.67,25.99,13.39l-16.73,16.92c-5.26-3.42-12.3-5.58-17.13-3.22ZM196.12,105.75c-1.86-5.21-3.5-9.77-8.18-13.67l16.03-16.22c1.42,2.34,2.56,5.02,3.94,8.26,2.31,5.44,5.16,12.15,10.96,21.5l-18.95,9.38c-1.7-3.4-2.81-6.49-3.79-9.25ZM201.32,117.65l19.16-9.48c2.4,3.67,5.13,7.21,8.22,7.88l-1.34,24.91c-12.52-1.93-21.9-15.92-26.03-23.31ZM251.32,131.22c-6.31,6.3-14.04,9.95-20.98,9.97l1.37-25.44c2.29-1.01,3.94-3.66,4.55-6.31l24.21,3.49c-.06,5.83-3.42,12.58-9.15,18.3ZM252.53,98.87c3.7,3.68,6.71,6.68,7.65,10.97l-23.7-3.41c-.44-4.46-4.34-7.43-8.46-10.55-2.46-1.86-5.2-3.95-7.56-6.56l17.83-11.58c3.72,10.66,9.52,16.44,14.23,21.13ZM238.63,52.98l-20.05-11.07c9.27-14.72,26.13-18.33,34.01-19.7l4.73,21.93c-8.83.95-15.1,3.91-18.69,8.84ZM260.34,43.93l-4.78-22.2c9.21-1.29,28.92-1.89,45.7,11.96l-18.52,17.36c-3.77-2.81-11.75-7.51-22.4-7.12ZM285.07,52.98l18.46-17.3c7.18,6.63,15.62,18.15,17.89,36.59l-24.9.97c-.95-4.22-3.49-13.14-11.45-20.25ZM297.11,76.21l24.65-.96c.68,7.16,1.65,23.9-7.88,36.37l-19.86-10.8c4.5-10.22,3.8-20.05,3.08-24.62ZM280.89,116.01c4.08-2.88,8.29-5.84,11.84-12.47l19.17,10.42c-2.16,2.36-4.54,4.43-6.88,6.42-4.91,4.19-9.96,8.51-12.34,15.57l-21.63-10.91c3.21-4.37,6.58-6.75,9.84-9.05ZM269.37,127.57l22.5,11.35c-.44,1.96-.88,4.99.3,7.27l-25.97,19.09c-4.47-7.36-6.14-22.77,3.18-37.7ZM267.98,167.68l26.31-19.33c2.55,1.34,6.04.48,8.3-.36l11.68,22.59c-15.44,10.21-37.41,7.07-46.3-2.9ZM324.06,157.98c-2.7,5.35-4.11,8.14-7.33,10.81l-11.41-22.05c6.57-3.76,9.06-11.49,11.48-18.98.56-1.73,1.13-3.5,1.75-5.2l20.06,10.31c-7.99,12.14-11.92,19.91-14.55,25.11ZM340.28,130.35l-20.64-10.61c5.65-13.46,18.22-28.78,34.51-34.42l6.15,24.8c-6.21,1.94-11.09,6.93-20.02,20.23ZM363.22,109.44l-6.2-24.98c20.73-5.5,40.26,7.46,45.33,11.21l-17.44,19.57c-7.26-4.88-14.86-6.91-21.7-5.79ZM387.36,117l17.33-19.45c15.83,13.61,19.09,32.1,20.14,40.03l-24.27,1.54c-2.18-9.48-6.61-16.91-13.2-22.12ZM401.14,142.09l24.05-1.53c.82,7.12,2.07,24.02-8.01,40.73l-20.3-12.45c3.29-5.79,6.28-14.77,4.25-26.75ZM395.29,171.38l20.28,12.44c-3.76,5.44-17.87,23.79-38.48,25.92l-4.61-22.48c5.42-1.48,15.79-5.56,22.81-15.87ZM369.56,187.93l4.51,22c-3.9.08-7.15-.52-11.14-1.24-5.72-1.05-12.81-2.33-25.28-2.48l1.7-22.48c5.36.65,9.38,1.74,12.95,2.71,5.72,1.56,10.31,2.82,17.25,1.49ZM336.37,183.41l-1.72,22.78c-7.47.02-14.27.53-17.31,4.12l-23.7-16.9c11.04-12.45,32.85-10.95,42.74-10ZM286.98,220.23c-1.27-9.16.52-18.18,4.81-24.46l24.16,17.23c-.68,2.64.04,5.82,1.84,8.17l-20.81,19.44c-5.1-4.3-8.8-11.81-9.99-20.38ZM299.46,242.39l20.52-19.17c4.75,3.09,11.91.99,18.28-.9.51-.15.99-.29,1.49-.43l2.99,21.12c-22.89,2.76-35.22,4.12-43.28-.62ZM354.65,241.37c-2.62.4-5.57.84-8.93,1.26l-3.05-21.55c14.21-3.65,33.79-4.42,47.71,1.64l-14.31,19.27c-6.42-2.88-11.91-2.06-21.42-.62ZM378.77,243.39l14.37-19.35c5.35,2.92,18.27,12,23.6,33.21l-23.34,6.5c-1.98-8.53-7.42-16.1-14.64-20.37ZM189.93,334.62c-2.33-8.84,2.61-20.76,9.6-23.19.87-.3,1.74-.44,2.62-.44,3.98,0,8.22,2.86,13.71,6.55,7.36,4.96,17.35,11.67,32.14,14.73l-6.56,23.36c-30.05-1.51-48.32-8.95-51.5-21.01ZM244.51,355.76l6.44-22.93c6.66,1.15,14.03,1.77,17.22-1.36l24.68,11.75c-5.36,9.29-21.6,13.51-48.34,12.53ZM294.08,340.49l-24.47-11.65c.59-3.25-2.18-7.06-5.56-11.72-1.23-1.69-2.58-3.57-3.9-5.57l20.74-13.25c5.17,8.02,17.47,29.13,13.2,42.2ZM275.05,290.02c1.3,1.75,2.74,3.7,4.17,5.77l-20.67,13.2c-3.46-5.9-16.65-30.23-8.99-46.32l18.99,13.24c-.99,4.02,2.35,8.54,6.5,14.11ZM269.96,273.24l-18.93-13.19c8.17-12.28,28.75-16.28,42.04-11.67l-9.82,21.57c-4.82-.85-10.54.14-13.29,3.29ZM298.79,284.23c-3.8-6.27-6.88-11.33-12.6-13.48l9.66-21.21c6.09,3.17,13.18,11.31,26.11,26.35l-19.96,13.5c-1.16-1.79-2.2-3.5-3.21-5.16ZM303.66,291.88l20.26-13.7c1.05,1.23,2.05,2.41,2.95,3.49,5.42,6.43,8.83,10.48,14.87,14.04l-12.49,21.9c-12.58-8.04-22.32-21.03-25.6-25.73ZM331.84,319.15l12.54-21.99c4.23,2.23,12.14,5.84,22.03,4.63l3.08,24.81c-5.13.61-21.64,1.62-37.65-7.45ZM372.45,326.14l-3.08-24.83c8.8-1.85,14.33-6.22,17.61-10l20.8,13.1c-11.29,15.29-27.43,20.2-35.33,21.74ZM409.49,301.93l-20.67-13.02c5.9-8.42,5.75-17.52,5.13-22.19l23.46-6.54c1.36,7.03,3.19,24.82-7.92,41.75Z" />
            </g>
          </g>
        </g>
      
      <!-- SVG content from your original file goes here -->
            </svg>
            
            <!-- 🧑‍🚀 Gamepiece: The moving player marker image -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Gamepiece.png"
                alt="Player Piece"
                class="player-piece"
                id="player"/>
        </section>
    </div>
</main>
