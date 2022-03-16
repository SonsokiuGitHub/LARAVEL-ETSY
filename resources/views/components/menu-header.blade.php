
<div>
    <div class="menu-header mx-auto my-0">
        <ul class="menu-header__list w-100 d-flex align-items-center justify-content-between my-0 mx-auto">
            @foreach($menuMain as $menuItem)
            <li class="d-flex align-items-center">
                <a class="d-inline-block position-relative text-decoration-none bg-transparent text-caption-13" href="{{route('category')}}">
                <span>{{$menuItem}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>