
<html>
    <head>
        <meta charset="utf-8">
        <title>creation-TP</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <?php
           session_set_cookie_params(1);
           session_start();
           
        ?>
    </head>

    <body>
            <div>
                <form method="POST">
                    <strong>De combien d'utilisateur avez vous besoin ?</strong>
                    <input type="number" name="nombreutilisateurs" class="demande_nom_utilisateur" id="nombre_utilisateurs" min="1" max="40" value='Nombre de participants' required></input>
                    
                </form>
            </div>
    </div>

</html>
