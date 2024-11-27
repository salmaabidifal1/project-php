<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign In Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style global pour la page */
        body {
            margin: 0;
            padding: 0;
            background: url('images/R.jpeg') no-repeat center center/cover; /* Image en arrière-plan */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        /* Conteneur principal pour le formulaire */
        .wrapper {
            background-color: rgba(255, 255, 255, 0.8); /* Fond blanc semi-transparent */
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre autour */
            width: 100%;
            max-width: 400px;
        }

        /* Titre du formulaire */
        h3 {
            text-align: center;
            color: #000; /* Noir */
            margin-bottom: 20px;
        }

        /* Conteneur des champs du formulaire */
        .form-wrapper {
            margin-bottom: 15px;
        }

        /* Label des champs */
        .form-wrapper label {
            display: block;
            font-size: 14px;
            color: #000; /* Noir */
            margin-bottom: 5px;
        }

        /* Champs de saisie */
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Bouton de connexion */
        button {
            width: 100%;
            padding: 10px;
            background-color: #DAA520; /* Couleur dorée */
            color: #000; /* Noir */
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Effet au survol */
        button:hover {
            background-color: #c69318;
        }

        /* Texte sous le bouton */
        p {
            margin-top: 15px;
            font-size: 14px;
            color: #000; /* Noir */
            text-align: center;
        }

        /* Lien sous le formulaire */
        p a {
            color: #DAA520;
            text-decoration: none;
        }

        /* Effet au survol des liens */
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h3>Sign In</h3>
            <div class="form-wrapper">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-wrapper">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit">Sign In</button>
            <p>Don't have an account? <a href="signup.php">Register here</a></p>
        </form>
    </div>
</body>
</html>
