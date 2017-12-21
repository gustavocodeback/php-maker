<div class="row pt-3">
    <div class="col-xs-12 col-sm-8">
        <div id="newMidiaInput" class="slim">
            <input type="file" name="slim[]" required />
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">

        <div class="well pb-5">
            <b class="d-block">Nome</b>
            <small class="d-block">arquivo.txt</small>
            <b class="d-block">Nome</b>
            <small class="d-block">arquivo.txt</small>
            <b class="d-block">Nome</b>
            <small class="d-block">arquivo.txt</small>
            <b class="d-block">Nome</b>
            <small class="d-block">arquivo.txt</small>

            <div class="p-1 mt-3 alert alert-success">
                <p>Sua imagem foi salva com sucesso!</p>
            </div>
        </div>

        @if( getContext() !== 'midia' ) 
        <button onclick="uploadCurrentImage()" class="btn btn-success">
            Salvar foto
        </button>
        @endif
    </div>
</div>
