<style>  

.formAdmin{
    padding: 30px;
    background-color: white;
    margin-top: 50px;
}
.formAdmin h2{
    text-align: center;
}
.formAdmin label{
    display: block;
    font-size: 19px;
    font-weight: 600;
    color: #e5313f;
}
.formAdmin input[type=text]{
    height: 50px;
    width: 100%;
    border-radius: 5px;
    outline: none;
    border:1px solid #c4c4c4;
    margin-bottom: 20px;
    padding-left: 20px;
}
.formAdmin input[type=text]:focus{
    border:1px solid #2196F3;
    background-color: rgb(248, 248, 248);
}
.ck .ck-content{
    height: 400px;
    margin-bottom: 20px;
}
.formAdmin button{
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
.formAdmin button:hover{
    background: #264e8f;
}
.formAdmin button:active{
    background: #012a6d;
}

</style>
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<div class="container">
    <div class="formAdmin">
        <div>
            <label for="">Titulo</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Descripcion</label>
            <input type="text" name="" id="">
        </div>
        <div>
            <label for="">Body</label>
            <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
        </div>
        <div>
            <label for="">Selecciona una imagen</label>
            <input type="file" name="" id="">
        </div>
        <div>
            <button>Cargar</button>
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );
    </script>
</div>