<?php // @ app/controllers/Single.php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateCustom extends Controller
{
    public function title()
    {
        return "1233456";
    }

    public function image()
    {
        return get_field("background-image");
    }

    // Get the Introtext field
    protected $acf = true;
}
