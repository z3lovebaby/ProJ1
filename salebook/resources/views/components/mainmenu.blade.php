<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="{{route('home')}}" class="active">Home</a></li>

        @foreach($categoryLimit as $categoryParent)
        <li class="dropdown"><a href="#">{{$categoryParent->DMS_Tieude}}<i class="fa fa-angle-down"></i></a>
        @if($categoryParent->categoryChildren->count())
        <ul role="menu" class="sub-menu">
                @foreach($categoryParent->categoryChildren as $categoryChild)
                <li><a href="shop.html">{{$categoryChild->DMS_Tieude}}</a></li>
                @endforeach
            </ul>
         @endif   
        </li>
        @endforeach
        <li><a href="404.html">404</a></li>
        <li><a href="contact-us.html">Contact</a></li>
    </ul>
</div>