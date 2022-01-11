<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPackageController extends Controller
{
    public function test()
    {
        return response()->json([
            'message' => "Test Message"
        ], 200);
    }
}
