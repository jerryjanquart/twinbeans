<!-- Pinball Machines List -->
<section class="couponbg">
    <div class="container px-5">
        <center>
            <h3 class="font-alt"><span class="text-yellow">The Pinball Machines</span></h3>
            <p class="mb-0">
                
                @foreach($machines as $machine)
                        
                    @if ($url == '/machines/'. $machine->slug)
                    <span class="text-yellow">&#8226;&nbsp;</span><strong><a class="text-yellow" href="/machines/{{ $machine->slug }}" style="text-transform: uppercase;">{!! $machine->name !!}</a></strong>&nbsp;<span class="text-yellow">({{ $machine->year }})</span>   
                    @else
                    <span class="text-green">&#8226;&nbsp;</span><strong><a class="text-white   " href="/machines/{{ $machine->slug }}">{!! $machine->name !!}</a></strong>&nbsp;<span class="text-white">({{ $machine->year }})</span>   
                    @endif
                       
                @endforeach
            </p>
        </center>
    </div>
</section>