 <?php

require __DIR__ . '/kontaktine/kont.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Būkite pasveikinti</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo&family=DM+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a43ad4166e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="icon" type="image/x-icon/" href="NUOTR/favicon.ico">
    <link rel="stylesheet" href="Stilius/normalize.css">
    <link rel="stylesheet" href="css/versk2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>
    <script src="JS/veresk.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="containe flex-container">
            <div class="main-header" >
                <div class="site-home-link"><a href="#pag">Pagrindinis</a></div>
                <div class="logo" ><a href="#logot"><img src="NUOTR/mp logo.png" alt="Monte Pacis"></a></div>
                <nav class="menu">
                    <ul class="flex-container">
                        <li><a href="#logot">Meniu</a></li>
                        <li><a href="#kon">Kontaktai</a></li>
                        <li><a class="regist" href="#registarcijosf">Registracija</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-menu">
                <ul id="mMenu" class="flex-container">
                    <div class="m-site-home-link"><a href="#pag">Pagrindinis</a></div>
                    <li><a href="#logot">Meniu</a></li>
                    <li><a href="#kon">Kontaktai</a></li>
                    <li><a class="registm" href="#registarcijosf">Registracija</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
        </div>
    </header>
<div class="site-header" id="logot">
        <div class="teks">
            <h3 class="svet">svetingumo kompleksas pažaislio venuolyne</h3>
            <h1 class="mon">monte pacis</h1>
            <h4 class="monas">monastic</h4>
        </div>
    </div>
    


    <div class="paslaug" id="pag">
        <p>Mūsų paslaugos</p>
    </div>
    <section class="slider">
        <div class="con">
            <div class="slider-container">
                <div><img class="sli" src="NUOTR/rest.jpg" alt="Description">
                    <h5>Restoranas</h5>
                </div>
                <div><img class="sli" src="NUOTR/restoranas (2).jpg" alt="Description">
                    <h5>Viešbutis </h5>
                </div>
                <div><img class="sli" src="NUOTR/images.jpg" alt="Description">
                    <h5>Šventės</h5>
                </div>
                <div><img class="sli" src="NUOTR/download.jpg" alt="Description">
                    <h5>Dovanų Kuponai</h5>
                </div>
                <div><img class="sli" src="NUOTR/vynas.jpg" alt="Description">
                    <h5>Pažaislio vynas</h5>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div class="apie">
        <div class="baroko">Brandžiojo baroko architektūra, didybė ir vienuolyno paslaptingumas.</div>
        <div class="istorija">Pažaislio bažnyčios ir vienuolyno ansamblis pastatytas XVII-XVIII a. funduojant
            Lietuvos Didžiosios Kunigaikštystės Didžiajam kancleriui Kristupui Zigmantui Pacui. </div>
        <div><img src="NUOTR/MP-Liepu-aleja-1-002.jpg" style="width:100%"></div>

    </div>
    <div class="Registracija" id="registarcijosf">
        <div class="susisiek">Registracija/Klausimai</div>
        <form id="contact" action="veresk2.php" method="post">

            <label>Vardas:</label>
            <input type="text" name="vardas" placeholder="Jūsų Vardas..." required>
            <label>Email:</label>
            <input type="text" name="email" placeholder="Jūsų el.paštas..." required>

            <label">Klausimai:</label>
                <textarea name="kalusimai" placeholder="Būkite pasveikinti. Vieta jūsų klausimui..."
                    style="height:150px" required></textarea>
                <input name="submit" type="submit" value="Siusti">

        </form>
    </div>
    <footer class="footer">
        <div >
            <a class="link" href="https://www.facebook.com/montepacis.lt" target="_blank">Facebook <i class="fa-brands fa-facebook-f"></i></a>
            <a class="link" href="https://www.instagram.com/montepacis/" target="_blank">Instagram <i  class="fa-brands fa-instagram"></i></a>
            <a class="link" href="#https://www.linkedin.com/company/uab-monte-pacis/" target="_blank">LinkedIn <i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </footer>
    <address>
        <div class="kont" id="kon">
            <div class="cent"> <a>Kontaktai:</a></div>
            <div class="rask"> Telefono numeri:
            <div class="tela"><a href="tel: +37060492935"> Paskambinkite mums. <i class="fa-solid fa-phone"></i></a></div></div>
            <div class="rask"> Elektroninis paštas:
            <div class="maila"><a href="mailto:vereskaitegabriele@gmail.com">Parašykite mums. <i class="fa-solid fa-envelope"></i></a></div></div>
            <div class="rask">Mus galite rasti:</div>
            <div class="loc"> <a href="https://www.google.com/maps/place/Monte+Pacis/@54.8764566,24.018863,17z/data=!4m9!3m8!1s0x46e73d57a78d5e37:0x6be820256ba6d177!5m2!4m1!1i2!8m2!3d54.8762714!4d24.02088!16s%2Fg%2F12lkgkn57" target="_blank">  T. Masiulio g. 31, 52436 Kaunas. <i class="fa-solid fa-location-dot"></i> </a></div>
        </div>
    </address>
    
    <div class="copy"> Copyright &copy;<?php echo date('Y ') ?> Gabrielė Vereškaitė</div>

    </div>

</body>

</html>