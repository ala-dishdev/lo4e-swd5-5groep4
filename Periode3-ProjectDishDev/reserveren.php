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

    <title>Vegan Food // Reserveren</title>
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
<main>
    <header>
        <?php include("header.php"); ?>
    </header>
    <section id="contact">
        <article class="tekst">
            <h2>Reserveer nu!</h2>
            <p>Reserveer nu een tafel doormiddel van het formulier in te vullen, of door ons te bellen</p>

            <article class="tekst-details">
                <h3>Vestiging</h3>
                <article>
                    <i class="fas fa-map-marked-alt get"></i>
                    <p>Keizersgracht 212, 1016 DX Amsterdam</p>
                </article>
                <h3>Telefoonnummer</h3>
                <article>
                    <i class="fas fa-phone get"></i>
                    <p>088 - 2321451</p>
                </article>
                <h3>Mail ons</h3>
                <article>
                    <i class="fas fa-envelope get"></i>
                    <p>info@veganfoodamsterdam.nl</p>
                </article>
                <h3>Volg ons</h3>
                <article class="volg-ons">
                    <a href="https://google.com/" target="_blank" rel="noopener" rel="noreferrer"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://google.com/" target="_blank" rel="noopener" rel="noreferrer"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://google.com/" target="_blank" rel="noopener" rel="noreferrer"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://google.com/" target="_blank" rel="noopener" rel="noreferrer"><i
                            class="fab fa-linkedin-in"></i></a>
                </article>
            </article>
        </article>

        <article class="form">
            <h4>Reserveren</h4>
            <p>Vul dit formulier in om een tafel te serveren.</p>
            <article class="form-rij">
                <input type="text" placeholder="Uw naam">
                <input type="text" placeholder="Uw e-mailadres">
                <input type="text" placeholder="Telefoonnummer">
                <input type="text" placeholder="Aantal personen">
            </article>
            <article class="form-col">
                <input type="text" placeholder="Type reservering">
                <input type="text" placeholder="Datum">
                <input type="text" placeholder="Tijd">
            </article>
            <article class="form-col">
                <textarea name="" id="" cols="30" rows="8"
                    placeholder="Opmerking over allergieen of andere zaken."></textarea>
            </article>
            <article class="form-col">
                <button>Verstuur</button>
            </article>
        </article>
    </section>
</main>
<footer>
    <?php include("footer.php"); ?>
</footer>

</html>