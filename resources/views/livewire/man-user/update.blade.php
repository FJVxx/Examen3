<div>
    <form wire:submit.prevent="update">
        <div class="text-center card">
            <div class="card-header">
                update User
            </div>
            <div class="card-body">
                 @include('livewire.man-user.vista')
            </div>
            <div class="card-footer text-muted">
                <button wire:click="update" class="btn btn-sucess"><i class="fa fa-iedit"></i> Modificar</button>
                <a href="{{route('man-user.view')}}" class="btn btn-primary btn-sm">Cancelar</a>  
            </div>
        </div>

    </form>
              
</div>
