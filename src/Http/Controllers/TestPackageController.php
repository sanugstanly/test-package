<?php

namespace Sanu\TestPackage\Http\Controllers;

use Illuminate\Routing\Controller;

class TestPackageController extends Controller
{
    public function test()
    {
        return response()->json([
            'message' => "Test Message"
        ], 200);
    }
}
