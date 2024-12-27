<?php

use App\Http\Controllers\DecodeUrlController;
use App\Http\Controllers\EncodeUrlController;
use App\Http\Requests\EncodeUrlRequest;
use Illuminate\Http\RedirectResponse;

it('decodes the minified url', function () {
    $urlToShorten = 'https://www.google.com';

    $request = EncodeUrlRequest::create('/encode', 'POST', ['url' => $urlToShorten]);

    $encodeController = new EncodeUrlController();
    $encodeController->__invoke($request);

    $shortenedUrl = session('shortenedUrl');

    $this->assertNotEmpty($shortenedUrl);

    $decodeController = new DecodeUrlController();
    $response = $decodeController->__invoke($shortenedUrl);

    $this->assertInstanceOf(RedirectResponse::class, $response);

    $this->assertEquals($urlToShorten, $response->getTargetUrl());
});
