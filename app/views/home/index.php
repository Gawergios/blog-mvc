<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/all.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- store -->
    <section id="store" class="store py-5">
        <div class="container">
            <!-- store  items-->
            <div class="row" class="store-items" id="store-items">
                <!-- single item -->
                <?php foreach ($d as $data) : ?>
                    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                        <div class="card ">
                            <div class="img-container">
                                <a href="details/<?= $data['id']; ?> "><img src="/front/img/<?= $data['img']; ?>" class="card-img-top store-img" alt=""></a>
                                <span class="store-item-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="card-text d-flex justify-content-between text-capitalize">
                                    <h5 id="store-item-name"><?= $data['title']; ?></h5>
                                    <h5 class="store-item-value"><?= $data['artical'] ?><strong id="store-item-price" class="font-weight-bold">stars</strong></h5>
                                </div>
                            </div>
                        </div>
                        <!-- end of card-->
                    </div>
                <?php endforeach; ?>
                <!-- end of card-->
            </div>
        </div>
    </section>

    <script src="/front/js/jquery-3.6.1.min.js"></script>
    <script src="/front/js/bootstrap.bundle.min.js"></script>
</body>

</html>