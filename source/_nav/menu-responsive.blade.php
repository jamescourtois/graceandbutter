<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        
       <li class="pl-4">
            <a title="{{ $page->siteName }} Blog" href="/food"
            class="{{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
            Food
            </a>
        </li>
    
       <li class="pl-4">
            <a title="{{ $page->siteName }} Blog" href="/events"
            class="{{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
            Events
            </a>
        </li>
    
       <li class="pl-4">
            <a title="{{ $page->siteName }} Blog" href="/experiences"
            class="{{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
            Experiences
            </a>
        </li>
        
       <li class="pl-4">
            <a title="{{ $page->siteName }} Blog" href="/blog"
            class="{{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
            Blog
            </a>
        </li>
    
       <li class="pl-4">
            <a title="{{ $page->siteName }} About" href="/about"
            class="{{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
            About
            </a>
        </li>
    
       <li class="pl-4">
            <a title="{{ $page->siteName }} Contact" href="/contact"
            class="{{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
            Contact
            </a>
        </li>
    </ul>
</nav>
