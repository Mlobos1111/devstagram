<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request) {
        $image = $request->file('file');
        return response ()->json(['success' => $image->getClientOriginalName()]);
    }
}
