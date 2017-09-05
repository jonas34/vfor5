<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
        $message='Index Threads';

        return $message;
    }

    public function create()
    {
        $message ='Create Threads';

        return $message;
    }

    public function show($id)
    {
        return 'This is thread with id ' .$id;
    }
}
