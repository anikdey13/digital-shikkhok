<?php
session_start();
$pageTitle = "404 | Page Not Found";
ob_start();
?>



<section class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <!-- Image -->
        <img src="assets/images/element/error404-01.svg" class="h-200px h-md-400px mb-4" alt="">
        <!-- Title -->
        <h1 class="display-1 text-danger mb-0">404</h1>
        <!-- Subtitle -->
        <h2>Oh no, something went wrong!</h2>
        <!-- info -->
        <p class="mb-4">Either something went wrong or this page doesn't exist anymore.</p>
        <!-- Button -->
        <a href="index-2.html" class="btn btn-primary mb-0">Take me to Homepage</a>
      </div>
    </div>
  </div>
</section>



<?php
$content = ob_get_clean();
include('layouts/website.php');
?>