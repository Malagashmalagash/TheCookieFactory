<?php

session_start();
session_destroy();
setcookie("pseudo", "", time()-3600);
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 22/04/18
 * Time: 21:35
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Cookie Factory</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Bonne journée</h1>
                <h2>Des bisous !</h2>
            </div>
        </div>
    </section>
</body>
</html>