

<?php $__env->startSection('contenido'); ?>
<a href="<?php echo e(url('add-post')); ?>" class="btn btn-lg btn btn-success btn-block gradient-custom"><i class="fa fa-plus" aria-hidden="true"></i></a><br><br>

<div class="container mx-auto mt-4">
    <div class="row">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
            <div class="card color">
                <div class="card-body">
                    <td>
                        <img src="<?php echo e(asset('uploads/posts/'.$item->imagen)); ?>" width="365px" height="300px" alt="Image">
                    </td>
                    <br><br>
                    <h5 class="card-subtitle mb-2 text-muted"><?php echo e($item->plantName); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($item->plantFamily); ?></h6>
                    <p><?php echo e($item->description); ?></p>
                    <div class="card-footer">
                        <form action="<?php echo e(url('delete-post/'.$item->id)); ?>" class="formularioEliminar" method="POST">
                            <a href="<?php echo e(url('edit-post/'.$item->id)); ?>" class="btn btn-lg btn btn-info btn-block"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-lg btn btn-danger btn-block" type=submit><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(session('eliminar') == 'Ok'): ?>
<script>
    Swal.fire(
        '¡Eliminado!',
        'Tu fichero ha sido eliminado.',
        'success'
    )
</script>
<?php endif; ?>

<script>
    $('.formularioEliminar').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás deshacer esta acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Swal.fire(
                //     '¡Eliminado!',
                //     'Tu fichero ha sido eliminado.suc',
                //     'Éxito'
                // )
                this.submit();
            }
        })

    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/post/index.blade.php ENDPATH**/ ?>