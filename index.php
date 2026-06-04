<?php
require_once 'config.php';

$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME,
    DB_USER,
    DB_PASS
);

$stmt = $pdo->query("SELECT * FROM slides");
$slides = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>WPoets Assignment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container py-5">

    <div class="row">

        <!-- Column 1 Tabs -->

        <div class="col-md-3">

            <ul class="nav flex-column nav-pills">

                <?php foreach($slides as $index=>$slide): ?>

                    <li class="nav-item">
                        <button
                            class="nav-link <?= $index==0 ? 'active' : '' ?>"
                            data-slide="<?= $index ?>">
                            <?= htmlspecialchars($slide['tab_title']) ?>
                        </button>
                    </li>

                <?php endforeach; ?>

            </ul>

        </div>

        <!-- Column 2 Slider -->

        <div class="col-md-5">

            <div class="content-slider">

                <?php foreach($slides as $slide): ?>

                <div>

                    <h3><?= $slide['slide_title'] ?></h3>

                    <p><?= $slide['slide_description'] ?></p>

                </div>

                <?php endforeach; ?>

            </div>

        </div>

        <!-- Column 3 Image Slider -->

        <div class="col-md-4">

            <div class="image-slider">

                <?php foreach($slides as $slide): ?>

                <div>

                    <img
                        src="assets/images/<?= $slide['image'] ?>"
                        class="img-fluid square-image">

                </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="assets/js/app.js"></script>

</body>
</html>
