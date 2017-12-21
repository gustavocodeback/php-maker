<?php $__env->startSection('content'); ?>
    <?php echo $__env->make( 'components.midia-modal.midia-modal' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="midias" class="row pr-3">
        <div class="col bg-light z-depth-1 rounded pb-3">
            
            <div class="page-header">
                <h2>Midias</h2>
            </div>

            <div class="row">
                <div class="col p-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Encontre suas midias..." aria-label="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Pesquisar!</button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div data-ratio="1:1"
                     data-max="2"
                     data-min="1"
                     data-input="files[]"
                     data-minwidth="100"
                     data-maxwidth="400"
                     data-minheight="100"
                     data-maxheight="400" 
                     class="midia-seletor midia-content text-center col-xs-12 col-md-2 pt-4 m-1">
                    <small>
                        Adicionar nova imagem <br>
                        <i class="fa fa-plus"></i>
                    </small>
                </div>

                <?php $__currentLoopData = $midias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $midia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="midia-content col-xs-12 col-md-2 p-0 m-1" title="<?php echo e($midia->name); ?>">
                    <a href="<?php echo e($midia->path()); ?>" data-lightbox="midias">
                        <img class="position-absolute" src="<?php echo e($midia->path()); ?>">
                    </a>
                    <button <?php echo clickOpen( 'midia/delete/'.$midia->id ); ?> class="btn btn-danger btn-sm position-absolute" title="Remover imagem">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>