<style>

</style>
<div class="divForm">
    <div class="formAdmin">
        <h3>
            Crear nueva noticia
        </h3>
        <div>
            <label for="">Titulo</label>
            <input wire:model="title" type="text" name="" id="">
        </div>
        <div>
            <label for="">URL</label>
            <input wire:model="url" type="text" name="" id="">
        </div>
        <div>
            <label for="">Descripcion</label>
            <textarea wire:model="description"></textarea>
        </div>
        <div>
            <label for="">Entidad</label>
            <select name="" id="" wire:model="entity_id">
                <option value="">Entidad</option>
                @foreach($entities as $entity)
                <option value="{{$entity->id}}">{{$entity->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="file" for="file">Selecciona una imagen</label>
            <input wire:model="file" type="file" name="" id="file">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>