@if ($paginator->hasPages())
<div class="row">
    <div class="col-12">
        <div class="text-center">
            <div class="pagination">
                @if ($paginator->onFirstPage())
              
                <button ><i class="fal fa-angle-double-left"></i></button>

            @else
             
                <button>
                    <a href="{{ $paginator->previousPageUrl() }}" ><i class="fal fa-angle-double-left"></i></a>
                </button>

            @endif
              

                 {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            {{-- @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif --}}

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <button class="active">
                        <a href="#" >{{ $page }}</a>
                    </button>
                    @else
                    <button >
                        <a href="{{ $url }}" >{{ $page }}</a>
                    </button>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
              
       
        <button>
            <a href="{{ $paginator->nextPageUrl() }}" ><i class="fal fa-angle-double-right"></i></a>
        </button>
    @else
     
    <button ><i class="fal fa-angle-double-right"></i></button>

    @endif


            </div>
        </div>
    </div>
</div>
@endif
