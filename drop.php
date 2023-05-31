
<style>

/* Tweak to change the look and feel */
:root {
  --button-background: red;
  --button-color: yellow;
  
  --dropdown-highlight: blue;
  --dropdown-width: 160px;
  --dropdown-background: white;
  --dropdown-color: green;
}

/* Center the planet */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #222229;
}

/* Boring button styles */
a.button {
  /* Frame */
  display: inline-block;
  padding: 20px 28px;
  border-radius: 50px;
  box-sizing: border-box;
  
  /* Style */
  border: none;
  background: var(--button-background);
  color: var(--button-color);
  font-size: 24px;
  cursor: pointer;
}

a.button:active {
  filter: brightness(75%);
}

/* Dropdown styles */
.dropdown {
  position: relative;
  padding: 0;
  margin-right: 1em;
  
  border: none;
}

.dropdown summary {
  list-style: none;
  list-style-type: none;
}

.dropdown > summary::-webkit-details-marker {
  display: none;
}

.dropdown summary:focus {
  outline: none;
}

.dropdown summary:focus a.button {
  border: 2px solid white;
}

.dropdown summary:focus {
  outline: none;
}

.dropdown ul {
  position: absolute;
  margin: 20px 0 0 0;
  padding: 20px 0;
  width: var(--dropdown-width);
  left: 50%;
  margin-left: calc((var(--dropdown-width) / 2)  * -1);
  box-sizing: border-box;
  z-index: 2;
  
  background: var(--dropdown-background);
  border-radius: 6px;
  list-style: none;
}

.dropdown ul li {
  padding: 0;
  margin: 0;
}

.dropdown ul li a:link, .dropdown ul li a:visited {
  display: inline-block;
  padding: 10px 0.8rem;
  width: 100%;
  box-sizing: border-box;
  
  color: var(--dropdown-color);
  text-decoration: none;
}

.dropdown ul li a:hover {
  background-color: var(--dropdown-highlight);
  color: var(--dropdown-background);
}

/* Dropdown triangle */
.dropdown ul::before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: -10px;
  left: 50%;
  margin-left: -10px;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent var(--dropdown-background) transparent;
}


/* Close the dropdown with outside clicks */
.dropdown > summary::before {
  display: none;
}

.dropdown[open] > summary::before {
    content: ' ';
    display: block;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
}
</style>

<details class="dropdown">
    <summary >
      <a class="button">Click on me!</a>
    </summary>
    <ul>
      <li><a href="#">I'm a dropdown.</a></li>
      <li><a href="#">In Pure CSS</a></li>
      <li><a href="#">As in...</a></li>
      <li><a href="#">No JavaScript.</a></li>
      <li><a href="#">At All.</a></li>
  </ul>
</details>