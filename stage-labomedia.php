<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage Labomedia - Portfolio Emma Ducos Martin</title>

    <!-- Polices Google : DM Serif Display pour l'élégance (titres), Inter pour la lisibilité (corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a href="index.php" class="logo"><span class="star-light">✦</span> Emma D.M</a>
        <div class="nav-links">
            <a href="index.php#about">À propos</a>
            <a href="index.php#resume">CV</a>
            <a href="index.php#work">Projets</a>
            <a href="veille.php">Veille Tech & Art</a>
            <a href="mailto:ducosmartinemma@gmail.com" class="btn-contact">Me contacter</a>
        </div>
    </nav>

    <header class="hero hero-subpage">
        <a href="index.php#resume" class="btn-back"><i class="fas fa-arrow-left"></i> Retour au CV</a>

        <div class="hero-text-bg">
            LABOMEDIA<br>
            LABOMEDIA<br>
            LABOMEDIA
        </div>

        <div class="hero-content hero-content-subpage">
            <h1 class="hero-title">Mon stage à Labomedia</h1>
            <p class="hero-subtitle">Développement d'une application multiplateforme de suivi de temps et d'activités pour l'équipe interne.</p>
        </div>
    </header>

    <main>
        <div class="container">
            <h2 class="section-title">Mes Missions</h2>

            <div class="mission-grid">

                <div class="mission-card">
                    <i class="fas fa-stopwatch mission-icon"></i>
                    <h3>Application de suivi de temps</h3>
                    <p>Je développe actuellement une application de suivi de temps pour l'équipe interne de Labomedia. Le principe est simple et efficace : l'utilisateur choisit son activité (par exemple "code", "réunion", "recherche") et lance un chronomètre pour mesurer avec précision le temps qu'il y consacre au cours de la journée.</p>
                </div>

                <div class="mission-card">
                    <i class="fas fa-chart-pie mission-icon"></i>
                    <h3>Analyse des données et de l'activité</h3>
                    <p>L'idée principale derrière ce tracker de temps est de pouvoir analyser par la suite comment les journées de l'équipe sont réparties. Les données récoltées permettent d'avoir une vision claire et d'optimiser la gestion de projet et l'allocation du temps en fonction des missions.</p>
                </div>

                <div class="mission-card">
                    <i class="fab fa-python mission-icon"></i>
                    <h3>Développement multiplateforme avec Python et Qt</h3>
                    <p>Le vrai challenge fonctionnel et technique de cette mission était de rendre l'outil compatible avec tous les systèmes d'exploitation utilisés par les membres de l'équipe (Windows, Mac et Linux). C'est pour cette raison que j'ai choisi de travailler et de concevoir cette interface avec le framework Qt et le langage Python.</p>
                </div>

                <div class="mission-card">
                    <i class="fas fa-server mission-icon"></i>
                    <h3>Environnement local et autonomie</h3>
                    <p>Pour assurer une parfaite réactivité et une intégration simple, l'application fonctionne en version locale. L'utilisateur est donc totalement autonome avec son propre logiciel pour créer, paramétrer et gérer lui-même ses propres projets ainsi que ses activités sans devoir dépendre d'un serveur tiers complexe.</p>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
