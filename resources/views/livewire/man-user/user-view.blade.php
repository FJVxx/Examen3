<div>
<div class="card mx-auto" style="width: 18rem;">
<img style="width:150px; height:150px;" class="mx-auto card-img-top mt-3"
src="{{Storage::disk('public')->url($us->foto) }}"
 alt="Card image cap">
  <div class="card-body text-center">
    <h5 class="card-title">{{$us->nombre_usuario}}</h5>
    <span class="card-text">{{$us->email}}</span>
    <small class="card-text">{{$us->password}}</small><br>
    
    <a href="{{route('man-user.view')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i>Regresar</a>
  </div>
</div>
</div>
