<x-layout>
    <div class="flex items-center justify-items-center">
        <h1 class="text-center">
            Minify Your Url
        </h1>
    </div>
    <div>
        <form action="/encode" method="POST">
            @csrf
            <label for="url"> url to minify</label>
            <input type="text" name="url" class="rounded border-black">

            <button type="submit">Minify</button>
        </form>

        @isset($shortenedUrl)
            url successfully shortened to: <a href="/decode/{{ $shortenedUrl }}">127.0.0.1:8000/{{ $shortenedUrl }}</a>
        @endisset
    </div>

</x-layout>
