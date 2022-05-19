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
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
   <?php require_once 'navigation.php' ?>
   <?php require_once 'carousel.php' ?>
  
        <main class="py-5">
            <div class="container">
                <!-- <div>
                    Title !
                    <a href="" title=""></a>
                </div> -->


                <!-- beginning card -->

                <div class="row ">
                    <div class="card-container col-12 col-lg-6 pb-5">


                        <article class="">
                            <a href="/" title="My coffee shop " class="text-dark text-decoration-none">
                                <img src="img/3coffee.png" alt="card img " class="w-100 rounded">
                                <h1 class="pt-2">My Coffee</h1>
                            </a>
                            <p class="text-dark card-text">Description Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae saepe minus quos fugit inventore quisquam nulla possimus at dignissimos. Enim quo, doloribus saepe reprehenderit minus libero porro! Nesciunt, amet magni.
                            </p>
                            <p class="py-2 card-text">Recette Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt necessitatibus repellendus dolores laudantium error. Reprehenderit perspiciatis voluptatem cumque corrupti nostrum voluptates illo nam nesciunt vitae, iste maiores voluptas, adipisci neque. 
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <a href="" title="" class="badge rounded-pill bg-primary text-decoration-none">hello
                                </a>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <a href="/edit/coffee?id=<?php echo $coffee->getId(); ?>" title="" class="badge rounded-pill bg-primary text-decoration-none">edit
                                </a>
                            </div>
                            <div>
                                <a href="">hello2</a>
                            <a href="/edit/coffee?id=<?php echo $coffee->getId(); ?>" class="btn btn-outline-secondary">
                                Edit
                            </a>
                            </div>


                     
                            </div>
                        </article>

                    </div>


                </div>

                          <!-- end card -->

            </div>
        </main>

    </nav>
</body>

</html>