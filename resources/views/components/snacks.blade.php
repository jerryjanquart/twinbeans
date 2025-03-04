<section id="snacks" class="px-2">
    <div class="row">
        <div class="col">

            @if(Auth::check())
            <div>
                <center>
                    <h3 class="font-alt"><span class="green"><u><i class="bi bi-caret-right-fill"></i> Snacks</u></span>
                        <a  type="button" 
                            class="btn btn-primary btn-sm"
                            data-bs-toggle="collapse" 
                            href="#addsnack" 
                            role="button" 
                            aria-expanded="false" 
                            aria-controls="addsnack"
                        >
                        ADD SNACK <i class="bi bi-file-plus-fill"></i>
                        </a>
                    </h3>
            </center>
            
                
                <div class="collapse" id="addsnack">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                
                                <form method="POST" action="/menu/snack">
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
                        <h3 class="font-alt"><span class="green"><u><i class="bi bi-caret-right-fill"></i> Snacks</span></u></h3>
                </center>
                </div>
                @endif
            <div class="row">
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-10 text-center">
                    @if(Auth::check())
                    <p>
                    @foreach ($snacks as $snack)
                    <form action="/menu/snack/{{ $snack->id }}" method="POST" id="delete-snack" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                                <button 
                                    class="btn btn-danger" 
                                    role="button"
                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .5rem; margin-bottom: 10px;">
                                <i class="bi bi-trash"></i>
                            </button> <span class="lead fw-normal">{{ $snack->name }}</span>
                    </form>&nbsp;&nbsp;&nbsp;
                    @endforeach
                    </p>
                    @else
                        <p class="lead fw-normal">
                            @foreach ($snacks as $snack)
                                <span class="green">&#8226;</span>&nbsp;{{ $snack->name }}
                            @endforeach
                        </p>
                    @endif
                </div>
                <div class="col-sm-1"></div>
            </div>

        </div>
    </div>
    
</section>