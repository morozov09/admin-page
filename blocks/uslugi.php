<?php
$sqluslugi = $pdo->prepare("SELECT * FROM uslugi");
$sqluslugi -> execute();
$resuslugi=$sqluslugi->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="items__section">
        <div class="container-items">
            <h1>Наши услуги</h1>
            <div class="service__items-wrapper d-flex a-items j-cont">


            <?php foreach($resuslugi as $resusluga): ?>

                <div class="service__item">
                    <img src="./admin/img/<?php echo $resusluga["filename"]?>">
                    <h2><?php echo $resusluga["title"]?></h2>
                    <h4>от <?php echo $resusluga["price"]?></h4>
                </div>

            <?php endforeach ?>
                

            </div>
        </div>
    </section>