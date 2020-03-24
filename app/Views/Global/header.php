<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WARRIOR PRINCESS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div id="page-container">
    <div id="content-wrap">

  <div class="container-fluid mb-2">
    <!--navbar-->
    <nav  class="navbar navbar-expand-lg navbar-light sticky-top">
      <!-- navbar logo-->
      <a class="navbar-brand" href="?">
        <div>
          <h5 class="navbar-logo-text">CA-PS.me</h5>
        </div>
        <!-- <img src="images/logocaps1.png" width="" height="80" alt=""> -->
      </a>
      <!-- navbar hamburger-->
      <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--navbar txt-->
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item text-right">
            <a class="nav-link link1" href="?">home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item text-right">
            <a class="nav-link" href="?page=posts">articles</a>
          </li>

          <li class="nav-item text-right">
            <a class="nav-link" href="?page=about-us">about us</a>
          </li>

          <li class="nav-item text-right">
              <a class="nav-link" href="?page=registration">register</a>
            </li>

          <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) { ?>
            <li class="nav-item text-right">
              <a href="?page=super-secret" class="nav-link">chat</a>
            </li>

            <li class="nav-item text-right">
              <a href="?page=log-out" class="nav-link">log out</a>
            </li>

          <?php } else { ?>
            <li class="nav-item text-right">
              <a class="nav-link" href="?page=login">log in</a>
            </li>



          <?php } ?>



        </ul>
    </nav>

  </div>
  </div>