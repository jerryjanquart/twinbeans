<section id="thisweeksspecial" class="pt-4 pb-4" style="margin-top: 0px; margin-bottom: 0px; background: linear-gradient(45deg, #428c53, #fdf58d) !important;">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center px-5">
            
            @if (session()->has('success'))
            <div style="width: 100%; padding-top: 30px;" class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <p><strong><span class="green">
                    <i class="bi bi-lightning-charge-fill"></i> 
                    SUCCESS: {{session('success')}}
                </span></strong></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
            </div>          
            @endif

            <h1 class="display-6 lh-1 mb-3 mt-2 text-white"><u><!--This week's special-->Notice</u></h1> 
            @if(!Auth::check())
            <p class="lead fw-normal mb-0"><i class="bi bi-lightning-charge-fill"></i> <span class="black">{{ $special->name }}</span> <i class="bi bi-lightning-charge-fill"></i></p>
            <p><strong>{{ $special->description }}</strong></p>
            @else
            <form method="POST" action="/{{ $special->id }}">
                @csrf
                @method('PATCH')
                <div class="row">
                  <div class="col-sm-3"></div>  
                  <div class="mb-3 col-sm-6">
                      <label for="name" class="form-label">
                        <strong><span class="green">Name</span></strong>
                      </label>
                    <input 
                        name="name" 
                        type="text" 
                        class="form-control" 
                        id="name" 
                        style="background-color: #fffde2"
                        aria-describedby="name"
                        value="{{ $special->name }}">
                    </div>
                    <div class="col-sm-3"></div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="mb-3 col-sm-6">
                      <label for="description" class="form-label">
                        <strong><span class="green">Description</span></strong>
                      </label>
                      <textarea 
                         class="form-control" 
                         id="description" 
                         name="description" 
                         rows="4" 
                         style="background-color: #fffde2"
                      >{{ $special->description }}
                      </textarea>
                    <div class="col-sm-3"></div>          
                
                </div>
                <div class="row mt-3    ">
                    <div class="col text-center">
                    <center>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </center>
                    </div>
                </div>
              </form>

              <div class="row mt-3 mb-4">
                <div class="col text-center">
                    <center>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-dark mb-3" href="/logout">Logout</button> 
                </form>
            </div>
        </div>
            @endif
        </div>
        <div class="col-sm-2"></div>
    </div>
</section>