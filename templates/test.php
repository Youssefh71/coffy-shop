<?php

    require_once '././src/Repository/Db.php';
    $colorCode = ['#d6eaf8', '#fdf2e9', '#fdebd0', '#eafaf1'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Coffee WF3 Shop</title>
</head>

    <body>
        
        <?php require_once 'navigation.php' ?>
            <div class="w-75 mx-auto pt-5 ">
                
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


                <table class="table table-bg-info  table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">name</th>
                            <th scope="col">description</th>
                            <th scope="col">recette</th>
                            <th scope="col">image</th>
                            <th scope="col">price</th>
                            <th>Suppression</th>
                            <th>Edition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listCoffee as $coffee) : ?>
                            <?php foreach ($colorCode as $color) : ?>
                            <tr> <?php  echo $color ?>
                                <th scope="row"><?php echo $coffee->getId(); ?></th>
                                <td><?php echo $coffee->getName(); ?></td>
                                <td><?php echo $coffee->getDescription(); ?></td>
                                <td><?php echo $coffee->getRecette(); ?></td>
                                <td><?php echo $coffee->getImage(); ?></td>
                                <td><?php echo $coffee->getPrice(); ?></td>

                                <td>
                                    <!-- http://av -->
                                    <a href="/delete/coffee?id=<?php echo $coffee->getId(); ?>" class="btn btn-outline-danger">
                                        Supprimer cet avis
                                    </a>
                                </td>
                                <td>
                                    <!-- http://av -->
                                    <a href="/edit/coffee?id=<?php echo $coffee->getId(); ?>" class="btn btn-outline-secondary">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        
    </body>

</html>