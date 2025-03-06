<section class="px-4" style="padding-bottom: 0px;">
  <div class="text-center"><h3 class="font-alt green"><u><i class="bi bi-caret-right-fill"></i> Coffees, Lattes* &amp; More</u></h3></div>
  
  
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
                <td><p class="lead fw-normal mt-3"><strong>{{ $hotdrink->type }}</strong></p></td>
                <td><p class="mt-4"><strong>{{ $hotdrink->small }}</strong></p></td>
                <td><p class="mt-4"><strong>{{ $hotdrink->medium }}</strong></p></td>
                <td><p class="mt-4"><strong>{{ $hotdrink->large }}</strong></p></td>
                @if(Auth::check())
                <td>
                  <a  type="button" 
                      class="btn btn-primary btn-sm mt-3" 
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