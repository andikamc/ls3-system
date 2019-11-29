<?php
namespace AndikaMC\LS3System\LS3Application\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Installer
{
    public function index()
    {
        return view("System/Installer");
    }
}