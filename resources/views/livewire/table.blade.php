<div class="divTable">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
            <tr>
                <td>{{$new->id}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->description}}</td>
                <td><button class="editar" wire:click="edit({{$new->id}})">Editar</button></td>
                <td><button class="eliminar"  wire:click="destroy({{$new->id}})">Eliminar</button></td>
            </tr>
            @endforeach    
        </tbody>
    </table>
    @if(session()->has('msj'))
    <p>
        Se guardo correwctamente
    </p>
    @endif
</div>