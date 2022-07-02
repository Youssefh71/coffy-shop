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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
  </head>

  <body>


    <div class="color-block">
      <?php require_once 'navigation-color.php' ?>
    </div>


    <div class="row justify-content-center my-3 pt-5">

      <div class="col-6  text-center opacity-75">

        <img src="<?php echo $listCoffee->getImage(); ?>" alt="">


      </div>
      <div class="col-6 w-25 back">


        <form action="" method="post" enctype="multipart/form-data" class=" best w-70 mx-auto">



          <div class="form-group pt-5">
            <label for="formGroupExampleInput" class="mb-3">Name</label>
            <input type="text" class="form-control edit-input mb-3" id="formGroupExampleInput" id="name" name="name" value="<?php echo $listCoffee->getName(); ?>">
          </div>

          <div class="form-floating mb-3">
            <p>Description</p>
            <textarea class="form-control edit-input" placeholder="Contenu" id="floatingTextarea2" style="height: 100px" name="description"><?php echo $listCoffee->getDescription(); ?>"</textarea>
            <label for="floatingTextarea2"></label>
          </div>

          <div class="categorie mb-3 ">
            <p>Recettes</p>
            <textarea type="text" class="form-control  edit-input mb-3" id="formGroupExampleInput" id="recettes" name="recettes"><?php echo $listCoffee->getRecette(); ?></textarea>

          </div>


          <div class="image">
            <p>Image</p>
            <div>
              <input type="text" name="image" class="form-control-file edit-input mb-3" id="image" value="<?php echo $listCoffee->getImage(); ?>">
              
            </div>
          </div>

          <div class="categorie mb-3">
            <p>Price</p>
          </div>

          <div class="row">
            <div class="col-8">
            <input type="text" name="price" class="form-control-file edit-input mb-3" id="price" value="<?php echo $listCoffee->getPrice(); ?>">
          </div>

          <div class="col-3">
            <button type="submit" class="btn" id="modify">Modify</button>
          </div>
            
          </div>

        
        </form>

      </div>

    </div>

    <div class="mt-5 pt-5">

      <?php require_once 'footer.php' ?>
    </div>

  </body>

</html>