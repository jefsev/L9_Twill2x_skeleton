<footer id="footer">
    <div class="footer-inner max-w-7xl mx-auto px-6 py-12">
        @if(!empty($menu->footer_widget))
            @php $footerWidgetCount = count($menu->footer_widget); @endphp
            <div class="footer-widgets grid gap-16 @if(($footerWidgetCount === 2)) grid-cols-2 @elseif(($footerWidgetCount === 3)) grid-cols-3 @elseif(($footerWidgetCount === 4)) grid-cols-4 @endif">

                @foreach ($menu->footer_widget as $widget)
                    <div class="footer-widget">
                        @if(isset($widget['use_logo']))
                            @if(!empty($menu->file('footer_logo')) && $widget['use_logo'] === true)
                                <a href="/">
                                    <img src="{{ $menu->file('footer_logo') }}" alt="app logo">
                                </a>
                            @endif
                        @endif

                        @if(isset($widget['footer_title']))
                            <h4>{!! $widget['footer_title'] !!}</h4>
                        @endif

                        @if(isset($widget['widget_content']))
                            <div class="widget--content">
                                {!! $widget['widget_content'] !!}
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
        @endif
    </div>
</footer>