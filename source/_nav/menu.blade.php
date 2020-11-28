<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Food" href="/food"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/food') ? 'active text-blue-600' : '' }}">
        Food
    </a>

    <a title="{{ $page->siteName }} Events" href="/events"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/events') ? 'active text-blue-600' : '' }}">
        Events
    </a>

    <a title="{{ $page->siteName }} Experiences" href="/experiences"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/experiences') ? 'active text-blue-600' : '' }}">
        Experiences
    </a>
    
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
