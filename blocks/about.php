<?php
$sqlabout = $pdo->prepare("SELECT * FROM about");
$sqlabout -> execute();
$resabout=$sqlabout->fetch(PDO::FETCH_ASSOC);
?>

<section>

        <div class="container">
            <h1>
               <?php echo $resabout["title"]?>
            </h1>

            <div class="about d-flex  j-cont">
                <div class="leftside">
                    <img src="./admin/img/<?php echo $resabout["filename"] ?>">
                </div>
                <div class="rightside">
                    <p><?php echo $resabout["decription"]?></p>
                </div>
            </div>

        </div>

    </section>