<nav class="flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Food" href="/food"
        class="ml-6 {{ $page->isActive('/food') ? 'active underline' : '' }}">
        Food
    </a>

    <a title="{{ $page->siteName }} Experiences" href="/experiences"
        class="ml-6 {{ $page->isActive('/experiences') ? 'active underline' : '' }}">
        Experiences
    </a>

</nav>
