<div class="top-bar-simple clearfix">
   <div class="container">
      <p>Nós temos mais de 15 anos de experiência!</p>
      <ul class="social">
         @foreach($items as $item)
         <li>
            <a href="{{ $item->link() }}" 
            target="{{ $item->target }}"
            class="{{ $item->title }}">
               <i class="{{ $item->icon_class }}"></i>
            </a>
         </li>
         @endforeach
      </ul>
   </div>
</div>