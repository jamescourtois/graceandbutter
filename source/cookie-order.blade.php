---
title: Order Christmas Cookies
description: 12 holiday treats brought to you by Mandi Lee
---
@extends('_layouts.master')

@section('body')
<div class="relative bg-red p-8">
    <div class="relative z-10">
        <h1 class="text-white mb-0 ">Order Christmas Cookies</h1>
    </div>
    <div class="bg-img opacity-25">
        <img class="opacity-50" src="/assets/img/cookies.jpg" alt="Cookies">
    </div>
</div>

<div class="flex flex-wrap md:flex-no-wrap">
    <div class="md:pr-16">
        <p>Cost:</p>
        <ul class="pl-4">
            <li>
                $15 per box
            </li>
            <li>
                $5 Delivery in STL
            </li>
            <li>
                Shipping is available by request
            </li>
        </ul>
    </div>
    
    <div>
        <p>Includes:</p>
        <ul class="pl-4">
            <li>Three (3) Chocolate Krinkle</li>
            <li>Three (3) Gingerbread People</li>
            <li>Three (3) Oma's Butter Cookie</li>
            <li>Three (3) Raspberry Almond Thumbprints</li>
        </ul>
    </div>
</div>



<script>
    function onloadCallback() {
        /* Place your recaptcha rendering code here */
        var form = document.getElementById('cookieform');

        form.addEventListener("submit", function (event) {
            if (grecaptcha.getResponse() === '') {
                event.preventDefault();
                alert('Please check the recaptcha box and try submitting again.');
            }
        }, false);
    }
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>

<form id="cookieform" action="https://api.form-data.com/f/8j5cvo3ozz8q9hcczsdvco" method="post" >    

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
        
    </div>    
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full mb-12 md:w-1/2 px-3 md:mb-0">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="box-count">
                How many cookie boxes do you want?
            </label>
    
                <input
                type="number"
                id="box-count"
                placeholder="Enter number"
                name="box-count"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    
        <div class="w-full mb-12 md:w-1/2 px-3 md:mb-0">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="box-count">
                Where should I deliver or ship to?
            </label>
    
                <input
                type="text"
                id="delivery"
                placeholder="Enter business, public place or address"
                name="delivery"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
        
    </div>

    

    <div class="g-recaptcha mb-6"
       data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>

    <div class="flex justify-start w-full">
        <input
            type="submit"
            value="Submit"
            class="btn"
        >
    </div>
</form>
@stop
