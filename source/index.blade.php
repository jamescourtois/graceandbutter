@extends('_layouts.master')

@section('body')
    <div class="container mx-auto text-center">
        <h2 class="text-dark-teal px-16">What's Happening at Grace & Butter</h2>
    </div>
    <div class="container flex flex-wrap justify-center mx-auto align-stretch mb-12 md:mb-24">
        
        <div class="w-full lg:w-1/2 text-center items-stretch justify-center flex p-4">
            <div class="relative w-full p-8 bg-red text-white shadow">
                <div class="relative z-10 flex flex-col items-center justify-start w-full h-full">
                    <h3>Grace and Butter Pie Pop-up!</h3>
                    <span class="block mb-4">December 12 and December 19 @ Sweet Things Sweet Shop in St. Genevieve!</span>
                    <div class="flex-1 flex flex-col items-center justify-end w-full"><a class="btn" target="_blank" href="https://stegencandy.square.site">Details and Ordering Here</a></div>
                    
                </div>
                <div class="bg-img opacity-50 bottom">
                    <img class="opacity-50" src="/assets/img/pie.jpg" alt="Christmas Cookies">
                </div>
            </div>
        </div> 
        <div class="w-full lg:w-1/2 text-center items-stretch justify-center flex p-4">   
            <div class="relative w-full p-8 bg-red text-white shadow">
                <div class="relative z-10 flex flex-col items-center justify-start w-full h-full">
                    <h3>Christmas Cookie Box!</h3>
                    <ul class="text-left pl-4">
                        <li>Three (3) Chocolate Krinkle</li>
                        <li>Three (3) Gingerbread People</li>
                        <li>Three (3) Oma's Butter Cookies</li>
                        <li>Three (3) Raspberry Almond Thumbprints</li>
                    </ul>
                    <div class="flex-1 flex flex-col items-center justify-end w-full"><a class="btn" href="/cookie-order">Order Cookie Box</a></div>
                </div>
                
                <div class="bg-img opacity-50">
                    <img class="opacity-50" src="/assets/img/cookiebox.jpg" alt="Christmas Cookies">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark-teal text-white py-16 border-b-8 border-light-teal px-4">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-full">
                <img src="/assets/img/mandi.jpg" alt="Portrait of Mandi Lee of Grace and Butter" class="mr-4 md:mr-16 mb-2 md:mb-8 max-w-50 md:max-w-33 lg:max-w-250 float-left">
                <h2>Hi! I'm Mandi.</h2>
                <p>Everyone had a birthday in the year of 2020. Some got creative and celebrated in safe ways, some skipped the hoopla all together, some were forced to be alone, some had to cancel plans and trips that have been in place for years. But everyone had a birthday. A reason to celebrate. A day you are here, when so many are not. All moments we are present, with the ones we love, deserve to be celebrated. Birthdays, Anniversaries, and Tuesday nights.</p>
        
                <p>I love making food for people. It surpasses love language. It feels like destiny, like ultimate fulfillment. Even when I sit down to eat lunch by myself, I set the table and plate my food. I've been baking a few years and eating baked goods a few more years than that. I looooove sweets. If it comes down to chocolate or potato chips, you better cover that chip in chocolate.</p>
        
                <p>I want to help you plan your engagement. I want to pack a picnic for you. I want to provide a dessert bar for your wedding. I want to make your family a lasagna. I want to teach you how to make scones. The possibilities are endless and we can navigate Covid-19 restrictions together.</p>
            </div>
    
            
        </div>
    </div>
   
    
@stop
