

<?php $__env->startSection('contenido'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar foto de perfil
                        <a href="<?php echo e(url('perfils')); ?>" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="<?php echo e(url('update-perfil/'.$perfil->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group mb-3">
                            <label for="">Foto de perfil</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="<?php echo e(asset('uploads/perfils/'.$perfil->profile_image)); ?>" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/perfil/edit.blade.php ENDPATH**/ ?>