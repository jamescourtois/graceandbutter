@extends('_layouts.master')

@section('body')
    <h1>Food and Desserts by Mandi Lee</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

        <p class="mb-6">Everyone had a birthday in the year of 2020. Some got creative and celebrated in safe ways, some skipped the hoopla all together, some were forced to be alone, some had to cancel plans and trips that have been in place for years. But everyone had a birthday. A reason to celebrate. A day you are here, when so many are not. All moments we are present, with the ones we love, deserve to be celebrated. Birthdays, Anniversaries, and Tuesday nights.</p>

        <p class="mb-6">I love making food for people. It surpasses love language. It feels like destiny, like ultimate fulfillment. Even when I sit down to eat lunch by myself, I set the table and plate my food. I've been baking a few years and eating baked goods a few more years than that. I looooove sweets. If it comes down to chocolate or potato chips, you better cover that chip in chocolate.</p>

        <p class="mb-6">I want to help you plan your engagement. I want to pack a picnic for you. I want to provide a dessert bar for your wedding. I want to make your family a lasagna. I want to teach you how to make scones. The possibilities are endless and we can navigate Covid-19 restrictions together.</p>

        <a href="#gabform" target="_self" class="btn mb-6">Shoot me a message</a>
    <hr>
    <h2>Food headline</h2>
    <p>Short descripion about food</p>
    <a href="/food" class="btn">See All Food</a>

    {{-- @include('_components.newsletter-signup') --}}
    <h2>Events headline</h2>
    <p>Short descripion about events</p>
    <a href="/food" class="btn">See All Events</a>

    <h2>Experiences headline</h2>
    <p>Short descripion about experiencers</p>
    <a href="/food" class="btn">See All Experiences</a>
@stop
