<?php

use App\Controller\HomeController;
use App\Framework\Route;

return [

    new Route("/","index",HomeController::class)

];