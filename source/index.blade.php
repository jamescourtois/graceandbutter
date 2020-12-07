@extends('_layouts.master')

@section('body')
    
    <div class="container relative bg-dark-teal text-white py-8 lg:mb-8 mx-auto px-4 text-center flex flex-col items-center justify-center">   
    
        <div class="relative z-10">
            <h2 class="text-white">Grace and Butter Pie Pop Up!</h2>
            <span class="block mb-4">December 12 and December 19 @ Sweet Things Sweet Shop in St. Genevieve!</span>
            <a class="btn" target="_blank" href="https://stegencandy.square.site">Details and Ordering Here</a>
        </div>
        <div class="bg-img opacity-50 bottom">
            <img class="" src="/assets/img/pie.jpg" alt="Christmas Cookies">
        </div>
    
    </div> 
    <div class="container relative bg-red text-white py-8 mb-24 mx-auto text-center px-4 flex flex-col items-center justify-center">   
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

    <div class="container mx-auto flex flex-col lg:flex-wrap items-center lg:items-start px-4 pb-24">
        <h1>Food and Desserts by Mandi Lee</h1>

        <p class="mb-6">Everyone had a birthday in the year of 2020. Some got creative and celebrated in safe ways, some skipped the hoopla all together, some were forced to be alone, some had to cancel plans and trips that have been in place for years. But everyone had a birthday. A reason to celebrate. A day you are here, when so many are not. All moments we are present, with the ones we love, deserve to be celebrated. Birthdays, Anniversaries, and Tuesday nights.</p>

        <p class="mb-6">I love making food for people. It surpasses love language. It feels like destiny, like ultimate fulfillment. Even when I sit down to eat lunch by myself, I set the table and plate my food. I've been baking a few years and eating baked goods a few more years than that. I looooove sweets. If it comes down to chocolate or potato chips, you better cover that chip in chocolate.</p>

        <p class="mb-6">I want to help you plan your engagement. I want to pack a picnic for you. I want to provide a dessert bar for your wedding. I want to make your family a lasagna. I want to teach you how to make scones. The possibilities are endless and we can navigate Covid-19 restrictions together.</p>

        <a href="#gabform" target="_self" class="btn mb-6">Shoot me a message</a>
    </div>
    
    <div class="bg-teal py-16">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <div class="lg:w-1/2 flex flex-col items-center justify-center text-center p-8 px-16">
                <h2 class="text-dark-teal mb-0">Food!</h2>
                <p>I am passionate about all food, sweet or savory. Choose from my menu or make a special request and I'll do the rest!</p>
                <a href="/food" class="btn">Check out my menu</a>
            </div>
        
            <div class="lg:w-1/2 flex flex-col items-center justify-center text-center p-8 px-16">
                <h2 class="text-dark-teal mb-0">Experiences!</h2>
                <p>Break out of your routine with a fun event, class or picnic. I will plan and cater an experience you can cherish for a lifetime.</p>
                <a href="/experiences" class="btn">Check out experiences</a>
            </div>
        </div>
    </div>
@stop
