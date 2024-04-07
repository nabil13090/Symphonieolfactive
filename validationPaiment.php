<?php ob_start() ?>

<section class="text-center pt-4 mb-5">
    <h3 class=" mb-5 ">VALIDATION DE TRANSACTION</h3>
    <div class="chargement position-relative mt-4" style="min-width: 600px; min-height:600px;">
    </div>
    <img src="/assets/images/visa.png" alt="visa" class="vis position-absolute " style="min-width: 150px; min-height:150px;">
    <h4 class=" val position-absolute text-danger "><strong> TRANSACTION EN COURS.......</br> AVEC VOTRE BANQUE</strong></h4>
</section>


<?php
$title = "Transaction";
$img = "assets/background/transaction.jpg";
$titre = "";
$content = ob_get_clean();
?>

<?php require "template.php"; ?>