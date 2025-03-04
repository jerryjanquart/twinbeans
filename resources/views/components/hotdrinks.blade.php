<section class="px-4" style="padding-bottom: 0px;">
  <div class="text-center"><h3 class="font-alt green"><u><i class="bi bi-caret-right-fill"></i> Coffees, Lattes* &amp; More</u></h3></div>
  
  @if (session()->has('success'))
        <center>
        <div style="width: 600px;
        padding-top: 30px;" class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
            <center><p><strong><span class="green">
                <i class="bi bi-lightning-charge-fill"></i> 
                SUCCESS: {{session('success')}}
            </span></strong></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></center>
        </div>      
      </center>    
  @endif
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"><span class="green">12 oz.</span></th>
                <th scope="col"><span class="green">16 oz.</span></th>
                <th scope="col"><span class="green">20 oz.</span></th>
                @if(Auth::check()) <th scope="col"></th> @endif
              </tr>
            </thead>
            <tbody>
            @foreach ($hotdrinks as $hotdrink)
              <tr class="tea">
                <td><span class="lead fw-normal"><strong>{{ $hotdrink->type }}</strong></span></td>
                <td><span class="lead fw-normal">{{ $hotdrink->small }}</span></td>
                <td><span class="lead fw-normal">{{ $hotdrink->medium }}</span></td>
                <td><span class="lead fw-normal">{{ $hotdrink->large }}</span></td>
                @if(Auth::check())
                <td>
                  <a  type="button" 
                      class="btn btn-primary btn-sm" 
                      href="/menu/hotdrinks/{{ $hotdrink->id }}/edit" 
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
        <div class="col-sm-2"></div>
    </div>    
</section>