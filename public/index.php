<?php

//ใช้ HTTP Message สำหรับการทำ Request และ Response ใน Framework ของ SlimFramework
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//use data or message via Autoload.php
require '../vendor/autoload.php';

//Setup Database
require '../src/config/db.php';

//Task Routes
require '../src/routes/tasks.php';

$app->run();
