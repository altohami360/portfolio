<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        return [
            'all' => $request->all(),
            'host' => $request->host(),
            'query' => $request->query(),
            'method' => $request->method(),
            'json' => $request->json(),
            'path' => $request->path(),
            'header' => $request->header(),
        ];
    }
}
