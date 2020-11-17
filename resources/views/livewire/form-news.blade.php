<div>
    <style>
        .alert{
            margin: 10px;
        }
        .alert ul{
            list-style: none;
        }
        .formAdmin {
            padding: 30px;
            background-color: white;
            margin-top: 50px;
        }

        .formAdmin h3 {
            color: #484646;
            text-align: center;
        }

        .formAdmin label {
            display: block;
            font-size: 19px;
            font-weight: 600;
            color: #e5313f;
        }

        .formAdmin input[type=text] {
            height: 50px;
            width: 100%;
            border-radius: 5px;
            outline: none;
            border: 1px solid #c4c4c4;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .formAdmin input[type=text]:focus {
            border: 1px solid #2196F3;
            background-color: rgb(248, 248, 248);
        }

        .ck .ck-content {
            height: 400px;
            margin-bottom: 20px;
        }
        .formAdmin textarea{
            width: 100%;
            height: 200px;
            outline: none;
            border: 1px solid #c4c4c4;
            padding: 20px;
        }
        .formAdmin select{
            height: 50px;
            width: 30%;
            border-radius: 5px;
            outline: none;
            border: 1px solid #c4c4c4;
            margin-bottom: 20px;
            padding-left: 20px;
        }
        .formAdmin button {
            height: 50px;
            width: 200px;
            color: white;
            background: #003384;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            margin-top: 30px;
            transition: all 0.2s;
            outline: none;
        }

        .formAdmin button:hover {
            background: #264e8f;
        }

        .formAdmin button:active {
            background: #012a6d;
        }
    </style>
    <div class="container">
        <div class="formAdmin">
            <h3>
                Redacta una nueva noticia
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
                <label for="">Selecciona una imagen</label>
                <input wire:model="file" type="file" name="" id="">
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
            <div>
                <button wire:click="store">Cargar</button>
            </div>
    
        </div>        
    </div>
</div>