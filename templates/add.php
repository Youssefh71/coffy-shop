<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">

<form action="" method="post" enctype="multipart/form-data" class="w-70 mx-auto">
    
   

<div class="form-group">
  <label for="formGroupExampleInput">Name</label>
  <input type="text" class="form-control mb-3" id="formGroupExampleInput" id="" name="">
</div>

<div class="form-floating mb-3">
    <p>Description</p>
    <textarea class="form-control" placeholder="Contenu" id="floatingTextarea2" style="height: 300px" name="content"></textarea>
    <label for="floatingTextarea2"></label>
    </div>

<div class="row">
<div class="image col-lg-6">
  <p>Image</p>
  <div>
      <input type="file" name="cover" class="form-control-file mb-3" id="exampleFormControlFile1">
    </div>
    <p>L'image ne doit pas dépasser les 1Mo.</p>
</div>

<div class="categorie mb-3 col-lg-6">
  <p>Recettes</p>       
    <select class="form-select " aria-label="Default select example" name="category">  
    <option selected>Choisir une recette</option>

    

        <option value="">
       
        </option>
        
        
    </select>
</div>
</div>
<button type="" class="btn btn-warning">Enregistrer l'article</button>
</form>

</div> 
</body>
</html>