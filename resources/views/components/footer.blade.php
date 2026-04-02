<footer class="bg-black text-white/80 mt-12 py-12">
    <div class="max-w-300 mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 px-4">
        <div>
            <a href="/">
                <h2 class="text-2xl font-semibold text-white mb-3">
                    The News Post
                </h2>
            </a>
            <p class="text-md leading-relaxed">
                Delivering the latest news, insights, and stories from around the world.
            </p>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">About Us</h3>
            <p class="text-md leading-relaxed">
                We are a digital news platform focused on bringing accurate, timely, and engaging stories to our
                readers.
            </p>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">Categories</h3>
            <div class="flex flex-wrap gap-x-4 gap-y-2 text-md max-w-xs">
                @foreach ($categories as $category)
                    <a href="" class="hover:text-white transition">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">Info</h3>
            <p class="text-md leading-relaxed max-w-xs">
                {{ now()->format('l, M d, Y') }}
            </p>
            <p>
                &copy; {{ date('Y') }} The News Post
            </p>
        </div>

    </div>
</footer>
