<x-layout doctitle="Pinball Machines" :game="$game">
    
    <div style="margin-top: 80px;">
        <x-pinballmachines :machines="$machines" :url="$url" />
    </div>

    <section class="mx-3">    
    
    <div style="min-height: 500px;">
        <center>
            <h3 class="font-alt">All Machines 
                <a  type="button" 
                    class="btn btn-primary btn-sm"
                    data-bs-toggle="collapse" 
                    href="#addmachine" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="addmachine"
                >
                    + ADD NEW
                </a>
            </h3>
        

        @if (session()->has('success'))
        <div style="width: 600px;
        padding-top: 30px;" class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
            <p><strong><span class="green">
                <i class="bi bi-lightning-charge-fill"></i> 
                SUCCESS: {{session('success')}}
            </span></strong></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>          
        @endif
    </center>

        
        <div class="collapse" id="addmachine">
            <div class="card card-body">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        
                        <form method="POST" action="/machines">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                <label for="name" class="form-label"><strong><span class="green">Name</span></strong></label>
                                <input 
                                    name="name" 
                                    type="text" 
                                    class="form-control" 
                                    id="name" 
                                    style="background-color: #fffde2"
                                    aria-describedby="name">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="slug" class="form-label"><strong><span class="green">Slug</span></strong></label>
                                    <input 
                                        name="slug"
                                        type="text" 
                                        class="form-control" 
                                        id="slug" 
                                        style="background-color: #fffde2"
                                        aria-describedby="slug">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-sm-6">
                                    <label for="year" class="form-label"><strong><span class="green">Year</span></strong></label>
                                    <input 
                                        name="year"
                                        type="text" 
                                        class="form-control" 
                                        id="year" 
                                        style="background-color: #fffde2"
                                        aria-describedby="year">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <label for="manufacturer" class="form-label"><strong><span class="green">Manufacturer</span></strong></label>
                                    <input 
                                        name="manufacturer"
                                        type="text" 
                                        class="form-control" 
                                        id="manufacturer" 
                                        style="background-color: #fffde2"
                                        aria-describedby="manufacturer">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="headline" class="form-label"><strong><span class="green">Headline</span></strong></label>
                                <textarea 
                                   class="form-control" 
                                   id="headline" 
                                   name="headline" 
                                   style="background-color: #fffde2"
                                   rows="2" 
                                ></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="about" class="form-label"><strong><span class="green">About</span></strong></label>
                                <textarea 
                                   class="form-control" 
                                   id="about" 
                                   name="about" 
                                   style="background-color: #fffde2"
                                   rows="5" 
                                ></textarea>
                             </div>
                            <div class="mb-4" width="50%">
                                <label class="form-label"><strong><span class="green">Active</span></strong></label>
                                <select 
                                    name="active" 
                                    type="boolean" 
                                    class="form-select"
                                    style="width: 50%" 
                                    id="active"
                                >
                                    <!-- saving the option chosen to reload on failure found here: https://stackoverflow.com/a/47568222 -->
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                            <center><button type="submit" class="btn btn-primary mb-4">Submit</button></center>
                          </form>
                    
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
          </div>

        
          

          
        <div class="row mt-3">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="green">Name</th>
                        <th scope="col" class="green">Year</th>
                        <th scope="col" class="green">Active</th>
                        <th scope="col" class="green">Edit</th>
                        <th scope="col" class="green">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allMachines as $machine)
                    <tr>
                        <td><a href="/machines/{{$machine->slug}}"><strong>{!! $machine->name !!}</strong></td>
                        <td>{{ $machine->year }}</td>
                        <td>{{ $machine->active }}</td>
                        <td>
                            <a type="button" class="btn btn-primary btn-sm" href="/machines/{{ $machine->slug }}/edit" role="button">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{ $machine->id }}">
                            <i class="bi bi-trash"></i>
                        </button>
  
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $machine->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <center><p class="mb-0">Are you sure you want to delete <strong>{!! $machine->name !!}</strong>?!</p></center>
                                    <form action="/machines/{{$machine->slug}}" method="POST" id="delete-replied-message">
                                        @csrf
                                        @method('DELETE')
                                            <center><button class="btn btn-danger btn-lg mt-3" href="" role="button">
                                                <i class="bi bi-trash"></i>
                                            </button></center>
                                    </form>
                                </div>
                                
                            </div>
                            </div>
                        </div>
  
                            
                            
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                    <center>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-dark mt-3 mb-3" href="/logout">Logout</button> 
                    </form>
                    </center>

            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>

</section>

<x-footer />

</x-layout>