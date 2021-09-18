<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Coordinates
{
    function __construct($lat, $lon) {
         $this->lat = $lat;
         $this->lon = $lon;
    }
}
