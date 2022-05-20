<!-- Responsive (Bootstrap) Navigation Bar with CSS elemnts -->
<div class="container">
  <nav class="navbar navbar-expand-lg nav-white ">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
        <img src="../img/2.png"  alt="logo" class="img-logo">
        </a>
        <div class="row d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link menu"  href="/list">Produits</a>
            </li>
            
            <?php if( isset($_SESSION['admin']) && $_SESSION['admin']['role'] === 'ROLE_ADMIN'): ?>
            <li class="nav-item">
              <a class="nav-link menu" href="/add">Ajouter</a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link menu" href="/logout">Log out</a>
            </li>
            <?php endif; ?>

          </ul>           
        </div>

      </div>
    </div>
  </nav>
</div>
    
