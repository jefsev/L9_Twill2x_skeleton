<nav id="navbar">
    <div class="navbar max-w-7xl mx-auto px-6 py-4 flex flex-row justify-between items-center">
        <a href="/" class="app-logo">
            @if(!empty($menu->file('web_logo')))
                <img src="{{ $menu->file('web_logo') }}" alt="app logo">
            @else
                Home
            @endif
        </a>

        @if(!empty($menu->menu_link))
            <div class="navigation flex flex-row items-center">
                @foreach ($menu->menu_link as $link_attr)
                    <a href="{{ $link_attr['menu_item_slug'] }}" class="mx-4">{{ $link_attr['menu_item_title'] }}</a>
                @endforeach
            </div>
        @endif
    </div>
</nav>