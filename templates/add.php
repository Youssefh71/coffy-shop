<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee WF3 Shop</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

    <div class="row justify-content-center my-3 ">

      <div class="col-6 w-50">


        <form action="" method="post" enctype="multipart/form-data" class="w-70 mx-auto">



          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control mb-3" id="formGroupExampleInput" id="name" name="name">
          </div>

          <div class="form-floating mb-3">
            <p>Description</p>
            <textarea class="form-control" placeholder="Contenu" id="floatingTextarea2" style="height: 300px" name="description"></textarea>
            <label for="floatingTextarea2"></label>
          </div>

          <div class="categorie mb-3 ">
            <p>Recettes</p>
            <textarea type="text" class="form-control mb-3" id="formGroupExampleInput" id="recettes" name="recettes"></textarea>

          </div>


          <div class="image">
            <p>Image</p>
            <div>
              <input type="text" name="image" class="form-control-file mb-3" id="image">
            </div>
          </div>

          <div class="categorie mb-3">
            <p>Price</p>

          </div>

          <div>
            <input type="text" name="price" class="form-control-file mb-3" id="price">
          </div>

          <button type="submit" class="btn" id="modify">Ajouter</button>
        </form>

      </div>

    </div>

    <div class="mt-5 pt-5">

      <?php require_once 'footer.php' ?>
    </div>
  </body>

</html>