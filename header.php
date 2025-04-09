<head>
    <script src="JS/hamburgermenu.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <nav class="mainbar">
        <article class="logo">
            <img src="img/beeldmerk_logo_vegan_food.png" alt="vegan food logo">
        </article>
        <article class="desktop-nav"></article>
        <article class="nav-links-desktop">
            <a href="index.php"><i class="fi fi-se"></i>Home</a>
            <a href="lunch&diner.php">Lunch & Diner</a>
            <a href="locatie.php">Openingstijden & Locatie</a>
            <a href="reserveren.php">Reserveren</a>
            <a href="vacatures.php">Vacatures</a>
        </article>
        <article class="nav-right-desktop">
            <a href="#" class="accessibility-icon">
                <i class="fas fa-universal-access"></i>
            </a>
            <article class="language-select">
                <select>
                    <option value="dutch">Nederlands</option>
                    <option value="english">English</option>
                </select>
            </article>
        </article>
        <button class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
        <article class="menu-popup" id="menu-popup">
            <button class="close-btn" onclick="toggleMenu()">&times;</button>
            <article class="nav-links">
                <a href="index.php"><i class="fi fi-se"></i>Home</a>
                <a href="lunch&diner.php">Lunch & Diner</a>
                <a href="locatie.php">Openingstijden & Locatie</a>
                <a href="reserveren.php">Reserveren</a>
                <a href="vacatures.php">Vacatures</a>
            </article>
            <article class="nav-right">
                <a href="#" class="accessibility-icon">
                    <i class="fas fa-universal-access"></i>
                </a>
                <article class="language-select">
                    <select>
                        <option value="dutch">Nederlands</option>
                        <option value="english">English</option>
                    </select>
                </article>
            </article>
        </article>
    </nav>
</header>