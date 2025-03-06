<section class="px-2">
  <div class="text-center"><h3 class="font-alt"><span class="green"><u><i class="bi bi-caret-right-fill"></i> Don Turo&#8212;Whole Bean</u></span></h3></div>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><span class="green">1 lb. Bags</span></th>
            <th scope="col"><span class="green">Price</span></th>
            @if(Auth::check()) <th scope="col"></th> @endif
          </tr>
        </thead>
        <tbody>
        @foreach ($beanbags as $beanbag)
          <tr>
            <td><p class="lead fw-normal mt-3"><strong>{{ $beanbag->blend }}</strong></p></td>
            <td><p class="mt-4"><strong>{{ $beanbag->cost }}</strong></p></td>
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