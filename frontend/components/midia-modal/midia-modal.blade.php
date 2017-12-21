<!-- Modal -->
<div class="modal fade" id="midiaModal" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class='modal-content'>
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Midias</h5>
      </div>
    
      <div class="modal-body">

        <ul class="nav nav-tabs" id="midiaTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="novaMidia-tab" data-toggle="tab" href="#novaMidia" role="tab" aria-controls="novaMidia" aria-selected="true">
                    Novo
                </a>
            </li>
            @if( getContext() !== 'midia' )
            <li class="nav-item">
                <a class="nav-link" id="carregarMidia-tab" data-toggle="tab" href="#carregarMidia" role="tab" aria-controls="carregarMidia" aria-selected="false">
                    Biblioteca
                </a>
            </li>
            @endif
        </ul><!-- tabs -->

        <div class="tab-content" id="midiaTabContent">
            <div class="tab-pane fade show active" id="novaMidia" role="tabpanel" aria-labelledby="novaMidia-tab">
            @include( 'components.midia-modal.midia-new')
            </div>
            <div class="tab-pane fade" id="carregarMidia" role="tabpanel" aria-labelledby="carregarMidia-tab">
            @include( 'components.midia-modal.midia-search')
            </div>
        </div><!-- container -->
        
        @if( getContext() !== 'midia' )
        <div class="page-header">
            <h6>Midias escolhidas</h6>
        </div>
        @endif

      </div>
      
      <div class="modal-footer">
        @if( getContext() !== 'midia' )
        <button type="submit" class="btn btn-primary">Escolher</button>
        @else
        <button type="button" {!! clickOpen( 'midia' ) !!} class="btn btn-secondary" data-dismiss="modal">Fechar</button>        
        @endif
      </div>
    
    </div>
    </div>
</div>