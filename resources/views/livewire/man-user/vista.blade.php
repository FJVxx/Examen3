<div class="row ">

            <div wire:loading wire:target="foto" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
            </div>

            <div class="col-4">
                @if($foto != null)
                    <img style="width: 140px;height: 140px;" 
                    src="{{ $foto->temporaryUrl() }}" 
                    alt="">
                @else
                    <img style="width: 140px;height: 140px;" 
                    src="{{ Storage::disk('public')->url($us->foto != null ? $us->foto : 'images/manuser/default.png  ') }}"
                    alt="">
                @endif
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                        @error('foto') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="col-6 mx-auto">  
                    <div class="form-group">
                        <label>nombre</label>
                        <input wire:model="us.nombre_usuario" type="text" class="form-control">
                        @error('us.nombre_usuario') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>email</label>
                        <input wire:model="us.email" type="text" class="form-control">
                        @error('us.email') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
                    <div class="form-group">
                        <label>password</label>
                        <input wire:model="us.password" type="text" class="form-control">
                        @error('us.password') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                                    
            </div>
</div>