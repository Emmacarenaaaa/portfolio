<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <meta name="description" content="Portfolio personnel moderne et esthétique.">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f172a;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --accent-primary: #8b5cf6;
            --accent-secondary: #3b82f6;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 15% 50%, rgba(139, 92, 246, 0.12), transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(59, 130, 246, 0.12), transparent 25%);
            background-attachment: fixed;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--glass-border);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-main);
            text-decoration: none;
            font-weight: 400;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: var(--accent-primary);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 1rem;
            margin-top: 60px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .highlight {
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: var(--text-muted);
            max-width: 600px;
            margin-bottom: 2.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            color: white;
            box-shadow: 0 4px 20px rgba(139, 92, 246, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(139, 92, 246, 0.5);
        }

        /* Generic Section Section */
        section {
            padding: 6rem 5%;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.5rem);
            margin-bottom: 4rem;
            text-align: center;
            font-weight: 800;
        }

        /* Cards Layout */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 2.5rem;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-primary), var(--accent-secondary));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.15);
            background: rgba(255, 255, 255, 0.05);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        .card p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Contact Section */
        .contact-box {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 4rem 2rem;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-box p {
            color: var(--text-muted);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            border-top: 1px solid var(--glass-border);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none; /* Hide for simplicity on mobile in a template */
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">Portfolio.</div>
        <ul class="nav-links">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main class="hero" id="accueil">
        <h1>Créons des expériences <br><span class="highlight">inoubliables.</span></h1>
        <p>Je suis un développeur passionné par le web design, l'innovation et la création d'interfaces modernes, fluides et élégantes.</p>
        <a href="#projets" class="btn btn-primary">Découvrir mon travail</a>
    </main>

    <section id="projets">
        <h2 class="section-title">Mes Projets Récents</h2>
        <div class="grid">
            <div class="card">
                <h3>Application E-commerce</h3>
                <p>Une plateforme de vente en ligne complète, développée avec des technologies modernes. Interface utilisateur en glassmorphism, panier dynamique et paiement sécurisé.</p>
            </div>
            <div class="card">
                <h3>Dashboard Analytique</h3>
                <p>Tableau de bord interactif permettant de visualiser des données complexes en temps réel. Graphiques fluides, design sombre et minimaliste pour une lisibilité optimale.</p>
            </div>
            <div class="card">
                <h3>Réseau Social d'Entreprise</h3>
                <p>Espace d'échange interne conçu pour favoriser la collaboration. Messagerie instantanée, partage de fichiers et profils utilisateurs personnalisables.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-box">
            <h2 class="section-title" style="margin-bottom: 1.5rem;">Travaillons ensemble</h2>
            <p>Vous avez un projet en tête ou vous souhaitez simplement échanger ? Je suis actuellement ouvert aux nouvelles opportunités.</p>
            <a href="mailto:contact@exemple.com" class="btn btn-primary">Me contacter</a>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Portfolio. Conçu avec passion.</p>
    </footer>

</body>
</html>
