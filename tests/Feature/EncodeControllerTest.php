<?php

use App\Http\Controllers\EncodeUrlController;
use App\Http\Requests\EncodeUrlRequest;
use App\Models\Url;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\RedirectResponse;

it('makes the minified url', function () {
    $urlToShorten = 'https://example.com';

    $request = EncodeUrlRequest::create('/encode', 'POST', ['url' => $urlToShorten]);

    $controller = new EncodeUrlController();
    $response = $controller->__invoke($request);

    $this->assertInstanceOf(RedirectResponse::class, $response);

    $shortenedUrl = session('shortenedUrl');

    $this->assertNotEmpty($shortenedUrl);

    $this->assertDatabaseHas('urls', [
        'longUrl' => $urlToShorten,
        'shortUrl' => $shortenedUrl
    ]);
    
    $url = Url::where('longUrl', $urlToShorten)->first();
    $this->assertEquals($shortenedUrl, Hashids::encode($url->id));
});
