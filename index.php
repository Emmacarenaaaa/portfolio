<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Développeur - Emma Ducos Martin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a href="#" class="logo"><span class="star-light">✦</span> Emma D.M</a>
        <div class="nav-links">
            <a href="#about">À propos</a>
            <a href="#resume">CV</a>
            <a href="#work">Projets</a>
            <a href="veille.php">Veille</a>
            <a href="mailto:ducosmartinemma@gmail.com" class="btn-contact">Me contacter</a>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-text-bg">
            PORTFOLIO<br>
            PORTFOLIO<br>
            PORTFOLIO
        </div>

        <div class="hero-content">
            <div class="hero-left">
                <p>Développeuse d'applications en formation. Passionnée par la technologie autant que par la créativité,
                    j'allie rigueur, technique et sens artistique dans mes projets.</p>
            </div>

        </div>

        <div class="scroll-down">
            Scroll<br>down
        </div>
    </header>

    <main class="index-container">
        <div class="left-column" id="about">

            <div class="intro-text">
                <h1 style="font-size: 4.5rem;">Hey,<br>je suis Emma !</h1>
                <p>Actuellement en deuxième année de <strong>BTS SIO option SLAM</strong> au Lycée Benjamin Franklin
                    d'Orléans, j'ai d'abord exploré les Humanités, la Littérature et les Arts Plastiques, ce qui me
                    donne une approche créative de la technique.</p>
            </div>

            <section class="education-section" style="margin-top: 4rem;">
                <h2 class="section-title">Éducation</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">2023 2025</div>
                        <div class="timeline-title">BTS SIO (option SLAM)</div>
                        <div class="timeline-subtitle">Lycée Benjamin Franklin, Orléans</div>
                        <div class="timeline-desc">Développement d'applications, bases de données, gestion de projet et
                            cybersécurité.</div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-title">Lycée Jean Moulin, Langon</div>
                        <div class="timeline-subtitle">Humanités, Littérature, Philosophie & Arts Plastiques</div>
                        <div class="timeline-desc">Développement d'un sens artistique et d'une rigueur d'analyse.</div>
                    </div>
                </div>
            </section>

            <section class="accent-box" id="resume">
                <h2 class="section-title">Expérience</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-date">2026 - En cours</div>
                        <div class="timeline-title">Stagiaire Développement d'Applications</div>
                        <div class="timeline-subtitle">Labomedia</div>
                        <div class="timeline-desc">Développement d'une application multiplateforme de suivi de temps et
                            d'activités pour l'équipe interne de l'entreprise.</div>
                        <div class="tag-container">
                            <span class="tag">#Python</span>
                            <span class="tag">#Qt</span>
                        </div>
                        <a href="stage-labomedia.php"
                            style="display:inline-block; margin-top:1rem; font-weight:600; font-size:0.9rem; text-decoration:underline;">Voir
                            le détail du projet &rarr;</a>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Mai - Juin 2025</div>
                        <div class="timeline-title">Stagiaire Développement d'Applications</div>
                        <div class="timeline-subtitle">Everlite Concept, Grigny</div>
                        <div class="timeline-desc">Conception d'e-mails HTML/CSS, mise à jour du site Joomla,
                            configuration de workflows Salesforce, et migration de logiciels (CutPro).</div>
                        <div class="tag-container">
                            <span class="tag">#Salesforce</span>
                            <span class="tag">#HTML/CSS</span>
                            <span class="tag">#Joomla</span>
                        </div>
                        <a href="stage-everlite.php"
                            style="display:inline-block; margin-top:1rem; font-weight:600; font-size:0.9rem; text-decoration:underline;">Voir
                            le détail des missions &rarr;</a>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">Juillet 2025</div>
                        <div class="timeline-title">Assistante Comm. & Support Commercial</div>
                        <div class="timeline-subtitle">Everlite Concept, Grigny</div>
                        <div class="timeline-desc">Organisation de la médiathèque, mise à jour des dossiers et support
                            aux équipes.</div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-title">Création de site internet</div>
                        <div class="timeline-subtitle">mariepierre-legrand.com</div>
                        <div class="timeline-desc">Conception d'un site vitrine WordPress : personnalisation du design,
                            intégration SEO et configuration technique.</div>
                        <div class="tag-container">
                            <span class="tag">#WordPress</span>
                            <span class="tag">#SEO</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="education-section" style="margin-top: 4rem;" id="work">
                <h2 class="section-title">Expérimentations</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-title">Projets Personnels Javascript</div>
                        <div class="timeline-desc">Réalisation de petits projets interactifs, de jeux et de scripts pour
                            tester différentes technologies.</div>
                    </div>
                </div>
            </section>

        </div>

        <!-- COLONNE DROITE -->
        <div class="right-column">

            <section class="profile-card">
                <h3>Contact</h3>
                <div class="profile-info">
                    <p><i class="fas fa-map-marker-alt"></i> Orléans, France</p>
                    <p><i class="fas fa-envelope"></i> ducosmartinemma@gmail.com</p>
                </div>
            </section>

            <div class="bg-text-skills">
                RESUME<br>RESUME
            </div>

            <section class="skills-section">
                <h2 class="section-title"><span class="black-text">Compétences Techniques</span></h2>

                <div class="skills-grid">
                    <div class="skill-category">
                        <h4>Développement</h4>
                        <ul class="skill-list">
                            <li><span>Langage</span> <span>PHP, Javascript, HTML, CSS, MVC, Sublime Text, JQuery,
                                    Ajax</span></li>
                            <li><span>POO</span> <span>PHP, Java, JUnit, SonarQube, Eclipse</span></li>
                            <li><span>Frameworks</span> <span>Bootstrap, CodeIgniter</span></li>
                            <li><span>SGBDR</span> <span>MySQL, MariaDB, SQL Server</span></li>
                            <li><span>Dev. Mobile</span> <span>Android Studio, SQLite, XML</span></li>
                        </ul>
                    </div>

                    <div class="skill-category">
                        <h4>Outils et Méthodes</h4>
                        <ul class="skill-list">
                            <li><span>Cybersécurité</span> <span>Requêtes préparées, Hashage, JWT, CSRF</span></li>
                            <li><span>Tests fonction.</span> <span>Selenium IDE</span></li>
                            <li><span>CMS</span> <span>WordPress, WooCommerce</span></li>
                            <li><span>Versionnement</span> <span>Git</span></li>
                            <li><span>Gestion projet</span> <span>SCRUM, Trello</span></li>
                            <li><span>Modélisation</span> <span>Merise, UML</span></li>
                            <li><span>Documentation</span> <span>Doxygen</span></li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="bottom-section">
                <div class="bottom-block">
                    <h4>Centres d'intérêt</h4>
                    <div class="hobbies-icons" style="margin-top: 1.5rem;">
                        <div class="hobby-item">
                            <i class="fas fa-code"></i>
                            <span>Code interactif</span>
                        </div>
                        <div class="hobby-item">
                            <i class="fas fa-paint-brush"></i>
                            <span>Arts Plastiques</span>
                        </div>
                        <div class="hobby-item">
                            <i class="fas fa-book-open"></i>
                            <span>Littérature</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </main>

</body>

</html>