@extends('_layouts.master')

@section('body')
    <div class="relative bg-dark-teal mb-8 text-white py-8">
        <div class="container relative z-10 mx-auto text-center flex flex-col items-center justify-center">
            <h2 class="text-white">Grace and Butter Pie Pop Up!</h2>
            <span class="block mb-4">December 12 and December 19 @ Sweet Things Sweet Shop in St. Genevieve!</span>
            <a class="btn" target="_blank" href="https://stegencandy.square.site">Details and Ordering Here</a>
        </div>
        <div class="bg-img opacity-50 bottom">
            <img class="" src="/assets/img/pie.jpg" alt="Christmas Cookies">
        </div>
    </div>
    <div class="container relative bg-red text-white py-8 mb-24 mx-auto text-center flex flex-col items-center justify-center">
        <div class="relative z-10">
            <h2 class="text-white mb-0">Christmas Cookie Box!</h2>
            <ul class="text-left ">
                <li>Three (3) Chocolate Krinkle</li>
                <li>Three (3) Gingerbread People</li>
                <li>Three (3) Oma's Butter Cookie</li>
                <li>Three (3) Raspberry Almond Thumbprints</li>
            </ul>
            <a class="btn" href="/cookie-order">Order Cookie Box</a>
        </div>
        <div class="bg-img opacity-25">
            <img class="opacity-50" src="/assets/img/cookies.jpg" alt="Christmas Cookies">
        </div>
    </div>
    <h1>Food and Desserts by Mandi Lee</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

        <p class="mb-6">Everyone had a birthday in the year of 2020. Some got creative and celebrated in safe ways, some skipped the hoopla all together, some were forced to be alone, some had to cancel plans and trips that have been in place for years. But everyone had a birthday. A reason to celebrate. A day you are here, when so many are not. All moments we are present, with the ones we love, deserve to be celebrated. Birthdays, Anniversaries, and Tuesday nights.</p>

        <p class="mb-6">I love making food for people. It surpasses love language. It feels like destiny, like ultimate fulfillment. Even when I sit down to eat lunch by myself, I set the table and plate my food. I've been baking a few years and eating baked goods a few more years than that. I looooove sweets. If it comes down to chocolate or potato chips, you better cover that chip in chocolate.</p>

        <p class="mb-6">I want to help you plan your engagement. I want to pack a picnic for you. I want to provide a dessert bar for your wedding. I want to make your family a lasagna. I want to teach you how to make scones. The possibilities are endless and we can navigate Covid-19 restrictions together.</p>

        <a href="#gabform" target="_self" class="btn mb-6">Shoot me a message</a>
    <hr>
    <div class="flex flex-wrap">
        <div class="lg:w-1/3 flex flex-col items-center justify-center text-center p-8 px-16">
            <h2>Food!</h2>
            <p>I am passionate about all types of food whether it's sweet or savory.</p>
            <a href="/food" class="btn">Check out my menu</a>
        </div>
    
        <div class="lg:w-1/3 flex flex-col items-center justify-center text-center p-8 px-16">
            <h2>Events!</h2>
            <p>Enjoy your own event while I plan and cater for you</p>
            <a href="/events" class="btn">Check out events</a>
        </div>
    
        <div class="lg:w-1/3 flex flex-col items-center justify-center text-center p-8 px-16">
            <h2>Experiences!</h2>
            <p>Break out of your routine with a fun class or picnic</p>
            <a href="/experiences" class="btn">Check out experiences</a>
        </div>
    </div>
@stop
