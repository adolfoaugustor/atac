@php
    $dataAberturaStr = '2006-10-19';
    $dataAbertura = new DateTime($dataAberturaStr);
    $dataAtual = new DateTime();

    $intervalo = $dataAbertura->diff($dataAtual);
    $anosDesdeAbertura = $intervalo->y;
@endphp
<div class="top-bar-simple clearfix">
   <div class="container">
      <p>ATAC Assessoria Contábil | {{ $anosDesdeAbertura }} Anos</p>
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
