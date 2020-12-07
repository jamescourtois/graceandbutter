<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        
       <li class="pl-4 mb-4">
            <a title="{{ $page->siteName }} Blog" href="/food"
            class="p-8 text-xl {{ $page->isActive('/food') ? 'active underline' : '' }}">
            Food
            </a>
        </li>

       <li class="pl-4 mb-4">
            <a title="{{ $page->siteName }} Blog" href="/experiences"
            class="p-8 text-xl {{ $page->isActive('/experiences') ? 'active underline' : '' }}">
            Experiences
            </a>
        </li>
        
    </ul>
</nav>
