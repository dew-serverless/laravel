<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function __invoke()
    {
        return view('home', [
            'running_in_fc' => (bool) getenv('FC_FUNC_CODE_PATH'),
            'environment' => [
                'loaded extensions' => collect(get_loaded_extensions())->join(', '),
                'log channel' => config('logging.default'),
                'storage path' => app()->storagePath(),
            ],
        ]);
    }
}
