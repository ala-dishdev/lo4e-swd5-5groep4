<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <!-- Zorgt ervoor dat de pagina correct wordt weergegeven op mobiele apparaten. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO (search enige optimation) Metagegevens -->
    <!-- Description voor zoekmachines en sociale media, omschrijft kort de inhoud van de pagina. -->
    <meta name="description"
        content="Geniet van heerlijk plantaardig eten bij ons vegan restaurant in Amsterdam. Verse, duurzame en smaakvolle vegan gerechten voor ontbijt, lunch en diner!">
    <!-- Keywords helpt zoekmachines begrijpen waar de pagina over gaat. -->
    <meta name="Keywords" content="vegan restaurant amsterdam, plantaardig eten amsterdam, vegan food amsterdam, veganistisch restaurant amsterdam, beste vegan restaurant amsterdam, 
    gezond vegan eten amsterdam, vegan brunch amsterdam, vegan take-away amsterdam, vegan fine dining amsterdam, biologisch vegan restaurant amsterdam, 
    duurzaam eten amsterdam, vegan friendly restaurant amsterdam, vegan burgers amsterdam, vegan sushi amsterdam, vegan pizza amsterdam, vegan desserts amsterdam, 
    vegan ontbijt amsterdam, vegan lunch amsterdam, vegan diner amsterdam, vegan restaurant in het centrum van amsterdam, vegan eetcafé amsterdam, vegan hotspot amsterdam, 
    vegan restaurant jordaan, vegan eten in de pijp, vegan friendly cafés amsterdam">
    <!-- Author de naam van de developer van de pagina. -->
    <meta name="author" content="Noah Weerwag">

    <title>Vegan Food // Homepagina</title>
    <!-- Favicon kleine afbeelding die wordt weergegeven in de browser-tabbladen -->
    <link rel="icon" href="images/beeldmerk_logo_vegan_food.png" type="image/x-icon">
    <!-- Link naar stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link naar overige -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <header>
        <?php include("header1.php"); ?>
    </header>
    <main>
        <section id="hero">
            <article class="hero-content">
                <h1>Meet, Eat &<br> Enjoy The <mark>Real <br>Taste</mark>.</h1>
                <p>Welkom bij ons vegan restaurant, waar smaakvolle gerechten en duurzaamheid hand in hand gaan voor een
                    gezonde toekomst!</p>
                <article class="button">
                    <a href="reserveren.php"><button class="reserveren-btn">Reserveren</button></a>
                    <a href="locatie.php"><button class="contact-btn">Contact</button></a>
                </article>
            </article>
            <article class="food-image-overlay">
                <img src="img/bio-food-banner-template-with-photo 2.png" alt="Restaurant Achtergrond">
            </article>
        </section>

        <section id="informatie">
            <article class="informatie-rand">
                <article class="informatie-kaart">
                    <article class="icon">
                        <img src="images/map_pin.png" alt="">
                    </article>
                    <article class="tekst">
                        <h3>Locatie</h3>
                        <p>Keizersgracht 212, 1016DX Amsterdam</p>
                    </article>
                </article>
                <article class="informatie-kaart">
                    <article class="icon">
                        <img src="images/clock.png" alt="">
                    </article>
                    <article class="tekst">
                        <h3>Locatie</h3>
                        <p>Keizersgracht 212, 1016DX Amsterdam</p>
                    </article>
                </article>
                <article class="informatie-kaart">
                    <article class="icon">
                        <img src="images/reserveren.png" alt="">
                    </article>
                    <article class="tekst">
                        <h3>Locatie</h3>
                        <p>Keizersgracht 212, 1016DX Amsterdam</p>
                    </article>
                </article>
            </article>
        </section>

        <section id="over-ons">
            <article class="over-ons-tekst">
                <article class="over-ons-container">
                    <h3>OVER ONS</h3>
                    <article class="over-ons-tekststuk">
                        <h2><mark>VEGAN</mark> ETEN<br> KAN HEERLIJK ZIJN</h2>
                        <p>Bij ons vegan restaurant draait alles om heerlijke, plantaardige gerechten die zowel goed
                            zijn voor jou als voor de planeet. We geloven in de kracht van versheid en duurzaamheid, en
                            bieden een menu boordevol smaakvolle en creatieve gerechten.</p>
                        <p>Elke maaltijd is zorgvuldig samengesteld met ingrediënten van lokale leveranciers, zodat je
                            niet alleen geniet van een geweldige eetervaring, maar ook bijdraagt aan een groenere
                            wereld. Kom langs en ontdek hoe lekker vegan kan zijn!</p>
                    </article>
                    <article class="tekst">
                        <p class="lijn">Lokaal & Duurzaam</p>
                        <p class="lijn">Creatieve Vegan Gerechten</p>
                        <p class="lijn">Gezond en Smaakvol</p>
                    </article>
                    <article class="lees-meer-button">
                        <a href="#"><button class="lees-meer-btn">Lees meer...</button></a>
                    </article>
                </article>
                <article class="chef-image">
                    <img src="images/chef.png" alt="chef-kok">
                </article>
            </article>
        </section>

        <section class="waarom-vegan-food">
            <article class="waarom-vegan-food-tekst">
                <article class="waarom-vegan-food-container">
                    <h3 class="specials">WAT ONS ONDERSCHEIDT</h3>
                    <h2>WAAROM VEGAN FOOD?</h2>
                </article>
                <article class="waarom-vegan-food-h2">
                </article>
            </article>
            <article class="kaart1-rand">
                <article class="kaart1">
                    <article class="broccoli">
                        <img src="images/broccoli.png" alt="">
                    </article>
                    <h3>100% Vegan</h3>
                    <p>Bij ons is alles 100% vegan! Van ontbijt tot diner, we serveren enkel plantaardige gerechten die
                        niet alleen lekker, maar ook duurzaam zijn. Geniet van een bewuste keuze voor zowel je
                        gezondheid als de planeet!</p>
                </article>
                <article class="kaart1">
                    <article class="salade">
                        <img src="images/salade.png" alt="">
                    </article>
                    <h3>Vers Bereid Eten</h3>
                    <p>Alle gerechten worden met zorg en liefde vers bereid, direct van de keuken naar jouw tafel. Zo
                        garanderen we de beste smaak en kwaliteit in elke maaltijd!</p>
                </article>
                <article class="kaart1">
                    <article class="discount">
                        <img src="images/discount.png" alt="">
                    </article>
                    <h3>Vouchers Beschikbaar</h3>
                    <p>Geef het cadeau van smaak en duurzaamheid! Onze vouchers zijn het perfecte geschenk voor elke
                        vegan-liefhebber. Verkrijgbaar in verschillende bedragen!</p>
                </article>
            </article>
        </section>

        <section id="specials">
            <article class="specials-container">
                <article class="specials-wrapper">
                    <h3 class="specials">SPECIALS</h3>
                    <h2>ALLE AANBIEDINGEN</h2>
                    <article class="kaart-lijst">
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/hutspot1.png" alt="gerecht hutspot">
                                <p class="kaart-tag">50% Korting</p>
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Hutspot</h3>
                                <p class="kaart-tekst">Beoordeling 5.0</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€14,99</mark></p>
                            </article>
                        </article>
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/image.png" alt="gerecht romige pompoensoep">
                                <p class="kaart-tag">30% Korting</p>
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Romige Pompoensoep</h3>
                                <p class="kaart-tekst">Beoordeling 4.5</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€18,99</mark></p>
                            </article>
                        </article>
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/image1.png" alt="gerecht gefrituurde artisjok">
                                <p class="kaart-tag">50% Korting</p>
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Gefrituurde Artisjok</h3>
                                <p class="kaart-tekst">Beoordeling 4.0</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€11,99</mark></p>
                            </article>
                        </article>
                    </article>
                </article>
                <article class="chef-specials-image">
                    <img src="images/chef_specials.png" alt="chef-kok">
                </article>
            </article>
        </section>
        <section id="populair">
            <article class="specials-container">
                <article class="specials-wrapper">
                    <h3 class="specials">POPULAIR</h3>
                    <h2>POPULAIRE GERECHTEN</h2>
                    <article class="kaart-lijst">
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/image2.png" alt="gerecht jackfruit rendang">
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Jackfruit Rendang</h3>
                                <p class="kaart-tekst">Beoordeling 4.2</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€9,99</mark></p>
                            </article>
                        </article>
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/image3.png" alt="gerecht beyond burger">
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Beyond Burger</h3>
                                <p class="kaart-tekst">Beoordeling 4.5</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€21,99</mark></p>
                            </article>
                        </article>
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="img/image4.png" alt="gerecht crème brûlée">
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Crème Brûlée</h3>
                                <p class="kaart-tekst">Beoordeling 4.8</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€14,99</mark></p>
                            </article>
                        </article>
                        <article class="kaart">
                            <article class="kaart-foto">
                                <img src="images/image5.png" alt="gerecht gemende salade">
                            </article>
                            <article class="kaart-content">
                                <h3 class="kaart-titel">Gemengde Salade</h3>
                                <p class="kaart-tekst">Beoordeling 3.9</p>
                                <p class="kaart-tekst">Voor <mark class="prijs">€17,99</mark></p>
                            </article>
                        </article>
                    </article>
                </article>
            </article>
        </section>
    </main>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>

</html>