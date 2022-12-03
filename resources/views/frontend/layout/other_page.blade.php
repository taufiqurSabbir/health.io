@include('.frontend.partials.header')

<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>@yield('page_name')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

@yield('content')
@include('.frontend.partials.footer')
