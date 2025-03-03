<x-layout doctitle="Edit {!! $machine->name !!}" :game="$game">

<section class="mx-5">

    <div class="row" style="margin-top: 90px; margin-bottom: 20px;">
        <div class="col-12 text-center">
                <p class="lead fw-normal green small">
                    <i class="bi bi-lightning-charge-fill"></i> EDIT</strong>
                </p>    
            <h1 class="display-1 lh-1 mb-3"> {!! $machine->name !!} </h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 60px;">
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <img src="/assets/images/machines/{{ $machine->slug }}.jpg" width="100%" style="border-top-left-radius:15px; border-bottom-left-radius: 15px;" />
        </div>
        <div class="col-lg-5 mt-3">
            <form method="POST" action="/machines/{{ $machine->slug }}/edit">
                @csrf
                @method('PATCH')

                <div class="row">    
                    <div class="mb-3 col-sm-6">
                    <label for="name" class="form-label"><strong><span class="green">Name</span></strong></label>
                    <input 
                        name="name" 
                        type="text" 
                        class="form-control" 
                        id="name" 
                        aria-describedby="name"
                        value="{{ $machine->name }}"
                        style="background-color: #fffde2"
                        >
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="slug" class="form-label"><strong><span class="green">Slug</span></strong></label>
                        <input 
                            name="slug"
                            type="text" 
                            class="form-control" 
                            id="slug" 
                            aria-describedby="slug"
                            value="{{ $machine->slug }}"
                            style="background-color: #fffde2"
                            >
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
                            aria-describedby="year"
                            value="{{ $machine->year }}"
                            style="background-color: #fffde2"
                            >
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="manufacturer" class="form-label"><strong><span class="green">Manufacturer</span></strong></label>
                        <input 
                            name="manufacturer"
                            type="text" 
                            class="form-control" 
                            id="manufacturer" 
                            aria-describedby="manufacturer"
                            value="{{ $machine->manufacturer }}"
                            style="background-color: #fffde2"
                            >
                    </div>
                </div>
                <div class="mb-4">
                    <label for="headline" class="form-label"><strong><span class="green">Headline</span></strong></label>
                    <textarea 
                       class="form-control" 
                       id="headline" 
                       name="headline" 
                       rows="2" 
                       style="background-color: #fffde2"

                    >{{ $machine->headline }}
                    </textarea>
                 </div>
                <div class="mb-4">
                    <label for="about" class="form-label"><strong><span class="green">About</span></strong></label>
                    <textarea 
                       class="form-control" 
                       id="about" 
                       name="about" 
                       rows="5" 
                       style="background-color: #fffde2"
                    >{{ $machine->about }}
                    </textarea>
                 </div>
                 <div class="row">
                    <div class="mb-5 col-sm-4">
                    <label class="form-label"><strong><span class="green">Active</span></strong></label>
                    <select 
                        name="active" 
                        type="boolean" 
                        class="form-select" 
                        id="active"
                        value="{{ $machine->active }}"
                    >
                        <!-- saving the option chosen to reload on failure found here: https://stackoverflow.com/a/47568222 -->
                        <option value="false" @if ( $machine->active == "false") {{ 'selected' }} @endif>No</option>
                        <option value="true" @if ( $machine->active == "true") {{ 'selected' }} @endif>Yes</option>
                    </select>
                    </div>
                    <div class="col-sm-8"></div>
                </div>

                    <center><a href="/machines/{{ $machine->slug }}" class="btn btn-secondary">View Game</a>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">Update</button></center>
              </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</section>

    <x-footer />
</x-layout>