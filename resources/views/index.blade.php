<x-page-layout>
    <div class="grid grid-cols-3 gap-8">
        <a href="" class="col-span-2 space-y-4">
            <h1 class="text-3xl leading-tight font-semibold line-clamp-4">{{ $latest_articles[0]->title }}</h1>
            <img class="w-full" src="{{ asset(Storage::url($latest_articles[0]->image)) }}" alt="">
            <div class="text-lg line-clamp-2 font-medium">{!! $latest_articles[0]->description !!}</div>
        </a>

        <div class="space-y-8">
            <h3 class="mb-4 text-2xl font-semibold">Latest News</h3>
            @foreach ($latest_articles as $article)
                @if ($loop->first)
                    @continue
                @endif

                <a href="" class="flex gap-4">
                    <img class="h-30" src="{{ asset(Storage::url($article->image)) }}" alt="">
                    <div>
                        <h2 class="text-xl leading-tight font-semibold line-clamp-3 mb-2">
                            {{ $article->title }}
                        </h2>
                        <div class="text-md line-clamp-1 font-medium">{!! $article->description !!}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-page-layout>
