<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-KBG5ZT6CSN"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-KBG5ZT6CSN');
        </script>
        <script src="https://www.google.com/recaptcha/api.js"
        async defer></script>
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen">
        <header class="flex justify-center items-center py-2 bg-white shadow-lg z-50 relative" role="banner">
           
                
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center justify-center hover:no-underline">
                        
                        <div class="site-logo">
                            @include('_nav.site-logo-svg')
                        </div>
                        <span class="sr-only">{{ $page->siteName }}</span>
                    </a>
                    <a class="no-underline hover:no-underline" href="/"><h1 class="text-red inline-flex items-center justify-start text-3xl leading-tight lg:text-5xl m-0 p-0 pl-4">Food Experiences <br class="lg:hidden"/>by Mandi Lee</h1></a>
                    
           
        </header>

        

        <main role="main" class="flex-auto relative z-10">
            @yield('body')
        </main>
        @if ($page->getPath() == '')
            @include('_layouts.form')
        @endif

        <footer class="text-center text-sm py-4" role="contentinfo">
            <ul class="flex flex-col justify-center list-none m-0">
                <li class="md:mr-2">
                    &copy; {{ date('Y') }} <a href="http://graceandbutter.com" title="Mandi Lee's website">Grace & Butter by Mandi Lee</a>.
                </li>

                <li>
                    Built by <a target="_blank" title="I developed this website" href="https://jamescourtois.surge.sh">James Courtois</a> with <a href="http://jigsaw.tighten.co" target="_blank" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a target="_blank" href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>. 
                    Hosted and deployed using <a target="_blank" title="This is where my website lives" href="https://surge.sh">Surge</a>.
                    Forms powered by <a href="https://form-data.com" target="blank">form-data.com</a>. Form data is deleted after 90 days.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
