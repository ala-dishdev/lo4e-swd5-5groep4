<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <!-- Zorgt ervoor dat de pagina correct wordt weergegeven op mobiele apparaten. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO (search enige optimation) Metagegevens -->
    <!-- Description voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina. -->
    <meta name="description" content="Menu van een Vegan Food Restaurant in Amsterdam">
    <!-- Keywords helpt zoekmachines begrijpen waar de pagina over gaat. -->
    <meta name="Keywords" content="vegan restaurant amsterdam, plantaardig eten amsterdam, vegan food amsterdam, veganistisch restaurant amsterdam, beste vegan restaurant amsterdam, 
    gezond vegan eten amsterdam, vegan brunch amsterdam, vegan take-away amsterdam, vegan fine dining amsterdam, biologisch vegan restaurant amsterdam, 
    duurzaam eten amsterdam, vegan friendly restaurant amsterdam, vegan burgers amsterdam, vegan sushi amsterdam, vegan pizza amsterdam, vegan desserts amsterdam, 
    vegan ontbijt amsterdam, vegan lunch amsterdam, vegan diner amsterdam, vegan restaurant in het centrum van amsterdam, vegan eetcafé amsterdam, vegan hotspot amsterdam, 
    vegan restaurant jordaan, vegan eten in de pijp, vegan friendly cafés amsterdam">
    <!-- Author de naam van de developer van de pagina. -->
    <meta name="author" content="Maciek Czerniec">

    <title>Vegan Food // Lunch en Diner</title>
    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="images/beeldmerk_logo_vegan_food.png" type="image/x-icon">
    <!-- Link naar stylesheet -->
    <link rel="stylesheet" href="css/style-MACIEK.css">

    <!-- Link naar overige -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="JS/slideshowMenu.js" defer></script>
</head>

