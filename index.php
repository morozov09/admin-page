<?php require 'blocks/head.php' ?>

<?php
$sqlheader = $pdo->prepare("SELECT * FROM header");
$sqlheader -> execute();
$resheader=$sqlheader->fetch(PDO::FETCH_ASSOC);
?>

    <section class="studio__section" style="background: url('../img/<?php echo $resheader["filename"]?>');">
        <div class="container d-flex j-cont-center a-items">
            <p><?php echo $resheader["name"]?></p>
        </div>
    </section>

    <?php require 'blocks/uslugi.php' ?>

    <?php require 'blocks/about.php' ?>

    <?php require 'blocks/footer.php' ?>



    <script src="js/script.js"></script>
</body>
</html>