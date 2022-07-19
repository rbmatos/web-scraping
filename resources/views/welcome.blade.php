<?php

$artigo = 'teste';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="#" class="card-img-top" alt="...">

<div class="card-body">

    <h5 class="card-title"><?php echo e($artigo); ?></h5>

    <p class="card-text"><?php echo e($artigo); ?></p>

    <a href="#" class="btn btn-primary">button</a>

</div>
</body>
</html>