<body>
    <header>
        <?php include("header1.php"); ?>
    </header>
    <main class="main-menu">
        <section class="menu">
            <h2>Geniet van ons 100% plantaardig menu!</h2>
            <article class="menu-category">
                <h3>-Voorgerechten-</h3>
                <section class="section-voorgerecht-desktop">
                    <article class="menu-item">
                        <img src="https://maxima.com/img/CTMXefYLMis1a1Rr3viEgRzl32RIeZ-ugvWBpzKIe5U/resize:fit:0:0/aHR0cHM6Ly9tYXhpbWEuY29tL21lZGlhL21hZ2VmYW5fYmxvZy9EZXBvc2l0cGhvdG9zXzIyMDA3MjkxNF9TLmpwZw.jpg"
                            alt="Romige Pompoensoep">
                        <h4>Romige Pompensoep</h4>
                        <p>Heerlijke pompoensoep met kruiden en room.</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                    title="Bevat Gluten">
                                <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                    title="Bevat Melk">
                            </article>
                            <button class="price">€7,50</button>
                        </article>
                    </article>

                    <article class="menu-item">
                        <img src="https://kriskookt.be/wp-content/uploads/2023/03/Gefrituurde-artisjok-4a-1020x600.jpg"
                            alt="Gefrituurde Arisjok">
                        <h4>Gefrituurde Artisjok</h4>
                        <p>Knapperige artisjokken met dip.</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                    title="Bevat Gluten">
                            </article>
                            <button class="price">€8,50</button>
                        </article>
                    </article>

                    <article class="menu-item">
                        <img src="https://madanddelicacy.com/wp-content/uploads/2022/06/tris-bruschetta.jpg?w=1400"
                            alt="Bruschetta Tricolore">
                        <h4>Bruschetta Tricolore</h4>
                        <p>Gegarneerd met pesto, gemarineerde tomaten en zachte stracchino-kaas.</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                    title="Bevat Noten">
                                <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                    title="Bevat Melk">
                            </article>
                            <button class="price">€8,00</button>
                        </article>
                    </article>
                </section>
                <article class="slideshow" id="voorgerechten-slideshow">
                    <button class="prev" onclick="changeSlide('voorgerechten-slideshow', -1)">&#10094;</button>
                    <button class="next" onclick="changeSlide('voorgerechten-slideshow', 1">&#10095;</button>
                    <article class="menu-items">
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://maxima.com/img/CTMXefYLMis1a1Rr3viEgRzl32RIeZ-ugvWBpzKIe5U/resize:fit:0:0/aHR0cHM6Ly9tYXhpbWEuY29tL21lZGlhL21hZ2VmYW5fYmxvZy9EZXBvc2l0cGhvdG9zXzIyMDA3MjkxNF9TLmpwZw.jpg"
                                    alt="Romige Pompoensoep">
                                <h4>Romige Pompensoep</h4>
                                <p>Heerlijke pompoensoep met kruiden en room.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Gluten">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                    </article>
                                    <button class="price">€7,50</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://kriskookt.be/wp-content/uploads/2023/03/Gefrituurde-artisjok-4a-1020x600.jpg"
                                    alt="Gefrituurde Arisjok">
                                <h4>Gefrituurde Artisjok</h4>
                                <p>Knapperige artisjokken met dip.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Gluten">
                                    </article>
                                    <button class="price">€8,50</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://madanddelicacy.com/wp-content/uploads/2022/06/tris-bruschetta.jpg?w=1400"
                                    alt="Bruschetta Tricolore">
                                <h4>Bruschetta Tricolore</h4>
                                <p>Gegarneerd met pesto, gemarineerde tomaten en zachte stracchino-kaas.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                            title="Bevat Noten">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                    </article>
                                    <button class="price">€8,00</button>
                                </article>
                            </article>
                        </article>
                    </article>
                </article>
                <h3>-Hoofdgerechten-</h3>
                <section class="section-voorgerecht-desktop">
                    <article class="menu-item">
                        <img src="https://cdn.hofweb.nl/media/13241/c/Hofweb-Ministirie-web-05-portobello-wellington-large.jpg"
                            alt="Portabello Wellington">
                        <h4>Portobello Wellington</h4>
                        <p>Een klassieker met een plantaardig twist.</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                    title="Bevat Melk">
                                <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                    title="Bevat Noten">
                                <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                    title="Bevat Soja">
                            </article>
                            <button class="price">€19,50</button>
                        </article>
                    </article>

                    <article class="menu-item">
                        <img src="https://cdn.prod.website-files.com/5e51406f33d368324930f3ae/603899550f8ced61ed5d707f_Jackfruit-Rendang-Loaded-Fries.jpg"
                            alt="Jackfruit Rendang">
                        <h4>Jackfruit Rendang</h4>
                        <p>Rijke, kruidige rendang van jackfruit</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                    title="Bevat Noten">
                                <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                    title="Bevat Soja">
                            </article>
                            <button class="price">€18,50</button>
                        </article>
                    </article>

                    <article class="menu-item">
                        <img src="https://pataro.it/wp-content/uploads/2021/10/gnocchi-ripieni-tartufo-come-condirli-1200x703.jpg"
                            alt="Gnochhi al Tartufo">
                        <h4>Gnochhi al Tartufo</h4>
                        <p>De lichtste, luchtigste gnocchi in een decadente truffelsaus</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                    title="Bevat Soja">
                                <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                    title="Bevat Melk">
                                <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                    title="Bevat Noten">
                            </article>
                            <button class="price">€17,50</button>
                        </article>
                    </article>

                    <article class="menu-item">
                        <img src="https://eatsparkcity.org/wp-content/uploads/2021/03/vegan-burger-deluxe-300x200.jpg"
                            alt="Beyond Burger">
                        <h4>Beyond Burger</h4>
                        <p>Heerlijke 100% plantaardige burger</p>
                        <article class="price-container">
                            <article class="allergen-icons">
                                <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                    title="Bevat Noten">
                                <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                    title="Bevat Soja">
                                <img class="allergen-icon" src="images/mosterd.png" alt="Allergie informatie"
                                    title="Bevat Mosterds">
                            </article>
                            <button class="price">€16,50</button>
                        </article>
                    </article>
                </section>

                <article class="slideshow" id="hoofdgerechten-slideshow">
                    <button class="prev" onclick="changeSlide1('hoofdgerechten0-slideshow', -1)">&#10094;</button>
                    <button class="next" onclick="changeSlide1('hoofdgerechten0-slideshow', 1)">&#10095;</button>
                    <article class="menu-items">
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://cdn.hofweb.nl/media/13241/c/Hofweb-Ministirie-web-05-portobello-wellington-large.jpg"
                                    alt="Portabello Wellington">
                                <h4>Portobello Wellington</h4>
                                <p>Een klassieker met een plantaardig twist.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                        <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                            title="Bevat Noten">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                    </article>
                                    <button class="price">€19,50</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://cdn.prod.website-files.com/5e51406f33d368324930f3ae/603899550f8ced61ed5d707f_Jackfruit-Rendang-Loaded-Fries.jpg"
                                    alt="Jackfruit Rendang">
                                <h4>Jackfruit Rendang</h4>
                                <p>Rijke, kruidige rendang van jackfruit</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                            title="Bevat Noten">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                    </article>
                                    <button class="price">€18,50</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://pataro.it/wp-content/uploads/2021/10/gnocchi-ripieni-tartufo-come-condirli-1200x703.jpg"
                                    alt="Gnochhi al Tartufo">
                                <h4>Gnochhi al Tartufo</h4>
                                <p>De lichtste, luchtigste gnocchi in een decadente truffelsaus</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                        <img class="allergen-icon" src="images/noten.png" alt="Allergie informatie"
                                            title="Bevat Noten">
                                    </article>
                                    <button class="price">€17,50</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://eatsparkcity.org/wp-content/uploads/2021/03/vegan-burger-deluxe-300x200.jpg"
                                    alt="Beyond Burger">
                                <h4>Beyond Burger</h4>
                                <p>Heerlijke 100% plantaardige burger</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Noten">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                        <img class="allergen-icon" src="images/mosterd.png" alt="Allergie informatie"
                                            title="Bevat Mosterds">
                                    </article>
                                    <button class="price">€16,50</button>
                                </article>
                            </article>
                        </article>
                    </article>
                </article>
                <article class="menu-category">
                    <h3>-Desserts-</h3>
                    <section class="section-voorgerecht-desktop">
                        <article class="menu-items">
                            <article class="menu-item">
                                <img src="https://3f4c2184e060ce99111b-f8c0985c8cb63a71df5cb7fd729edcab.ssl.cf2.rackcdn.com/media/11128/lavacake.jpg"
                                    alt="Chocolade Lava Cake">
                                <h4>Chocolade Lava Cake</h4>
                                <p>Rijke chocoladecake met een zachte kern.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Gluten">
                                    </article>
                                    <button class="price">€8,50</button>
                                </article>
                            </article>

                            <article class="menu-item">
                                <img src="https://www.allrecipes.com/thmb/g3iZQfBe4-4S-LQBuw8mafQN_tI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8419-easy-sour-cream-cheesecake-DDMFS-beauty-4x3-BG-2747-44b427d330aa41aa876269b1249698a0.jpg"
                                    alt="Cheesecake van de Dag">
                                <h4>Cheesecake van de Dag</h4>
                                <p>Dagelijks wisselende smaken.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Gluten">
                                    </article>
                                    <button class="price">€7,50</button>
                                </article>
                            </article>

                            <article class="menu-item">
                                <img src="https://www.allrecipes.com/thmb/AXUJlrBCAI1P4FYPMsuzQ6DHoUg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/AR-228515-simple-creme-brulee-dessert-dmfs-4x3-821623e7a86548eeb89370ac23d5f251.jpg"
                                    alt="Crème Brûlée">
                                <h4>Crème Brûlée</h4>
                                <p>Onze populairste custard nagerecht</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                            title="Bevat Melk">
                                        <img class="allergen-icon" src="images/gluten2.png" alt="Allergie informatie"
                                            title="Bevat Gluten">
                                    </article>
                                    <button class="price">€8,00</button>
                                </article>
                            </article>
                    </section>

                    <article class="slideshow" id="dessert-slideshow">
                        <button class="prev" onclick="changeSlide1('dessert-slideshow', -1)">&#10094;</button>
                        <button class="next" onclick="changeSlide1('dessert-slideshow',1)">&#10095;</button>
                        <article class="menu-items">
                            <article class="slide">
                                <article class="menu-item">
                                    <img src="https://3f4c2184e060ce99111b-f8c0985c8cb63a71df5cb7fd729edcab.ssl.cf2.rackcdn.com/media/11128/lavacake.jpg"
                                        alt="Chocolade Lava Cake">
                                    <h4>Chocolade Lava Cake</h4>
                                    <p>Rijke chocoladecake met een zachte kern.</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                                title="Bevat Melk">
                                            <img class="allergen-icon" src="images/gluten2.png"
                                                alt="Allergie informatie" title="Bevat Gluten">
                                        </article>
                                        <button class="price">€8,50</button>
                                    </article>
                                </article>
                            </article>
                            <article class="slide">
                                <article class="menu-item">
                                    <img src="https://www.allrecipes.com/thmb/g3iZQfBe4-4S-LQBuw8mafQN_tI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8419-easy-sour-cream-cheesecake-DDMFS-beauty-4x3-BG-2747-44b427d330aa41aa876269b1249698a0.jpg"
                                        alt="Cheesecake van de Dag">
                                    <h4>Cheesecake van de Dag</h4>
                                    <p>Dagelijks wisselende smaken.</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                                title="Bevat Melk">
                                            <img class="allergen-icon" src="images/gluten2.png"
                                                alt="Allergie informatie" title="Bevat Gluten">
                                        </article>
                                        <button class="price">€7,50</button>
                                    </article>
                                </article>
                            </article>
                            <article class="slide">
                                <article class="menu-item">
                                    <img src="https://www.allrecipes.com/thmb/AXUJlrBCAI1P4FYPMsuzQ6DHoUg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/AR-228515-simple-creme-brulee-dessert-dmfs-4x3-821623e7a86548eeb89370ac23d5f251.jpg"
                                        alt="Crème Brûlée">
                                    <h4>Crème Brûlée</h4>
                                    <p>Onze populairste custard nagerecht</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/melk.png" alt="Allergie informatie"
                                                title="Bevat Melk">
                                            <img class="allergen-icon" src="images/gluten2.png"
                                                alt="Allergie informatie" title="Bevat Gluten">
                                        </article>
                                        <button class="price">€8,00</button>
                                    </article>
                                </article>
                            </article>
                        </article>
                    </article>

                    <article class="menu-category">
                        <h3>-Bijgerechten-</h3>
                        <section class="section-voorgerecht-desktop">
                            <article class="menu-items">
                                <article class="menu-item">
                                    <img src="https://makkelijkafvallen.nl/wp-content/uploads/1024x800-zoete-aardappel-friet-1-3-596x380.jpg"
                                        alt="Zoete Aardappelfriet">
                                    <h4>Zoete Aardappelfriet</h4>
                                    <p>Geniet van onze zoete frietjes.</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                                title="Bevat Soja">
                                            <img class="allergen-icon" src="images/gluten2.png"
                                                alt="Allergie informatie" title="Bevat Gluten">
                                        </article>
                                        <button class="price">€4,50</button>
                                    </article>
                                </article>
                                <article class="menu-item">
                                    <img src="https://www.landleven.nl/app/uploads/2017/02/gemengde-salade-min-820x461-c-center.jpg"
                                        alt="Gemengde Salade">
                                    <h4>Gemengde Salade</h4>
                                    <p>Iets om fit te blijven.</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                                title="Bevat Soja">
                                        </article>
                                        <button class="price">€4,00</button>
                                    </article>
                                </article>
                                <article class="menu-item">
                                    <img src="https://www.groentenabonnement.nl/wp-content/uploads/2020/10/geroosterde-groenten-1080x675.jpg"
                                        alt="Geroosterde Seizoensgroenten">
                                    <h4>Geroosterde Seizoensgroenten</h4>
                                    <p>Beste groente voor elke seizoen</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                                title="Bevat Soja">
                                        </article>
                                        <button class="price">€4,50</button>
                                    </article>
                                </article>
                            </article>
                    </article>

                    <article class="slideshow" id="bijgerechten-slideshow">
                        <button class="prev" onclick="changeSlide1('bijgerechten-slideshow', -1)">&#10094;</button>
                        <button class="next" onclick="changeSlide1('bijgerechten-slideshow',1)">&#10095;</button>
                        <article class="menu-items">
                            <article class="slide">
                                <article class="menu-item">
                                    <img src="https://makkelijkafvallen.nl/wp-content/uploads/1024x800-zoete-aardappel-friet-1-3-596x380.jpg"
                                        alt="Zoete Aardappelfriet">
                                    <h4>Zoete Aardappelfriet</h4>
                                    <p>Geniet van onze zoete frietjes.</p>
                                    <article class="price-container">
                                        <article class="allergen-icons">
                                            <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                                title="Bevat Soja">
                                            <img class="allergen-icon" src="images/gluten2.png"
                                                alt="Allergie informatie" title="Bevat Gluten">
                                        </article>
                                        <button class="price">€4,50</button>
                                    </article>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://www.landleven.nl/app/uploads/2017/02/gemengde-salade-min-820x461-c-center.jpg"
                                    alt="Gemengde Salade">
                                <h4>Gemengde Salade</h4>
                                <p>Iets om fit te blijven.</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                    </article>
                                    <button class="price">€4,00</button>
                                </article>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://www.groentenabonnement.nl/wp-content/uploads/2020/10/geroosterde-groenten-1080x675.jpg"
                                    alt="Geroosterde Seizoensgroenten">
                                <h4>Geroosterde Seizoensgroenten</h4>
                                <p>Beste groente voor elke seizoen</p>
                                <article class="price-container">
                                    <article class="allergen-icons">
                                        <img class="allergen-icon" src="images/soja.png" alt="Allergie informatie"
                                            title="Bevat Soja">
                                    </article>
                                    <button class="price">€4,50</button>
                                </article>
                            </article>
                        </article>
                    </article>
                </article>

                <article class="menu-category">
                    <h3>-Drank en Wijn-</h3>
                    <section class="section-voorgerecht-desktop">
                        <article class="menu-items">
                            <article class="menu-item">
                                <img src="https://livingthegreenlife.com/wp-content/uploads/2021/11/3-warme-dranken-voor-koude-dagen.jpg"
                                    alt="Warme Dranken">
                                <h4>Warme Dranken</h4>
                                <p>Espresso</p>
                                <button class="price">€2,50</button>
                                <p>Cappuccino (met havermelk)</p>
                                <button class="price">€3,50</button>
                                <p>Thee</p>
                                <button class="price">€2,75</button>
                                <p>Verse Muntthee</p>
                                <button class="price">€3,00</button>
                            </article>
                            <article class="menu-item">
                                <img src="https://cdn.webshopapp.com/shops/110638/files/287449980/image.jpg"
                                    alt="Koude Dranken">
                                <h4>Koude Dranken</h4>
                                <p>Huisgemaakte Ijsthee</p>
                                <button class="price">€3,50</button>
                                <p>Vers geperst sinasappelsap</p>
                                <button class="price">€4,00</button>
                                <p>Kombucha van de Dag</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Frisdranken</p>
                                <button class="price">€3,00</button>
                            </article>
                            <article class="menu-item">
                                <img src="https://spiegelau.nl/wp-content/uploads/De-perfecte-temperatuur-voor-witte-wijn.jpg"
                                    alt="Witte Wijn">
                                <h4>Witte Wijnen</h4>
                                <p>Biologische Chardonnay (glas)</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Sauvignon Blanc (glas)</p>
                                <button class="price">€4,50</button>
                            </article>
                            <article class="menu-item">
                                <img src="https://cdn.webshopapp.com/shops/320392/files/446122121/340x999x3/wat-zijn-nou-koude-rode-wijnen.jpg"
                                    alt="Rode Wijnen">
                                <h4>Rode Wijnen</h4>
                                <p>Biologische Merlot (glas)</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Tempranillo (glas)</p>
                                <button class="price">€4,50</button>
                            </article>
                        </article>
                </article>

                <article class="slideshow" id="drank-slideshow">
                    <button class="prev" onclick="changeSlide('drank-slideshow', -1')">&#10094;</button>
                    <button class="next" onclick="changeSlide('drank-slideshow', 1')">&#10095;</button>
                    <article class="menu-items">
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://livingthegreenlife.com/wp-content/uploads/2021/11/3-warme-dranken-voor-koude-dagen.jpg"
                                    alt="Warme Dranken">
                                <h4>Warme Dranken</h4>
                                <p>Espresso</p>
                                <button class="price">€2,50</button>
                                <p>Cappuccino (met havermelk)</p>
                                <button class="price">€3,50</button>
                                <p>Thee</p>
                                <button class="price">€2,75</button>
                                <p>Verse Muntthee</p>
                                <button class="price">€3,00</button>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://cdn.webshopapp.com/shops/110638/files/287449980/image.jpg"
                                    alt="Koude Dranken">
                                <h4>Koude Dranken</h4>
                                <p>Huisgemaakte Ijsthee</p>
                                <button class="price">€3,50</button>
                                <p>Vers geperst sinasappelsap</p>
                                <button class="price">€4,00</button>
                                <p>Kombucha van de Dag</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Frisdranken</p>
                                <button class="price">€3,00</button>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://spiegelau.nl/wp-content/uploads/De-perfecte-temperatuur-voor-witte-wijn.jpg"
                                    alt="Witte Wijn">
                                <h4>Witte Wijnen</h4>
                                <p>Biologische Chardonnay (glas)</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Sauvignon Blanc (glas)</p>
                                <button class="price">€4,50</button>
                            </article>
                        </article>
                        <article class="slide">
                            <article class="menu-item">
                                <img src="https://cdn.webshopapp.com/shops/320392/files/446122121/340x999x3/wat-zijn-nou-koude-rode-wijnen.jpg"
                                    alt="Rode Wijnen">
                                <h4>Rode Wijnen</h4>
                                <p>Biologische Merlot (glas)</p>
                                <button class="price">€4,50</button>
                                <p>Biologische Tempranillo (glas)</p>
                                <button class="price">€4,50</button>
                            </article>
                        </article>
                    </article>
                </article>

                <h5>*Allergiën of dieetwensen? Laat het ons weten!</h5>
                <h5>*Alle gerechten zijn 100% plantaardig en worden met zorg bereid.</h5>
        </section>
    </main>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>