<?php


if(empty($_COOKIE['pseudo'])) // Si le formulaire a été envoyé...
{
    header("Location: login.php"); // Et on actualise la page !
}

session_start();

if (empty($_SESSION['chocolateCookie'])) {
    $_SESSION['chocolateCookie'] = 0;
}
if (empty($_SESSION['pecanNuts'])) {
    $_SESSION['pecanNuts'] = 0;
}
if (empty($_SESSION['chocolateChips'])) {
    $_SESSION['chocolateChips'] = 0;
}
if (empty ($_SESSION['M&MS'])) {
    $_SESSION['M&MS'] = 0;
}

if (isset($_GET['add_to_cart'])) {
    if ($_GET['add_to_cart'] === '58') {
        $_SESSION['chocolateCookie'] = $_SESSION['chocolateCookie'] + 1;
    } elseif ($_GET['add_to_cart'] === '46') {
        $_SESSION['pecanNuts'] =  $_SESSION['pecanNuts'] + 1;
    } elseif ($_GET['add_to_cart'] === '36') {
        $_SESSION['chocolateChips'] = $_SESSION['chocolateChips'] + 1;
    } elseif ($_GET['add_to_cart'] === '32') {
        $_SESSION['M&MS'] = $_SESSION['M&MS'] +1;
    }

}
require 'inc/head.php';

?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if (!empty($_SESSION['pecanNuts'])) { echo $_SESSION['pecanNuts']; } else { echo ' - '; }  ?> )
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if (!empty($_SESSION['chocolateChips'])) { echo $_SESSION['chocolateChips']; } else { echo ' - '; }  ?> )
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if (!empty($_SESSION['chocolateCookie'])) { echo $_SESSION['chocolateCookie']; } else { echo ' - '; }  ?> )
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if (!empty($_SESSION['M&MS'])) { echo $_SESSION['M&MS']; } else { echo ' - '; }  ?> )
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
