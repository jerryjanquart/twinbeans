<section id="latteflavors">
    <div class="row">
        <div class="col" style="padding-left: calc(var(--bs-gutter-x) * 0.5)0;">

            <!--ADD FLAVOR-->
            @if(Auth::check())
            <div>
                <center>
                    <h1 class="display-6 lh-1 mb-5 mt-2"><span style="color: white; margin-bottom:">*Latte <br />Flavors</span><br />
                        <a  type="button" 
                            class="btn btn-primary btn-sm"
                            data-bs-toggle="collapse" 
                            href="#addlatteflavor" 
                            role="button" 
                            aria-expanded="false" 
                            aria-controls="addlatteflavor"
                        >
                        ADD FLAVOR <i class="bi bi-file-plus-fill"></i>
                        </a>
                    </h1>
            </center>
        
                
                <div class="collapse" id="addlatteflavor">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                
                                <form method="POST" action="/menu/latte-flavor">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col">
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
                    <h1 class="display-6 lh-1 mb-5 mt-2"><span style="color: white;">*Latte <br />Flavors</span></a></h1>
            </center>
            </div>
            @endif
            <!--END ADD FLAVORS-->
            
                  
            <div class="row">
                <div class="col text-center">
                    @if(Auth::check())
                    @foreach ($lattes as $latte)
                    <hr />
                    <p class="mb-4 mt-2">
                        <form action="/menu/latte-flavor/{{ $latte->id}}" method="POST" id="delete-latte-flavor" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                                    <button 
                                        class="btn btn-danger" 
                                        role="button"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem;  --bs-btn-font-size: .75rem; margin-bottom: 10px;">
                                    <i class="bi bi-trash"></i>
                                </button>
                        </form> 
                        
                        <span class="lead fw-normal" style="color: white;">
                            <strong>{{ $latte->name }}</strong>
                        </span>
                    
                    </p>
                    @endforeach
                    
                    @else
                    @foreach ($lattes as $latte)
                    <hr />
                    <p class="lead fw-normal mb-3 pt-2">
                    <span class="green"><i class="bi bi-lightning-charge-fill"></i></span>&nbsp;<span style="color: black;"><strong>{{ $latte->name }}</strong></span>
                    </p>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
    
</section>