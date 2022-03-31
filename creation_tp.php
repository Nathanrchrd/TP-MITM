
<html>
    <head>
        <meta charset="utf-8">
        <title>creation-TP</title>
        <link rel="stylesheet" href="Styles/styles.css" type="text/css" />
        <?php
           session_set_cookie_params(1);
           session_start();
        ?>
    </head>

    <body>
            
            if (isset($_POST["nombreutilisateurs"])){
                $nombre_util= htmlspecialchars($_POST["nombreutilisateurs"]);
                echo '
                <div class=alignement_au_centre>
                    <form method="POST">';
                for($i=1;$i<=$nombre_util;$i++){
                    echo"
                        <input name='nom_utilisateur".$i."' value='Nom utilisateur' class='alignement_input' required>

                        </br>
                    ";
                }
                echo"
                        <input type='submit' value='Valider' class='BoutonValidation' >
                </div>";
                
            }

                
            ?>
    </div>

</html>
