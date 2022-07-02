<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coffee Wf3 shop</title>
        <!-- CSS Bootstrap only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/footer.css">
        <script src="../js/script.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </head>

    <body>
        <div class="color-block">
            <?php require_once 'navigation-color.php' ?>

        </div>
        <div class="isset w-25 mx-auto pt-5" id="suppression" >
            <?php if (isset($_GET['delete']) && $_GET['delete']) : ?>
                <div class="alert alert-success">
                La suppression à bien été effectuée
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['edit']) && $_GET['edit']) : ?>
                <div class="alert alert-success mt-5">
                    L'édition à bien été effectuée
                </div>
            <?php endif; ?>

        </div>
        
        <main class="py-5">

            <div class="container ">

                <!-- Product cards' block -->

                <div class="row">

                    <?php foreach ($listCoffee as $coffee) : ?>

                        <?php $colorCode = ['#d6eaf8', '#fdf2e9', '#fdebd0', '#eafaf1']; ?>

                        <div class="col-lg-6 card ">
                            <div class="col d-flex justify-content-center">
                                <img src="<?php echo $coffee->getImage(); ?>" alt="<?php echo $coffee->getName(); ?>" class="card-img-top card-img">
                            </div>
                            <div style="background-color: <?php echo $colorCode[rand(0, count($colorCode) - 1)] ?>;" class="card-body ">
                                <a href="/article/?id=<?php echo $coffee->getId(); ?>" class="card-redirect">
                                    <div class="card-body-content">
                                        <h5 class="card-title text-center"><?php echo $coffee->getName(); ?></h5>
                                        <p class="card-text text-center"><?php echo $coffee->getPrice(); ?> &euro;</p>
                                        <!-- <a href="#" class="btn btn-primary ">Go somewhere</a> -->

                                    </div>

                                <?php if( isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'ROLE_ADMIN'): ?> <div class="row card-body-icons">

                                        <div class="col">

                                            <a href="/delete/coffee?id=<?php echo $coffee->getId(); ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash3 icon" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </a>

                                        </div>

                                        <div class="col">

                                            <a href="/edit/coffee?id=<?php echo $coffee->getId(); ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil icon" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg>
                                            </a>

                                        </div>

                                    </div>
                                    <?php endif; ?>

                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </main>

        <div class="mt-5 pt-5">

            <?php require_once 'footer.php' ?>
        </div>

    </body>

</html>