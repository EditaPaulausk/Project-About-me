<?php
   
    require __DIR__ . '/src/app.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="style.css?2">
    <script src="custom.js"></script>


</head>

<body>
    <div class="header">
        <div class="top-header" id="pradzia">
            <h1>Edita Paulauskienė</h1>
            <h4>WEB puslapių kūrimas</h4>
        </div>
        <div class="nav-header">
            <div class="row" role="navigation">
                <div class="col"><h6><a href="#pradzia">Pradžia</a></h6></div>
                <div class="col"><h6><a href="#ApieMane">Apie mane</a></h6></div>
                <div class="col"><h6><a href="#Savanoryste">Savanorystė</a></h6></div>
                <div class="col"><h6><a href="#Igudziai">Įgūdžiai</a></h6></div>
                <div class="col"><h6><a href="#CV">Mano CV</a></h6></div>
                <div class="col"><h6><a href="#Issilavinimas">Išsilavinimas</a></h6></div>
                <div class="col"><h6><a href="#Portfolio">Portfolio</a></h6></div>
                <div class="col"><h6><a href="#kontaktai">Kontaktai</a></h6></div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="lygiavimas" id="ApieMane">
            <h2>Apie mane</h2>
            <p>Šiuo metu keičiu profesiją (16 metų studijavau mediciną, todėl nuolatinis mokymasis man ne naujiena). IT srityje patirties neturiu, todėl ieškau komandos, su kuria galėčiau toliau mokytis ir tobulėti. Esu užsispyrusi, perfekcionistė, atsakinga, pasiekiu užsibrėžtus tikslus. Esu trijų vaikučių mama, todėl turiu laiko planavimo ir darbo organizavimo patirties. Labai noriu rasti praktikos/darbo vietą su lanksčiomis darbo valandomis, kad galėčiau darbą derinti su šeima.</p>
        </div>
        <div class="geltona" id="Savanoryste">
            <h2>Savanorystė</h2>
                <ul>
                    <li><p>Mama mamai savanorė (konsultuoju mamas žindymo ir kūdikių auginimo klausimais el.laiškais) nuo 2017 m. iki dabar.
                    http://pradzia.org/</p></li>
                    <li><p>Vaikų linija (2014 m.-2015 m. psichologinė pagalba vaikams telefonu ir el.laiškais)
                    https://www.vaikulinija.lt/</p></li>
                    <li><p>Vaikų vasaros stovyklos "Atgaja" vadovė savanorė (2007 m.), vaikų vasaros stovyklos "Atgaja" gydytoja (2012 m.)
                    https://latgaja.lt/</p></li>
                </ul>
        </div>
        <div>
            <div class="igudziai" id="Igudziai">
                <h2>Įgūdžiai</h2>
                <ul>
                    <li><p>HTML5/CSS3/JS - pagrindai.</p></li>
                    <li><p>Darbo su JQuery biblioteka pagrindai.</p></li>
                    <li><p>CSS Grid, Bootstrap, SASS - pagrindai.</p></li>
                    <li><p>PHP, SQL - pagrindai.</p></li>
                    <li><p>Darbo su Visual Studio Code patirtis.</p></li>
                    <li><p>Antroji kalba - anglų kalba (rašymas ir skaitymas geriau nei kalbėjimas).</p></li>
                    <li><p>MS Excel, MS PowerPoint, MS Word - puikiai.</p></li>
                </ul>
                <p><button><a href="#kontaktai">Susisiekite su manim</a></button></p>
            </div>
            <div><img class="nuotrauka" src="image/clement-helardot-95YRwf6CNw8-unsplash (1).jpg" alt="Paveikslėlis"/></div>
        </div>
        <div class="geltona" id="Issilavinimas">
            <h2>Išsilavinimas</h2>
                <ul style="list-style-type:none;">
                    <li><p>2021.12.01 iki dabar mokausi BitDegree Full Web Development Course (450 val.).</p></li>
                    <li><p>2021.11.03 baigiau WEB kūrimo vakarinius mokymus (72 val.). Vilnius Coding School.</p></li>
                    <li><p>2021.10.01 sertifikatą už dalyvavimą Women Go Tech "Atrask Technologijas".</p></li>
                    <li><p>2012 - 2021 VU Vaikų ligų rezidentūra.</p></li>
                    <li><p>2005 - 2011 LSMU Medicinos Magistro kvalifikacinis laipsnis, medicinos gydytojo kvalifikacija.</p></li>
                    <li><p>2005 baigiau Kėdainių "Atžalyno" vidurinę mokyklą.</p></li>
                </ul>
        </div>
        <div id="DarboPatirtis">
            <h2>Darbo patirtis</h2>
            <ul style="list-style-type:none;">
                <li><p>2011 - 2021 VUL Santaros klinikos, Vaikų ligoninės filialas – gydytoja rezidentė.</p></li>
                <li><p>2009 - 2010 UAB „In Mundo“, pareigos: Slapta pirkėja (darbo kokybės tikrinimas, vertinimas, ataskaitų teikimas).<br>UAB „Orakulas“, pareigos: lažybų tarpininkė (darbas su klientais, kasos aparatu).</p></li>
                <li><p>2002 - 2005 darbai vasaros atostogų metu. UAB "Songailai", UAB "Vikeda", UAB „Rivona“ - <br>puikiai atlikau patikėtas užduotis, darbas komandoje, darbo planavimas ir organizavimas, laiko planavimas, darbas kompiuteriu.</p></li>
            </ul>
        </div>
        <div class="lygiavimas geltona" id="CV">
            <h2>CV</h2>
            <p>Sutrumpintą mano CV versiją galima parsisiųsti paspaudus mygtuką žemiau.</p>
            <p><button class="CV" onclick="parsisiusti()">Parsisiųsti CV</button></p>
        </div>

        <!--Citatos keičiasi viena po kitos - slideshow-->
        <div class="citatos lygiavimas">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <p>Ir kai tu tikrai ko nors trokšti, visas pasaulis slapta padeda tau įgyvendinti šį troškimą.<br>(Paulo Coelho)</p>
                </div>
                
                <div class="mySlides fade">
                    <p>Po dvidešimties metų, patikėkite, jūs labiau gailėsitės dėl to, ko nepadarėte, nei dėl to, ką padarėte, tad gaudykite permainų vėjus. Ieškokite, svajokite ir atraskite.<br>(Markas Twainas)</p>
                </div>
                
                <div class="mySlides fade">
                    <p>Vienintelis būdas gerai dirbti, tai – dirbti mėgstamą darbą.<br>(Steve'as Jobsas)</p>
                </div>
                
                </div>               
                <div class="taskai" style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}    
                        for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 5000); // Tekstas keisis kas 5 sek
                    }
                </script>
                
        </div>
        <div class="lygiavimas geltona" id="Portfolio">
            <h2>Portfolio</h2>
            <p>Medžiaga dar ruošiama...</p>
        </div>
    </div>
    <div class="footer">
        <div class="container-footer">
            <h2>Kontaktai</h2>
            <h5>Vilnius, Lietuva/Remote</h5>
            <h5>El. paštas: edita.paulausk@gmail.com</h5>
            <h5>Tel. Nr.: +370 6 210 3861</h5>
        </div>
        <div class="container-footer">
            <form id="kontaktai" action="#kontaktai" method="post">
                <h3>Bendraukime</h3>
                <h4>Susisiekite su manimi jau dabar!</h4>
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required></p>
                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea placeholder="Jūsų žinutė..." name="zinute" required></textarea></p>
                <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                
                <?php 
                    if (isset($_POST["submit"])) {
                        duomenys();
                        echo "<h4>Dėkoju. Jūsų žinutė gauta. Netrukus su jumis susisieksiu.</h4>";
                    }
                 ?>
            </form> 
        </div>
    </div>

</body>
</html>