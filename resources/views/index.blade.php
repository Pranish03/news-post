<x-page-layout>
    <section class="grid grid-cols-3 gap-8 mb-12">
        <a href="" class="col-span-2">
            <h1 class="text-3xl leading-tight font-semibold line-clamp-2 mb-2">{{ $articles[0]->title }}</h1>
            <p class="text-lg mb-4">{{ $articles[0]->created_at->diffForHumans() }}</p>
            <img class="w-full mb-4" src="{{ asset(Storage::url($articles[0]->image)) }}"
                alt="{{ $articles[0]->title }} Image">
            <div class="text-lg line-clamp-2 font-medium">{!! $articles[0]->description !!}</div>
        </a>

        <div class="space-y-8">
            <h3 class="mb-4 text-2xl font-semibold">Latest News</h3>

            @foreach ($articles->slice(1)->take(4) as $article)
                <a href="" class="flex gap-4">
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
        </div>
    </section>

    <section class="grid grid-cols-3 gap-8">
        <div class="col-span-2 space-y-8">
            @foreach ($articles->slice(5) as $article)
                <a href="" class="flex gap-4">
                    <div>
                        <h2 class="text-2xl leading-tight font-semibold line-clamp-2 mb-2">
                            {{ $article->title }}
                        </h2>
                        <div class="text-lg line-clamp-2 font-medium mb-2">{!! $article->description !!}</div>
                        <span class="text-lg">{{ $article->created_at->diffForHumans() }}</span>
                    </div>

                    <img class="h-44" src="{{ asset(Storage::url($article->image)) }}"
                        alt="{{ $article->title }} Image">
                </a>
            @endforeach
        </div>

        <div class="space-y-8">
            @foreach ($advertises as $advertise)
                <a href="{{ $advertise->redirect_link }}" target="_blank">
                    <img src="{{ asset(Storage::url($advertise->banner)) }}"
                        alt="{{ $advertise->company_name }} Image">
                </a>
            @endforeach
        </div>
    </section>
</x-page-layout>
