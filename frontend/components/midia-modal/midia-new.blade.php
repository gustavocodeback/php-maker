<div class="row pt-3">
    <div class="col-xs-12 {{ getContext() !== 'midia' ? 'col-sm-8' : 'col-sm-8 offset-sm-2' }}">
        <div id="newMidiaInput" class="slim">
            <input type="file" name="slim[]" required />
        </div>
    </div>
    @if( getContext() !== 'midia' )     
    <div class="col-xs-12 col-sm-4">
        <button onclick="uploadCurrentImage()" class="btn btn-success">
            Usar foto
        </button>
    </div>
    @endif
</div>
