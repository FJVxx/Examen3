<div>
    <form wire:submit.prevent="crear">
        <div class="text-center card">
            <div class="card-header">
                Create User
            </div>
            <div class="card-body">
                 @include('livewire.man-user.vista')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Create</button>
                <a href="{{route('man-user.view')}}" class="btn btn-primary btn-sm">Cancelar</a>  
            </div>
        </div>

    </form>
              
</div>

