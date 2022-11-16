<?php

$title = "Les Users";
ob_start();
?>
    <div class="container">
        <h1 class="text-center text-muted">Liste des User de notre site</h1>

        <?php

        while($showUser = $allUser->fetch(PDO::FETCH_ASSOC))
        {
            echo "Votre nom : " . $showUser['nom'] . "<br>";
            echo "Votre prénom : " . $showUser['prenom'] . "<br>";
            echo "Votre numéro de téléphone : " . $showUser['tel'] . "<br>";
            echo "Votre email : " . $showUser['email'] . "<br>";
        }

        ?>

    </div>

<?php

$content = ob_get_clean();
require_once('base.php');
?>