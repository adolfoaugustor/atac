<div class="contact-info-widget">
   <p>
      @foreach($items as $item)
         @if ($item->order == 1)
            <strong>Telefone: </strong>
            <a href="{{ $item->link() }}" >{!! $item->title !!}</a> <br>
         @endif
         @if ($item->order == 2)
            <strong>E-mail: </strong>
            <a href="{{ $item->link() }}" >{!! $item->title !!}</a> <br>
         @endif
         @if ($item->order == 3)
            <strong>Endereço: </strong>
            <a href="{{ $item->link() }}" >{!! $item->title !!}</a> <br>
         @endif
      @endforeach
   </p>
</div>