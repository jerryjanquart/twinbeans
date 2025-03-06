<x-layout  doctitle="Edit Drink Prices" :game="$game">
    <section style="margin-top: 120px;">
            <div class="row">
                <div class="col"></div>

                <div class="col">

                    <center><p class="lead fw-normal green small" style="margin-bottom: 30px;">
                        <strong><i class="bi bi-caret-right-fill"></i> UPDATE: {{ $hotdrink->type }}</strong>
                    </p></center>
    
                    <form method="POST" action="/menu/hotdrinks/{{ $hotdrink->id }}/edit">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            
                          <div class="mb-3 col-sm-4">
                              <label for="small" class="form-label">
                                <strong><span class="green">12 oz.</span></strong>
                              </label>
                            <input 
                                name="small" 
                                type="text" 
                                class="form-control" 
                                id="small" 
                                style="background-color: #fffde2"
                                aria-describedby="small"
                                value="{{ $hotdrink->small }}">
                            </div>
        
                            <div class="mb-3 col-sm-4">
                              <label for="medium" class="form-label">
                                <strong><span class="green">16 oz.</span></strong>
                              </label>
                            <input 
                                name="medium" 
                                type="text" 
                                class="form-control" 
                                id="medium" 
                                style="background-color: #fffde2"
                                aria-describedby="medium"
                                value="{{ $hotdrink->medium }}">
                            </div>
        
                            <div class="mb-3 col-sm-4">
                              <label for="large" class="form-label">
                                <strong><span class="green">20 oz.</span></strong>
                              </label>
                            <input 
                                name="large" 
                                type="text" 
                                class="form-control" 
                                id="large" 
                                style="background-color: #fffde2"
                                aria-describedby="large"
                                value="{{ $hotdrink->large }}">
                            </div>
                        
                        
                        </div>
                        <div class="row mt-3 mb-4"><div class="col text-center">
                            <center><a href="/menu" class="btn btn-secondary mb-3">Back</a>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </div></div>
                      </form>


                </div>

                <div class="col"></div>
            
            
            </div>
              
              

        </section>

<x-footer />
</x-layout>