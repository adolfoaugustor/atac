@php
   $anoInicio = 2006;
   $anoAtual = date('Y');
   $idadeEmpresa = $anoAtual - $anoInicio;
@endphp
<div class="top-bar-simple clearfix">
   <div class="container">
      <p>ATAC Assessoria Contábil | {{ $idadeEmpresa }} Anos</p>
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