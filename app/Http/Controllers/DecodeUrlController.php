<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Vinkla\Hashids\Facades\Hashids;

class DecodeUrlController extends Controller
{
    public function __invoke(string $url)
    {
        $decodedUrl = Hashids::decode($url);
        $longUrl = Url::find($decodedUrl[0])->longUrl;

        return redirect($longUrl);
    }
}
