<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncodeUrlRequest;
use Illuminate\Http\RedirectResponse;

class EncodeUrlController extends Controller
{
    public function __invoke(EncodeUrlRequest $request): RedirectResponse
    {
        return redirect()->back();
    }
}

