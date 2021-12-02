<div wire:init="cargando">
    @if (count($usuarios) > 0)
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-8">
                <div class="float-right mb-2"> 
                    <a href="/Index/Create" type="button" class="float-right mb-3 btn btn-success" class="fa fa-plus-circle">Crear usuario</a>
                </div>
            </div>
        </div>
        
        <table class="table text-center table-striped">
            <thead style="background-color: #B28A33;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th>Foto</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $us)
                    <tr>
                        <th scope="row">{{ $us->id }}</th>
                        <td>{{$us->nombre_usuario}}</td>
                        <th>
                            <img style="width:70px; height:70px;" 
                            src="{{ Storage::disk('public')->url($us->foto != null ? $us->foto : 'images/manuser/default.png') }}" 
                            alt="">
                        </th>
                        <td>{{$us->email}}</td>
                        <td>{{$us->password}}</td>

                        <td>
                            <a href="{{route('man-user.user-view', $us)}}" title="Mostrar mas" class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{route('man-user.update', $us)}}" title="Editar Curso"
                            class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{route('man-user.delete', $us)}}" title="Eliminar usuarios seleccionando mas"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        


    @else
        <img class="mx-auto d-block" style="width: 300px;weight: 300px;" src="{{Storage::disk('public')->url('images/otros/loader.gif')}}" alt="">
    @endif

        {{ $cargando == true ? $usuarios->links() : null }}
</div>