<div class="flex flex-col mb-4 w-full sm:w-1/2 lg:w-1/3 sm:pr-4">
    {{-- <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p> --}}

    
    {{-- <a
        class="text-3xl mt-0 font-serif"
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
    >{{ $post->title }}</a> --}}
    
    <h2 class="text-dark-teal">{{$post->title }}</h2>
    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    {{-- <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a> --}}
</div>
