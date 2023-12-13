<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="o.css">
   
</head>
<body>
    <header>
        <nav>
            <a href="#"><img src="capture.png" alt="" class="logo"></a>
            <ul id="nav-list">
                <li><a href="acc.php">Accueil</a></li>
                <li><a href="ut.php">Historique de gain</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Service</a></li>
            </ul>
            <img src="menu.png" alt="" class="menu" id="menu-icon">
        </nav>
    </header>
    <br>
    <br>
    <section class="text">

    <h1>rejoins moi <span class="auto-typing"></span></h1>
    <p>
    Que chaque pari soit une opportunité excitante de suivre votre intuition et de célébrer le sport que vous aimez. <br>
     Dans l'univers des paris, chaque match devient une aventure pleine de rebondissements. <br>
     Restez informé, faites confiance à votre analyse, et souvenez-vous que même dans la défaite, il y a toujours une leçon. <br> 
     Que chaque pari soit une chance de vivre pleinement la passion du sport et de goûter au plaisir de la victoire. <br>
     Bonne chance et que vos pronostics soient couronnés de succès ! 
    </p>
    <a href="cont.php">Me contacter</a> 
    <a href="biblio.php" class="cv">Bibliographie </a> 
    </section>

    <div class="overlay">

    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        let typed = new Typed('.auto-typing', {
            strings: ['pour gagner', 'pour etre meilleur', 'pour etre riche'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
            fadeOut: true,
            fadeOutClass: 'typed-fade-out',
            fadeOutDelay: 500
        })

       // Ajoutez un gestionnaire d'événements au clic sur l'icône du menu
       const menuIcon = document.getElementById('menu-icon');
        const navList = document.getElementById('nav-list');

        menuIcon.addEventListener('click', () => {
            navList.classList.toggle('hidden');
        });
    </script>
</body>
</html>