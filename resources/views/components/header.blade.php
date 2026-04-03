<header class="border-b border-black max-w-300 mx-auto pb-3 mb-12">
    <a href="/">
        <h1 class="text-5xl text-center mt-6 mb-1 font-semibold">The News Post</h1>
    </a>
    <p class="text-center mb-8 font-medium text-lg">
        {{ now()->format('l, M d, Y') }}
    </p>

    <nav class="flex items-center justify-center gap-10 text-lg font-medium">
        @foreach ($categories as $category)
            <a href="">{{ $category->name }}</a>
        @endforeach
    </nav>
</header>
