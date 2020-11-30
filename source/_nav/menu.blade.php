<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Food" href="/food"
        class="ml-6 {{ $page->isActive('/food') ? 'active text-blue-600' : '' }}">
        Food
    </a>

    <a title="{{ $page->siteName }} Events" href="/events"
        class="ml-6 {{ $page->isActive('/events') ? 'active text-blue-600' : '' }}">
        Events
    </a>

    <a title="{{ $page->siteName }} Experiences" href="/experiences"
        class="ml-6 {{ $page->isActive('/experiences') ? 'active text-blue-600' : '' }}">
        Experiences
    </a>

</nav>
