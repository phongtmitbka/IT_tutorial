<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test ()
    {
        $data = ['name' => 'To Minh Phong', 'company' => 'Sotatek', 'University' => 'Bach Khoa'];

        return response()->json($data);
    }

    public function testPost(Request $request)
    {
        $data = ['name' => 'To Minh Phong', 'company' => 'Sotatek', 'University' => 'Bach Khoa'];

        return response()->json($data);
    }
}
