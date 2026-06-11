<?php include 'includes/db.php' ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RC Mania Tarnów</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="nav-top" id="up">
            <a href="index.html" class="nav-logo">🚗 RC MANIA</a>
            <button class="nav-toggle" id="navToggle">☰</button>
        </div>

        <ul class="nav-links" id="navLinks">
            <li><a href="#">Strona główna</a></li>
            <li><a href="#">Aktualności</a></li>
            <li><a href="#">Wydarzenia</a></li>
            <li><a href="#">Galeria</a></li>
            <li><a href="#">O nas</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">RC MANIA TARNÓW</h1>
            <p class="hero-subtitle">Pasja do modeli RC</p>
            <a href="#" class="btn-neon">Sprawdź wydarzenia →</a>
        </div>
    </section>
    <!-- AKTUALNOŚCI -->
    <section class="section-news">
        <div class="container">
            <h2 class="section-title">Ostatnie aktualności</h2>
            <div class="news-grid">
                <!-- na razie statyczne karty, potem podepniemy PHP i bazę -->
                <article class="card">
                    <div class="card-img-placeholder"></div>
                    <div class="card-body">
                        <span class="card-date">10.06.2025</span>
                        <h3 class="card-title">Tytuł aktualności numer jeden</h3>
                        <p class="card-text">Krótki opis tego co się wydarzyło, kilka zdań żeby wypełnić kartę i
                            zobaczyć jak wygląda układ.</p>
                        <a href="#" class="btn-neon btn-small">Czytaj więcej →</a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-img-placeholder"></div>
                    <div class="card-body">
                        <span class="card-date">05.06.2025</span>
                        <h3 class="card-title">Tytuł aktualności numer dwa</h3>
                        <p class="card-text">Krótki opis tego co się wydarzyło, kilka zdań żeby wypełnić kartę i
                            zobaczyć jak wygląda układ.</p>
                        <a href="#" class="btn-neon btn-small">Czytaj więcej →</a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-img-placeholder"></div>
                    <div class="card-body">
                        <span class="card-date">01.06.2025</span>
                        <h3 class="card-title">Tytuł aktualności numer trzy</h3>
                        <p class="card-text">Krótki opis tego co się wydarzyło, kilka zdań żeby wypełnić kartę i
                            zobaczyć jak wygląda układ.</p>
                        <a href="#" class="btn-neon btn-small">Czytaj więcej →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- KRÓTKIE "O NAS" -->
    <section class="section-about">
        <div class="container about-inner">
            <div class="about-text">
                <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">O nas</h2>
                <p class="card-text">Jestesmy grupa fanatykow blalblabllfhdjkfhjkdshfjkhdskfh gfhfgh <br>
                    sdsfjhgfhjdsgfjhdgs hgfh fg fghfg h hfghfgh <br> bfgfdgdfgbgjhdfg fhgfhfgh fghfghfg fghfghf</p>
                <a href="o-nas.html" class="btn-neon btn-small" style="margin-top: 20px; display: inline-block;">Więcej
                    o nas</a>
            </div>
            <img src="images/info-photo.jpg" alt="Grupa RC Mania" class="about-photo">
        </div>
    </section>
    <!-- WYDARZENIA -->
    <section class="section-events">
        <div class="container">
            <h2 class="section-title">Najbliższe wydarzenia</h2>
            <div class="events-grid">
                <article class="card">
                    <div class="card-img-placeholder"></div>
                    <div class="card-body">
                        <span class="card-date">11.06.2026</span>
                        <h3 class="card-title">Tytuł wydarzenia nr1</h3>
                        <p class="card-text">📍Miejsce: jakas tam ulica cos cos</p>
                        <p class="card-text">Krótki opis tego co się będzie działo, kilka zdań żeby wypełnić kartę i
                            zobaczyć jak wygląda układ.
                        </p>
                        <a href="#" class="btn-neon btn-small">Czytaj więcej</a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-img-placeholder"></div>
                    <div class="card-body">
                        <span class="card-date">19.06.2026</span>
                        <h3 class="card-title">Tytuł wydarzenia nr2</h3>
                        <p class="card-text">📍Miejsce: jakas tam ulica cos cos</p>
                        <p class="card-text">Krótki opis tego co się będzie działo, kilka zdań żeby wypełnić kartę i
                            zobaczyć jak wygląda układ.
                        </p>
                        <a href="#" class="btn-neon btn-small">Czytaj więcej</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col  foot-col1">
                    <h5 style="padding-top: 45px;">RC Mania Tarnów</h5>
                    <span class="card-text">Strona od fanatyków dla fanatyków</span>
                </div>
                <div class="footer-col foot-col2">
                    <ul class="footer-links">
                        <li><a href="#up">Strona główna</a></li>
                        <li><a href="#">Aktualności</a></li>
                        <li><a href="#">Wydarzenia</a></li>
                    </ul>
                </div>
                <div class="footer-col foot-col3">
                    <h5 style="padding-top: 20px;">Kontakt</h5>
                    <span class="card-text">E-mail: rcmania@gmail.com</span>
                    <span class="card-text">Tarnów</span>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <span class="card-text">&copy; 2026 RC Mania</span>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>