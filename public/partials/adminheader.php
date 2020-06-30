<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="vendor/particles.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Lzzzzz</title>
</head>
<body>
<!-- example 2 - using auto margins -->
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <img class="navbar-brand" src="img/logo.png" alt="logo">
    <button class="navbar-toggler right-nav-item" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item <?php if ($currentpage=="downloads") echo 'active'?>">
                <a class="nav-link" href="/">Downloads</a>
            </li>
            <li class="nav-item <?php if ($currentpage=="smal") echo 'active'?>">
                <a class="nav-link" href="/smal">SMAL</a>
            </li>
            <li class="nav-item <?php if ($currentpage=="media") echo 'active'?>">
                <a class="nav-link" href="/media">Media</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/add_download">Add download</a>
                <a class="dropdown-item" href="/add_smal">Add smal</a>
                <a class="dropdown-item" href="/add_media">Add media</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link right-nav-item" href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>