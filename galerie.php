<?php
require_once('inc/bdd_conf.php');
require_once('inc/fonctions.php');
require_once('inc/header.php');
require_once('inc/menu.php');
?>
<html>

<link href="css/lightbox.css" rel="stylesheet" />

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Galerie</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug1.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug1.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug2.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug2.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug3.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug3.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug4.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug4.jpg"></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug5.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug5.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug6.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug6.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug7.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug7.jpg"></a>
                </div>
                <div class="col-md-3 portfolio-item">
                        <a class="example-image-link" href="img/aug8.jpg" data-lightbox="example-set"><img class="img-responsive img-rounded" src="img/aug8.jpg"></a>
                </div>
            </div>
        </div>

        <!-- /.container -->



    </body>
<?php require_once('inc/footer.php'); ?>
</html>
