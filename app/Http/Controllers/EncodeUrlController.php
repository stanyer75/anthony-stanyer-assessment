<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncodeUrlRequest;
use App\Models\Url;
use Illuminate\Http\RedirectResponse;
use Vinkla\Hashids\Facades\Hashids;

class EncodeUrlController extends Controller
{
    public function __invoke(EncodeUrlRequest $request): RedirectResponse
    {
        $url = Url::create([
            'longUrl' => $request->url
        ]);
        
        $url->shortUrl = Hashids::encode($url->id);
        $url->save();

        return redirect()->back();
    }
}

