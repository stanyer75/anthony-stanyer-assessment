<x-layout>
    <div class="flex items-center justify-center py-12 bg-gray-100">
        <h1 class="text-center text-3xl font-semibold text-gray-800">
            Minify Your Url
        </h1>
    </div>

    <div class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-lg">
        <form action="/encode" method="POST">
            @csrf
            <div class="mb-6">
                <label for="url" class="block text-gray-700 text-sm font-medium">Url to minify: (please include http or https)</label>
                <input type="text"
                        name="url"
                        class="mt-2 w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="https://url.com"
                >

                @error('url')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Minify</button>
        </form>

        @if (session('shortenedUrl'))
            <div class="mt-6 text-center">
                <p>URL successfully shortened to:
                    <a href="/decode/{{ session('shortenedUrl') }}" class="text-blue-600 hover:underline" target="_blank">
                        127.0.0.1:8000/{{ session('shortenedUrl') }}
                    </a>
                </p>
            </div>
        @endif

    </div>
</x-layout>
