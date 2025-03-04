<div class="row px-3" id="tea_flavors">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 text-center bg-white border-bottom" style="margin-top: -20px; font-size: 18px; padding-bottom: 14px;">
        @if(Auth::check())
        @foreach ($teas as $tea)
            <form action="/menu/tea-flavor/{{ $tea->id }}" method="POST" id="delete-tea" style="display: inline-block;">
                @csrf
                @method('DELETE')
                        <button 
                            class="btn btn-danger" 
                            role="button"
                            style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .15rem; --bs-btn-font-size: .5rem; margin-bottom: 6px;">
                        <i class="bi bi-trash"></i>
                    </button> {{ $tea->name }}
            </form>&nbsp;&nbsp;
        @endforeach
        @else
            @foreach ($teas as $tea)
                <span class="green">&#8226;</span>&nbsp;{{ $tea->name }}
            @endforeach
        @endif

        @if(Auth::check())
        <!-- Add tea flavor button and modal -->
        <div class="mt-2">
        <center>
            <a  type="button" 
                class="btn btn-primary btn-sm mb-2"
                data-bs-toggle="collapse" 
                href="#addteaflavor" 
                role="button" 
                aria-expanded="false" 
                aria-controls="addteaflavor"
            >
            ADD TEA FLAVOR <i class="bi bi-file-plus-fill"></i>
            </a>
        </center>
        <!-- the modal -->
        <div class="collapse" id="addteaflavor">
            <div class="card card-body">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        
                        <form method="POST" action="/menu/tea-flavor">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col px-2">
                                    <label for="name" class="form-label"><strong><span class="green">Name</span></strong></label>
                                    <input 
                                        name="name" 
                                        type="text" 
                                        class="form-control" 
                                        id="name" 
                                        style="background-color: #fffde2"
                                        aria-describedby="name"
                                    >
                                </div>
                            </div>
                            <center><button type="submit" class="btn btn-primary mb-4">Submit</button></center>
                        </form>
                    
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <!-- End tea flavor button and modal -->
        @endif
        
    </div>
    <div class="col-sm-2"></div>
</div>

<div>
    
