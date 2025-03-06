<x-layout doctitle="{!! $machine->name !!}" :game="$game" :next="$next" :previous="$previous">

    <div style="margin-top: 80px;">

        <x-pinballmachines :machines="$machines" :url="$url" />
    
    </div>

    <section class="mx-5 pb-0">
    
    <div class="row" style="margin-bottom: 60px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 mb-3">
            <img src="/assets/images/machines/{{ $machine->slug }}.jpg" width="100%" style="border-top-left-radius:15px; border-bottom-left-radius: 15px;" />
        </div>
        <div class="col-lg-4">
            @if (session()->has('success'))
            <div style="width: 100%;
            padding-top: 30px;" class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <p><strong><span class="green">
                    <i class="bi bi-lightning-charge-fill"></i> 
                    SUCCESS: {{session('success')}}
                </span></strong></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                
            </div>          
            @endif

            @if(!Auth::check())
            <div class="d-flex justify-content-between">
                
                @if (isset($previous) && ($machine->active == "true"))
                <a type="button" class="btn btn-primary btn-sm" href="/machines/{{ $previous->slug }}" role="button">
                    <i class="bi bi-arrow-left-square-fill"></i> 
                </a>&nbsp;&nbsp;&nbsp;
                @else
                <button class="btn btn-secondary btn-sm" role="button" style="display:none;">
                    <i class="bi bi-arrow-left-square-fill"></i> 
                </button>&nbsp;&nbsp;&nbsp;
                @endif
                
                @if (isset($next) && ($machine->active == "true"))
                <a type="button" class="btn btn-primary btn-sm" href="/machines/{{ $next->slug }}" role="button">
                    <i class="bi bi-arrow-right-square-fill"></i> 
                </a>
                @else
                <button class="btn btn-secondary btn-sm" style="display:none;">
                    <i class="bi bi-arrow-right-square-fill"></i> 
                </button>
                @endif

            </div>
            @endif

            @if ($machine->active == 'false')
            <center><p class="mb-4" style="font-size: 18px; background-color: #eceded; padding-left: 10px;"> <em><strong>Not currently playable.</strong></em></p></center>
            @endif
            
            
            @if(Auth::check())
            <a type="button" class="btn btn-primary btn" href="/machines/{{ $machine->slug }}/edit" role="button">
                <i class="bi bi-pencil-square"></i> Edit
            </a>
            @endif
            
            <h1 class="display-1 lh-1 mb-3 mt-2"> {!! $machine->name !!} </h1>
            <p style="font-size: 20px;">
                <strong> {{ $machine->year }} &#8212; {{ $machine->manufacturer }} </strong>
            </p>
            <hr />
            <p class="mb-0 text-uppercase"><strong>{{ $machine->headline }}</strong></p>
            <p class="mt-3 mb-4" style="font-size: 18px;">{!! $machine->about !!}</p>
            
            <hr />

            
            
        </div>
        <div class="col-lg-2"></div>
    </div>

    

</section>
    
    <img src="/assets/images/machines/fb/{{ $machine->slug }}.jpg" width="100%"/>
    <x-footer />
</x-layout>