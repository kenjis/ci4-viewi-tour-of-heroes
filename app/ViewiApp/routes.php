<?php

use Components\Views\HeroDetail\HeroDetail;
use Components\Views\Heroes\Heroes;
use Components\Views\Home\HomePage;
use Viewi\Routing\Route as ViewiRoute;

ViewiRoute::get('/', HomePage::class);
ViewiRoute::get('/heroes', Heroes::class);
ViewiRoute::get('/detail/{id}', HeroDetail::class);
