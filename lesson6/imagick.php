<?php

$image = new Imagick();

$image->readImage('img/forest_river.jpg');

$image->thumbnailImage(320, 0);

$image->writeImage('img/thumbnails/forest_river.jpg');
