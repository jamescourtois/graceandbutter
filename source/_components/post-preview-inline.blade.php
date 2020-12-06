<div class="flex flex-col mb-4 w-1/2 lg:w-1/3 md:pr-4">
    {{-- <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p> --}}

    
    <a
        class="text-3xl mt-0 font-serif"
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
    >{{ $post->title }}</a>
    

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    {{-- <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a> --}}
</div>
