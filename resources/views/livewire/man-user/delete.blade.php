<div>
<div class="card" style="width: 18rem;">
  <img style="width:150px; height:150px;" class="mx-auto card-img-top mt-3"
  src="{{Storage::disk('public')->url($us->foto) }}"
  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$us->nombre}}</h5>
    <p class="card-text">{{$us->email}}</p>
    <button wire:click="delete" class="btn btn-primary">Comfirmar</button>
    <a href="{{route('man-user.index-user')}}" class="btn btn-secondary btn-sm">Cancelar</a>
  </div>
</div>
</div>
