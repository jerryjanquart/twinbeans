<section id="healthy-bites">
    
    <div class="row">
        <div class="col">

            @if(Auth::check())
            <div>
                <center>
                    <h3 class="font-alt"><span class="green"><u><i class="bi bi-caret-right-fill"></i> Healthy Bites</u></span>
                        <a  type="button" 
                            class="btn btn-primary btn-sm"
                            data-bs-toggle="collapse" 
                            href="#add-healthy-bite" 
                            role="button" 
                            aria-expanded="false" 
                            aria-controls="add-healthy-bite"
                        >
                        ADD HEALTHY BITE <i class="bi bi-file-plus-fill"></i>
                        </a>
                    </h3>
            </center>
        
                
                <div class="collapse" id="add-healthy-bite">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                
                                <form method="POST" action="/menu/healthy-bite">
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
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                  </div>

                @else 
                    <div>
                        <center>
                                <h3 class="font-alt"><span class="green"><u><i class="bi bi-caret-right-fill"></i> Healthy Bites</u></span></h3>
                        </center>
                    </div>
                @endif
            <div class="row">
                <div class="col-sm-1"></div>

                <div class="col-sm-10 text-center">
                    @if(Auth::check())
                    <p>
                    @foreach ($healthybites as $healthybite)
                    <form action="/menu/healthy-bite/{{ $healthybite->id }}" method="POST" id="delete-healthy-bite" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                                <button 
                                    class="btn btn-danger" 
                                    role="button"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .5rem; margin-bottom: 10px;">
                                <i class="bi bi-trash"></i>
                            </button> <span class="lead fw-normal">{{ $healthybite->name }}</span>
                    </form>&nbsp;&nbsp;&nbsp;
                    @endforeach
                    </p>
                    @else
                    <p class="lead fw-normal">
                        @foreach ($healthybites as $healthybite)
                            <span class="green">&#8226;</span>&nbsp;{{ $healthybite->name }}
                        @endforeach
                    </p>
                    @endif

                </div>
                <div class="col-sm-1"></div>
            </div>

        </div>
    </div>
    
</section>