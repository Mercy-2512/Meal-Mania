<?php
$link = mysqli_connect('localhost', 'root', '', 'mea_mania');

if (!$link) {
    die('Connection error' . mysqli_connect_error());
}
