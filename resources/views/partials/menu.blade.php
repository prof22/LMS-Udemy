<div class="main-nav-wrap" style="height:98px">
    <div class="mobile-overlay"></div>

    <ul class="mobile-main-nav">
        <div class="mobile-menu-helper-top"></div>

        <li class="has-children">
            <a href="">
                <i class="fas fa-th d-inline"></i>
                <span>Categories</span>
                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
            </a>

            <ul class="category corner-triangle top-left is-hidden">
                <li class="go-back">
                    <a href=""><i class="fas fa-angle-left"></i>Menu</a>
                </li>

                {{--<li class="has-children">--}}
                <li>
                    @foreach(\App\Category::all() as $category)
                        <a href="{{ route('courses_by_category', $category) }}">
                            <span class="icon"><i class="fa fa-caret-right"></i></span>
                            <span>{{ $category->title  }}</span>
                        </a>
                    @endforeach
                </li>
            </ul>
        </li>

        <div class="mobile-menu-helper-bottom"></div>
    {{-- <div class="row" style="margin-left: 10%; position:absolute; top:33%; margin-bottom:15% padding-bottom:10%">
            <div class="col-md-3 col-sm-3" >
                    <i class="fa fa-phone fa-2x" style="color:#ec5252"></i>
                     <span style="font-weight:bold; font-size:15px;"> 0806 438 0018 info@infintytechworld.com</span>

            </div>
            <br>
            <div class="col-md-3 col-sm-3">
            <i class="fa fa-address-card fa-3x" style="color:#ec5252"></i>
            <span style="font-weight:bold;"> N0 1 Dike Street Awka Anambra State</span>

            </div>
            <br>
            <div class="col-md-3 col-sm-3">
            <i class="fa fa-clock fa-3x" style="color:#ec5252"></i>
            <span style="font-weight:bold; font-size:15px;"> 07:30 - 18:00 Monday to Friday</span>
            </div>
            <br>
   </div> --}}

    </ul>
</div>

