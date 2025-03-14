<x-layout doctitle="Edit Coffee Prices" :game="$game">
    <section style="margin-top: 120px;">
            <div class="row">
                <div class="col"></div>

                <div class="col">
    
                    <form method="POST" action="/menu/beanbags/{{ $beanbag->id }}/edit">
                        @csrf
                        @method('PATCH')
                        <center><p class="lead fw-normal green small" style="margin-bottom: 30px;">
                            <strong><i class="bi bi-caret-right-fill"></i> UPDATE</strong>
                        </p></center>
                        <div class="row">
                          <div class="mb-3 col-sm-1"></div>  
                          
                          <div class="mb-3 col-sm-5">
                            <label for="blend" class="form-label">
                                <strong><span class="green">Name</span></strong>
                            </label>
                            <input 
                                name="blend" 
                                type="text" 
                                class="form-control" 
                                id="blend" 
                                style="background-color: #fffde2"
                                aria-describedby="blend"
                                value="{{ $beanbag->blend }}">
                            </div>

                            <div class="mb-3 col-sm-5">
                                <label for="cost" class="form-label">
                                    <strong><span class="green">Price</span></strong>
                                </label>
                                <input 
                                    name="cost" 
                                    type="text" 
                                    class="form-control" 
                                    id="cost" 
                                    style="background-color: #fffde2"
                                    aria-describedby="cost"
                                    value="{{ $beanbag->cost }}">
                                </div>

                            <div class="mb-3 col-sm-1"></div> 
                        </div>
                        <div class="row mt-3 mb-4"><div class="col text-center">
                            <center><a href="/menu" class="btn btn-secondary">Back</a>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Submit</button>
                        </div></div>
                      </form>


                </div>

                <div class="col"></div>
            
            
            </div>
              
              

        </section>

<x-footer />
</x-layout>