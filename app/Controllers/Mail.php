<?php

namespace App\Controllers;

class Mail extends BaseController
{
    public function index()
    {
        return view('Mail/send');
    }
}
