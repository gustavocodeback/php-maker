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
            <?php if( getContext() !== 'midia' ): ?>
            <li class="nav-item">
                <a class="nav-link" id="carregarMidia-tab" data-toggle="tab" href="#carregarMidia" role="tab" aria-controls="carregarMidia" aria-selected="false">
                    Biblioteca
                </a>
            </li>
            <?php endif; ?>
        </ul><!-- tabs -->

        <div class="tab-content" id="midiaTabContent">
            <div class="tab-pane fade show active" id="novaMidia" role="tabpanel" aria-labelledby="novaMidia-tab">
            <?php echo $__env->make( 'components.midia-modal.midia-new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="tab-pane fade" id="carregarMidia" role="tabpanel" aria-labelledby="carregarMidia-tab">
            <?php echo $__env->make( 'components.midia-modal.midia-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div><!-- container -->
        
        <?php if( getContext() !== 'midia' ): ?>
        <div class="page-header">
            <h6>Midias escolhidas</h6>
        </div>
        <?php endif; ?>

      </div>
      
      <div class="modal-footer">
        <?php if( getContext() !== 'midia' ): ?>
        <button type="submit" class="btn btn-primary">Escolher</button>
        <?php else: ?>
        <button type="button" <?php echo clickOpen( 'midia' ); ?> class="btn btn-secondary" data-dismiss="modal">Fechar</button>        
        <?php endif; ?>
      </div>
    
    </div>
    </div>
</div>