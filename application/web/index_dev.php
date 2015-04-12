<?php
require_once('../bootstrap.php');
require_once('../MiniBlogApplication.php');

$app = new MiniBlogApplication(true);
$app->run();
