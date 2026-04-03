<x-page-layout>
    <section class="grid grid-cols-3 gap-8 mb-12">
        <div class="col-span-2 space-y-4">
            <h1 class="text-3xl leading-tight font-semibold">{{ $article->title }}</h1>
            <img class="w-full" src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }} Image">
            <h2 class="text-2xl font-semibold">{{ $article->author }}</h2>

            <div class="flex items-center gap-4">
                <div class="text-sm text-zinc-500 border border-zinc-400 rounded py-1 px-2">
                    Published at: {{ $article->created_at->format('M d, Y') }}
                </div>

                <div class="text-sm text-zinc-500 border border-zinc-400 rounded py-1 px-2">
                    Updated at: {{ $article->updated_at->format('M d, Y') }}
                </div>
            </div>
            <div class="text-xl font-medium space-y-4">{!! $article->description !!}</div>
        </div>

        <section class="space-y-8 h-screen sticky top-4 overflow-hidden">
            <h3 class="mb-4 text-2xl font-semibold">Latest News</h3>

            @foreach ($articles as $article)
                <a href="{{ route('article', $article->slug) }}" class="flex gap-4">
                    <img class="h-30" src="{{ asset(Storage::url($article->image)) }}"
                        alt="{{ $article->title }} Image">
                    <div>
                        <h2 class="text-xl leading-tight font-semibold line-clamp-2 mb-2">
                            {{ $article->title }}
                        </h2>
                        <div class="text-md line-clamp-1 font-medium mb-2">{!! $article->description !!}</div>
                        <span class="text-md">{{ $article->created_at->diffForHumans() }}</span>
                    </div>
                </a>
            @endforeach
        </section>
    </section>
</x-page-layout>
