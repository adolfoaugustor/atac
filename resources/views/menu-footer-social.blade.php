@foreach($items as $item)
    @if ($item->title =='facebook')
        <li class="animate bounceIn" data-delay="100">
            <a href="{{ $item->link() }}" target="{{ $item->target }}" class="twitter"><i class="icon-instagram"></i></a>
        </li>
    @elseif ($item->title =='twitter')
        <li class="animate bounceIn">
            <a href="{{ $item->link() }}" target="{{ $item->target }}" class="facebook"><i class="icon-facebook-1"></i></a>
        </li>
    @elseif ($item->title =='linkedin')
        <li class="animate bounceIn" data-delay="300">
            <a href="{{ $item->link() }}" target="{{ $item->target }}" class="linkedin"><i class="icon-linkedin3"></i></a>
        </li>
    @else
        <li class="animate bounceIn" data-delay="400">
            <a href="{{ $item->link() }}" target="{{ $item->target }}" class="{{ $item->title }}">
                <i class="{{ $item->icon_class }}"></i>
            </a>
        </li>
    @endif
@endforeach
