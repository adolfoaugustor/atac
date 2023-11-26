<nav class="main-nav navbar-collapse collapse" id="primary-nav">
   <ul class="nav nav-pills">
      @foreach($items as $menu_item)
         <li class="dropdown {{ \Request::getRequestUri()===$menu_item->link() ? 'active' : '' }}">
            <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
         </li>
      @endforeach
   </ul>
</nav>