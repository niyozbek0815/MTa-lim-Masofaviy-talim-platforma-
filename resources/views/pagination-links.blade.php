@if ($paginator->hasPages())
<nav aria-label="...">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" >Previous</a>
          </li>


        @else
        <li class="page-item ">
            <a class="page-link" wire:click="previousPage">Previous</a>
          </li>

        @endif

        @foreach ($elements as $element )
        @foreach ($element as $page=>$url )
        <li class="page-item">
            <a class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
        </li>

        @endforeach
         @endforeach

     @if ($paginator->hasMorePages())
      <li class="page-item">
        <p class="page-link" wire:click="nextPage">Next</p>
      </li>

      @else
      <li class="page-item disabled">
        <p class="page-link" >Next</p>
      </li>
      @endif

    </ul>
  </nav>

@endif
