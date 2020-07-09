<?php
    $bd = connexionPDO();
?>

<footer class="page-footer font-small stylish-color-dark pt-4">

  <div class="container text-center text-md-left">

    <div class="row">

      <div class="col-md-4 mx-auto">

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>


      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 mx-auto">

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Les catégories</h5>

        <ul class="list-unstyled">
            <?php if (isset($categories)) :?>
                <?php for ($i=0 ; $i<COUNT($categories); $i++) : ?>
                    <li>
                        <a href="#!"><?= ucwords(strtolower($categories[$i]['nom'])) ?></a>
                    </li>
                <?php endfor ;?>
            <?php endif ;?>
          
         
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none ">

      <div class="col-md-2 mx-auto">


        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Divers</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Connexion</a>
          </li>
          <li>
            <a href="#!">Inscription</a>
          </li>
          <li>
            <a href="#!">Mon compte</a>
          </li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

    </div>

  </div>

<!-- SI PAS CONNECTER  -->
<?php if (!isset($_SESSION['id'])) : ?>
  <hr>

  <ul class="list-unstyled list-inline text-center py-2">
   
    <li class="list-inline-item">
      <a href="inscription.php" class="btn btn-danger btn-rounded">S'enregistrer</a>
    </li>
  </ul>
  <hr>
<?php else : ?>
    <hr>
    <ul class="list-unstyled list-inline text-center py-2">
   
   <li class="list-inline-item">
     <a href="#!" class="btn btn-danger btn-rounded">Se deconnecter</a>
   </li>
 </ul>
  <hr>
<?php endif ;?>
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="icon-facebook-circled"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="icon-twitter-circled"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="icon-linkedin-circled"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="icon-google-plus-circle"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="icon-dribbble-circled"> </i>
      </a>
    </li>
  </ul>

  <div class="footer-copyright text-center py-3">
    <p> © 2020 Copyright: Martin B. , Céline E-L.</p>
  </div>


</footer>