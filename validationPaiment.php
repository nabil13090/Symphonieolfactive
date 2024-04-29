<?php session_start();
ob_start() ?>
<section class=" text-center mb-5  ">
    <picture>
        <img src="/assets/images/encours-maintenance.png" alt="maintenace en cour">
    </picture>
</section>
<!-- <section class="text-center pt-4 mb-5">
    <h3 class=" mb-5 text-bg-success ">VOTRE PAIMENT A ETE VALIDE</h3>
    <div class=" d-flex justify-content-around mb-5 ">
        <img src="/assets/images/feu.gif" height="100px" alt="">
        <h4 class="mb-4 align-items-center display-5  ">MERCI POUR VOTRE ACHAT</h4>
        <img src="/assets/images/feu.gif" height="100px" alt="">
    </div>
    <div class="container  px-4 py-5  border border-black rounded rounded mb-5 ">
        <h3>VOTRE NUMERO DE COMMANDE : <?php echo rand(); ?> </h3>
        <span class=" display-6  ">Vous pouvez venir recupérée votre commande en magasin</span>
        <h4>Avec votre numero de commande</h4>
        <h4>A PARTIR DE : <?php echo date("d-m", strtotime("+2 day")); ?> </h4>
    </div>
    <div class="d-flex justify-content-around">
        <div class=" flex-column  col-4">
            <h3 class="mb-1 mt-3">Symphonie Olfactive</h3>
            <address>
                7 cours Mirabeau<br>
                13100 Aix en Provence
            </address>
        </div>
        <div class=" flex-column  col-4">
            <h3 class=" mt-4 mb-1 ">Téléphone</h3>
            <address>
                <a href="tel:+33559478418" class="text-black text-decoration-none ">06 95 80 08 18</a>
            </address>
        </div>
        <div class=" flex-column  col-4">
            <h3 class=" mt-4 mb-1">Horaires</h3>
            <p>
                Du lundi au vendredi<br>
                de 8h à 14h, de 16h à 21h<br>
                Le samedi<br>
                de 10h à 13h
            </p>
        </div>
    </div>
</section> -->
<?php
$title = "Transaction";
$img = "assets/background/transaction.jpg";
$titre = "";
$content = ob_get_clean();
?>
<?php require "template.php"; ?>