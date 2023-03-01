<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(){
        echo '<iframe src="https://www.educastudio.com/contact-us" style="width: 100vw; height: 100vh"></iframe>';

    }
}
