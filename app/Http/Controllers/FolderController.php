<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function showCreateForm(Request $request)
    {
        return view('folders/create');
    }
}
