<?php

use App\HelloWorld;

    $model = new HelloWorld();

    $hello = $model -> getString();
?>

<h1>{{ $hello }}</h1>