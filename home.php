<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>orlando-constantin - projects</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="css1.css">
  </head>
  <body>
    <div class="container-fluid mt-5 pb-5 sh">
      <div class="">
      <div class="row justify-content-center  ">
        <div class="col-12 col-sm-12 col-md-12 rbgc">

            <h1 class="p-3">orlando-constantin - projects</h1>

        </div>
      </div>

<?php

include 'list.php'; # this is the array containing all the informations about projects


foreach ($list as $name => $attr) {
  $techs = "";
  foreach ($attr['techs'] as $value) {
    $techs .= "<li>$value</li>";
  }

$lista =<<<LISTA

  <div class="row justify-content-center">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 rbgc">

        <img class="mw-100 p-1" src="images/$attr[image]" alt="$name">

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 rbgc">
      <h2>$name</h2>
      <h4>$attr[description]</h4>
      <ul>
        $techs
      </ul>
      <div class="row justify-content-start pt-1">
        <div class="col-6 col-lg-6 ">
          <a href="$attr[address]" target="_blank" class="btn btn-info btn-block bcl" role="button">visit the site</a><br>
        </div>
        <div class="col-6 col-lg-6 ">
          <!--<a href="$attr[codeAddress]" target="_blank" class="btn btn-info btn-block bcl" role="button">read the code</a><br>-->
        </div>
      </div>
  </div>
  </div>
LISTA;
    echo $lista;
}
?>

    </div>
  </body>
</html>
