---
title: Food
description: Food by Mandi Lee
pagination:
    collection: food
    perPage: 99
---
@extends('_layouts.master')

@section('body')
    <div class="container mx-auto px-4 pt-8 pb-16">
        <h1>Food</h1>
        <p>It's simple. You tell me what you're craving and I make it. Delivery and pick-up can be arranged per order. Just fill out the contact form at the bottom of this page and let me know what I can do for you!</p>
        <hr class="border-b my-6">
    
        <div class="flex flex-wrap">
            @foreach ($pagination->items as $post)
                @include('_components.post-preview-inline')
            @endforeach
        </div>
    
        @if ($pagination->pages->count() > 1)
            <nav class="flex text-base my-8">
                @if ($previous = $pagination->previous)
                    <a
                        href="{{ $previous }}"
                        title="Previous Page"
                        class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                    >&LeftArrow;</a>
                @endif
    
                @foreach ($pagination->pages as $pageNumber => $path)
                    <a
                        href="{{ $path }}"
                        title="Go to Page {{ $pageNumber }}"
                        class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                    >{{ $pageNumber }}</a>
                @endforeach
    
                @if ($next = $pagination->next)
                    <a
                        href="{{ $next }}"
                        title="Next Page"
                        class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                    >&RightArrow;</a>
                @endif
            </nav>
        @endif
    </div>
@stop
