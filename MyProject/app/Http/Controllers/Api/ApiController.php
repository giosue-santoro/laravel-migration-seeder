<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Painting;

class ApiController extends Controller
{
    public function getFirstPainting()
    {
        $firstPainting = Painting::orderBy('id', 'desc')->last();

        return response()->json($firstPainting->toArray());
    }
}
