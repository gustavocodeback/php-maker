<?php $__env->startSection('content'); ?>
    <?php echo form_open( 'auth/change_password/'.$token, [ 'class' => 'pb-5 col-md-4 offset-md-4'] ); ?>


        <?php echo inputEmail( 'E-mail','email', [ 'icon' => 'at', 'attr' => [ 'required' => 'required' ]  ] ); ?>

        <?php echo inputPassword( 'Nova senha','password', [ 'icon' => 'lock', 'attr' => [ 'required' => 'required' ]  ] ); ?>

        <?php echo inputPassword( 'Confirme a nova senha','confirm', [ 'icon' => 'lock', 'attr' => [ 'required' => 'required' ]  ] ); ?>


        <div class="row mt-3">
            <div class="col text-right">
                <a class="text-light" href="<?php echo e(site_url( 'auth' )); ?>">Voltar ao login</a>
            </div>
        </div><!-- links de ação -->

        <?php echo $__env->make( 'components.error-alert' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make( 'components.success-alert' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-block btn-success">Entrar</button>
            </div>
        </div><!-- botao de login -->
    <?php echo form_close(); ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>