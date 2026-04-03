<x-page-layout>
    <section class="grid grid-cols-3 gap-8">
        <div class="col-span-2 space-y-8">
            @foreach ($category->articles as $article)
                <a href="" class="flex gap-4">
                    <div>
                        <h2 class="text-2xl leading-tight font-semibold line-clamp-2 mb-2">
                            {{ $article->title }}
                        </h2>
                        <div class="text-lg line-clamp-2 font-medium mb-2">{!! $article->description !!}</div>
                        <span class="text-lg">{{ $article->created_at->diffForHumans() }}</span>
                    </div>

                    <img class="h-44" src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }} Image">
                </a>
            @endforeach
        </div>

        <div class="space-y-8">
            @foreach ($advertises as $advertise)
                <a href="{{ $advertise->redirect_link }}" target="_blank">
                    <img src="{{ asset(Storage::url($advertise->banner)) }}" alt="{{ $advertise->company_name }} Image">
                </a>
            @endforeach
        </div>
    </section>
</x-page-layout>
