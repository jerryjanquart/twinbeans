<x-layout :game="$game">

    
            <div class="row" style="margin-top: 150px; min-height: 600px;">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <center>
                    <h1 class="display-1 lh-1 mt-4 mb-4">Login</h1>
                    </center>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                            <label for="email" class="form-label"><strong><span class="green">Email</span></strong></label>
                            <input 
                                name="email" 
                                type="text" 
                                class="form-control" 
                                id="email" 
                                style="background-color: #fffde2"
                                aria-describedby="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="password" class="form-label"><strong><span class="green">Password</span></strong></label>
                                <input 
                                    name="password"
                                    type="text" 
                                    class="form-control" 
                                    id="password" 
                                    style="background-color: #fffde2"
                                    aria-describedby="password">
                            </div>
                        </div>

                        
                        <center><button type="submit" class="btn btn-primary mb-4">Submit</button></center>
                    </form>
                
                </div>
                <div class="col-lg-4"></div>
            </div>
        

<x-footer />
</x-layout>