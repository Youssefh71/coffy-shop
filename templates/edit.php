<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poste ton avis !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="w-50 mx-auto pt-5">
    <a href="/liste">Voir tous les avis</a>

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


        <table class="table mt-5">
            <thead>
                <tr>
                   
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">recette</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coffee as $coffe) : ?>
                    <tr>
                        <th scope="row"><?php echo $coffee->getId(); ?></th>
                        <td><?php echo $coffe->getName(); ?></td>
                        <td><?php echo $coffe->getDescription(); ?></td>
                        <td><?php echo $coffe->getRecette(); ?></td>
                        <td><?php echo $coffe->getImage(); ?></td>
                        <td><?php echo $coffe->getPrice(); ?></td>

                        <td>
                            <!-- http://av -->
                            <a href="/delete/coffee?id=<?php echo $coffe->getId(); ?>" class="btn btn-outline-danger">
                                Supprimer cet avis
                            </a>
                        </td>
                        <td>
                            <!-- http://av -->
                            <a href="/edit/coffee?id=<?php echo $coffe->getId(); ?>" class="btn btn-outline-secondary">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>