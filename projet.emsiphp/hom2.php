<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FashionShop - Découvrez notre collection tendance de vêtements pour femmes.">
    <title>Accueil - FashionShop</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<style>
    /* Styles généraux */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #faf3f5;
        color: #333;
    }

    h1, h2 {
        color: #c67ac3;
    }

    /* Barre de navigation */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #e8a0bf;
        color: white;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff;
    }

    .navbar .nav-links {
        list-style-type: none;
        display: flex;
        gap: 1.5rem;
    }

    .navbar .nav-links li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .navbar .nav-links li a:hover {
        color: #f7c4d3;
    }

    /* Section de bienvenue */
    .hero {
        text-align: center;
        padding: 6rem 2rem;
        background-image: url('fashion-background.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        position: relative;
    }

    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero p {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
    }

    .hero button {
        padding: 0.5rem 2rem;
        font-size: 1rem;
        background-color: white;
        color: #c67ac3;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .hero button:hover {
        background-color: #ffe3e3;
    }

    /* Section de produits */
    .section {
        padding: 3rem 2rem;
        text-align: center;
        background-color: #fff;
        margin: 3rem 0;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #e8a0bf;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .product-item {
        background-color: #fff;
        padding: 1rem;
        border: 1px solid #f2c2d0;
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .product-item:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
    }

    .product-item img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 1rem;
    }

    /* Footer */
    footer {
        text-align: center;
        padding: 1.5rem;
        background-color: #e8a0bf;
        color: #fff;
    }

</style>

<!-- Barre de navigation -->
<header>
    <nav class="navbar">
        <div class="logo">FashionShop</div>
        <ul class="nav-links">
            <li><a href="home.php">Accueil</a></li>
            <li><a href="#collection">Collection</a></li>
            <li><a href="#soldes">Soldes</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Se déconnecter</a></li>
        </ul>
    </nav>
</header>

<!-- Section de bienvenue -->
<section class="hero">
    <h1>Nouvelle Collection Automne 2024</h1>
    <p>Explorez les dernières tendances et trouvez votre style parfait.</p>
    <button onclick="window.location.href='#collection'">Voir la Collection</button>
</section>

<!-- Section de collection -->
<section id="collection" class="section">
    <h2>Notre Collection</h2>
    <div class="product-grid">
        <div class="product-item">
            <img src="robe-ete.jpg" alt="Robe d'Été">
            <p>Robe d'Été - 39,99€</p>
        </div>
        <div class="product-item">
            <img src="manteau-hiver.jpg" alt="Manteau Hiver">
            <p>Manteau Hiver - 99,99€</p>
        </div>
        <div class="product-item">
            <img src="jean-skinny.jpg" alt="Jean Skinny">
            <p>Jean Skinny - 49,99€</p>
        </div>
        <div class="product-item">
            <img src="pull-cachemire.jpg" alt="Pull Cachemire">
            <p>Pull en Cachemire - 79,99€</p>
        </div>
    </div>
</section>

<!-- Section soldes -->
<section id="soldes" class="section">
    <h2>Soldes</h2>
    <p>Profitez de nos offres spéciales sur des articles sélectionnés !</p>
</section>

<!-- Section contact -->
<section id="contact" class="section">
    <h2>Contactez-nous</h2>
    <p>Besoin d'aide ? Nous sommes là pour vous.</p>
</section>

<footer>
    <p>&copy; 2024 FashionShop | Tous droits réservés</p>
</footer>

</body>
</html>