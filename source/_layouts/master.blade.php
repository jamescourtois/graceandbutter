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
        <header role="banner">
           
                
           
        </header>

        

        <main role="main" class="flex-auto relative z-10 flex items-center justify-center">
				<div>
					<div class="flex items-center justify-center pb-5">
						@include('_nav.site-logo-svg')
					</div>
					<div class="w-full text-center px-5" style="max-width:450px;">
						<h1 class="text-red">Goodbye &amp; Thank You for Everything!</h1>
						<p>It's time for Grace &amp; Butter to come to an end. Don't be sad to see the end - be happy for the special moments and priceless memories. Carry on the spirit of G&amp;B by supporting your local businesses and sharing simple pleasures with the ones you love.</p>
					</div>
				</div>
        </main>
        

        <footer class="text-center text-sm py-4" role="contentinfo">
            
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
