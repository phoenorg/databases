<!DOCTYPE html>
<html lang="en">
<body bgcolor="#OOOOOO">
<head>
    <title>Partnerships</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="popups.css">
    <meta name="google-site-verification" content="f7S9blLxu2nJn1EGjPR-bVMyKWewDYFmkrh8eaUEGjs" />
    <style>
      @font-face { font-family: Lcs; src: url('LucymarSans-Regular.ttf'); } 
      p {
         font-family: Lcs
      }

      body {
        margin: 0;
        padding: 0;
        background-image: url("media/panorama/panorama1.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: -1;
      }
      
      #main-content {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
      }
    </style>
</head>
<body>

<!--script désactivé-->
<noscript><p align="center"><font color="#FFOOOO"><strong><i>Javascript is disabled. Please re-enable it to enjoy an optimal web experience.<a href="https://support.google.com/admanager/answer/12654?hl=en">How to enable javascript?</a></i></strong></font></p></noscript>


<!--logo-->
<div id="main-content">
<div class="logo-container">
<center><a href="https://www.phoen.org"><img src="media/logo.png" width="300" height="300" alt="Logo" class="logo" /></a></center>
</div><br>

<!--main message-->
<br><p align="center"><font color="#OOOOOO" size="8"><strong>Partnerships and Collaboration</strong></font></p><br>

<!--menu-->
<label for="ch" id="lab"></label>
<input type="checkbox" id="ch">
<nav>
    <a href="index.php"><p><font size="5">main</font></p></a>
    <a href="articles.html"><p><font size="5">articles</font></p></a>
    <a href="media.html"><p><font size="5">media</font></p></a>
    <a href="aboutus.html"><p><font size="5">about us</font></p></a>
    <a href="contacts.html"><p><font size="5">contacts</font></p></a>
    <a href="partnerships.php"><p><font size="5">partnerships</font></p></a>
    <a href="tos.html"><p><font size="5">privacy policy</font></p></a>
</nav>

<!--text-->
<p align="center"><font color="#OOOOOO" size="6">If you're interested in partnering with us, we're open to collaborations.</font></p><a class="main-page_buttons" href="mailto:contact@phoen.org">Contact us ➡️ </a></p>
<style>
/* button effects */
.main-page_buttons {
    display: inline-block;
    padding: 10px 20px;
    background-color: #034191;
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s;
}
.main-page_buttons:hover {
    background-color: #010B19;
}
</style>

<!--text-->
    <main>
        <?php
        // Connexion à la base de données
        $dsn = 'mysql:host=localhost;dbname=database_name';
        $user = 'username';
        $password = 'password';
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $dbh = new PDO($dsn, $user, $password, $options);

        // Récupération des données
        $stmt = $dbh->prepare("SELECT titre, url, description, date FROM partners WHERE date >= DATE_SUB(NOW(), INTERVAL 56 DAY) ORDER BY date DESC");
        $stmt->execute();
        $partners = $stmt->fetchAll();

        // Affichage des données
        foreach ($partners as $collab) {
            echo '<article class="lien">';
            echo '<header>';
            echo '<h2>' . $collab['titre'] . '</h2>';
            echo '<time>' . date('d/m/Y H:i:s', strtotime($collab['date'])) . '</time>';
            echo '</header>';
            echo '<p>' . $collab['description'] . '</p>';
            echo '<a href="' . $collab['url'] . '" target="_blank">Check out here</a>';
            echo '</article>';
}
?>
    </main>


<!--footer (bas de page)-->
<footer>
<p align="center"><font color="#FFFFFF"><strong><u>Contacts</u></strong></font></p>
<p align="center"><font color="#FFFFFF"><a href="mailto:contact@phoen.org">contact@phoen.org</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://github.com/phoenorg">Github</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://mastodon.social/@phoen">Mastodon</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://www.facebook.com/profile.php?id=100090404687359">Facebook</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://twitter.com/phoenorg">Twitter</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://www.instagram.com/phoenorg/">Instagram</a></font></p>
</footer>

</div>
<!-- Ajout du script pour le diaporama aléatoire -->
<script src="background.js"></script>

</body></html>








