<section class="px-2">
  <div class="text-center">
    <h3 class="font-alt">
      <span class="green">
        <u><i class="bi bi-caret-right-fill"></i> Don Turo&#8212;Whole Bean</u>
      </span>
      @if(Auth::check())
      <a  type="button" 
          class="btn btn-primary btn-sm"
          data-bs-toggle="collapse" 
          href="#addbeans" 
          role="button" 
          aria-expanded="false" 
          aria-controls="addcolddrink"
      >
      ADD BEANS <i class="bi bi-file-plus-fill"></i>
      </a>
      @endif
    </h3>
  </div>

  @if(Auth::check())
  <div class="collapse" id="addbeans">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                
                                <form method="POST" action="/menu/beanbags">
                                    @csrf
                                    <div class="row">
                                        <!--Name (blend)-->
                                        <div class="mb-3 col px-2">
                                            <label for="blend" class="form-label"><strong><span class="green">Name</span></strong></label>
                                            <input 
                                                name="blend" 
                                                type="text" 
                                                class="form-control" 
                                                id="blend" 
                                                style="background-color: #fffde2"
                                                aria-describedby="blend"
                                            >
                                        </div>

                                        <!--Weight (oz)-->
                                        <div class="mb-3 col px-2">
                                            <label for="blend" class="form-label"><strong><span class="green">Weight (oz.)</span></strong></label>
                                            <input 
                                                name="oz" 
                                                type="text" 
                                                class="form-control" 
                                                id="oz" 
                                                style="background-color: #fffde2"
                                                aria-describedby="oz"
                                            >
                                        </div>

                                        <!--Weight (oz)-->
                                        <div class="mb-3 col px-2">
                                            <label for="blend" class="form-label"><strong><span class="green">Price</span></strong></label>
                                            <input 
                                                name="cost" 
                                                type="text" 
                                                class="form-control" 
                                                id="cost" 
                                                style="background-color: #fffde2"
                                                aria-describedby="cost"
                                            >
                                        </div>


                                    </div>
                                    <center><button type="submit" class="btn btn-primary mb-4">Submit</button></center>
                                  </form>
                            
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                  </div>
                  @endif

  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><span class="green">Roast / Blend</span></th>
            <th scope="col"><span class="green">Weight</span></th>
            <th scope="col"><span class="green">Price</span></th>
            @if(Auth::check()) <th scope="col"></th> @endif
          </tr>
        </thead>
        <tbody>
        @foreach ($beanbags as $beanbag)
          <tr>
            <td><p class="lead fw-normal mt-3"><strong>{{ $beanbag->blend }}</strong></p></td>
            <td><p class="mt-4"><strong>{{ $beanbag->oz }} oz.</strong></p></td>
            <td><p class="mt-4"><strong>${{ $beanbag->cost }}</strong></p></td>
            @if(Auth::check())
            <td>
              <a  type="button" 
                      class="btn btn-primary btn-sm mt-3" 
                      href="/menu/beanbags/{{ $beanbag->id }}/edit" 
                      role="button"
                  >
                    <i class="bi bi-pencil-square"></i>
                  </a>
            </td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
    <div class="col-sm-3"></div>
    
</section>