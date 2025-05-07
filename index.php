<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de Connection</title>
        <link rel="stylesheet" href="./css/main.css">
    </head>    
<body>
    <header>
        <h1>
            📜​ Formulaire de Connection
        </h1>
        
    </header>
    <main>
        <figure>
            <section>
                <h2>
                <span aria-hidden="true">📣</span>&nbsp;
                Vos informations
                </h2>

                <ul>
        
        <?php

                include_once 'controller/controller.php';
                ?>
        </ul>
                
            </section>
        </figure>
        <fieldset>
            <legend>Formulaire de Connection</legend>
            <p>Veuillez remplir le formulaire ci-dessous pour vous connecter.</p>
            <form method="post" action="traitement.php">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" placeholder="Votre email" required><br><br>
        
        

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Votre mots de passe" required><br><br>
       
        <label for="checkbox">
            <input type="checkbox" name="checkbox" value="1"> Vous êtes un admin
        
        <button type="submit" value="Envoyer">ENVOYER</button>
    </form>
        </fieldset>
    
    </main>
    <footer>
      <strong>
        &copy; - TNX - 2025</strong>
    </footer>
</body>
</html>

