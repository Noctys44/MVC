<?php

$title = "Les Avis";
ob_start();
?>
<h1 class="text-center text-muted">Liste des avis de notre site</h1>

        <?php

        while($showAvis = $allAvis->fetch(PDO::FETCH_ASSOC))
        {
            echo "Votre message : " . $showAvis['message'] . "<br>";
            echo "Date du message : " . $showAvis['date_avis'] . "<br>";
            echo "Note attribuée : " . $showAvis['note'] . "<br>";
        }


        ?>

    </div>

<?php

$content = ob_get_clean();
require_once('base.php');
?>