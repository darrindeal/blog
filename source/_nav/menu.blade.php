<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 {{ $page->isActive('/blog') ? 'active text-ddd-orange' : '' }}">
        Posts
    </a>
    
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 {{ $page->isActive('/contact') ? 'active text-ddd-orange' : '' }}">
        Contact
    </a>

    <a title="{{ $page->siteName }} Uses" href="/uses"
        class="ml-6 {{ $page->isActive('/uses') ? 'active text-ddd-orange' : '' }}">
        Uses
    </a>
</nav>
