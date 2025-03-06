<x-layout doctitle="Menu" :game="$game">

    <div class="row" style="margin-top: 80px;">
        
        <div class="col-lg-8">
            <section id="left">
                <div class="row">
                    <div class="col">
                        
                        <div class="text-center">
                            <i class="bi bi-bullseye icon-feature text-gradient d-block"></i>
                            <h1 class="display-1 lh-1 mb-3 mt-2">Menu</h1>
                        </div>

                        @if (session()->has('success'))
                                <center>
                                <div class="alert alert-warning alert-dismissible fade show mt-4 mx-3 pt-4" role="alert">
                                    <center><p><strong><span class="green">
                                        <i class="bi bi-lightning-charge-fill"></i> 
                                        SUCCESS: {{session('success')}}
                                    </span></strong></p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></center>
                                </div>      
                            </center>    
                        @endif
                        <x-hotdrinks :hotdrinks="$hotdrinks" />
                        <x-teaflavors :teas="$teas" />
                        <x-bakeryitems />
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <x-snacks :snacks="$snacks" /> 
                            </div>
                            <div class="col-md-5">
                                <x-healthybites :healthybites="$healthybites" />
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <x-colddrinks :colddrinks="$colddrinks" /> 
                        <x-beanbags :beanbags="$beanbags" />
                        @if(Auth::check())
                        <center>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="btn btn-dark mt-3 mb-3" href="/logout">Logout</button> 
                            </form>
                        </center>
                        @endif
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-4" style="background:linear-gradient(45deg, #fdf58d, #428c53) !important;">
            <div class="row">
                <div class="col">
                    <section id="right">
                        <div class="row">
                            <div class="col">
                                <x-latteflavors :lattes="$lattes" /> 
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

<x-testimonials />
<x-footer />
</x-layout>