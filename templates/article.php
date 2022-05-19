<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee WF3 Shop</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  
        <main class="pt-5">
            <div class="container" <?php echo $coffee->getId(); ?>>
                <div class="row pt-4">
                    <div class="col-12 col-lg-12 pb-5">
                        <h2 class="h1 text-start text-lg-center"><?php echo $coffee->getName(); ?></h2>
                        <div class="row pt-lg-2 justify-content-center">
                            <div class="col-12 col-lg-4 text start text-lg-end">
                                <p class="text-secondary m-0 fs-5 fw-bold text-center"<?php echo $coffee->getDescription(); ?></p>
                                <img src="https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-09/Starbucks_FR_Website_600x600_Espresso.jpg.webp?itok=Scy5caUd" alt="Coffee">
                                <p class="text-start"><?php echo $coffee->getRecette(); ?></p>
                                <p class="text-start mt-5"><?php echo $coffee->getPrice(); ?>€</p>
                                <button class="btn btn-success" type="button">buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</body>


</html>