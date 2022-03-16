

<?php $__env->startSection('contenido'); ?>
<br /><br />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar
                        <a href="<?php echo e(url('posts')); ?>" class="btn btn-danger float-end"><i class="fa fa-undo" aria-hidden="true"></i></a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="<?php echo e(url('update-post/'.$post->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group mb-3">
                            <label for="" class="form-label">Nombre:</label>
                            <input id="plantName" name="plantName" value="<?php echo e($post->plantName); ?>" type="text" class="form-control" tabindex="1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Familia:</label>
                            <input id="plantFamily" name="plantFamily" value="<?php echo e($post->plantFamily); ?>" type="text" class="form-control" tabindex="2">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Descripción:</label>
                            <input id="description" name="description" value="<?php echo e($post->description); ?>" type="text" class="form-control" tabindex="3">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Latitud:</label>
                            <input id="latitude" name="latitude" value="<?php echo e($post->latitude); ?>" type="text" class="form-control" tabindex="4">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Longitud:</label>
                            <input id="longitude" name="longitude" value="<?php echo e($post->longitude); ?>" type="text" class="form-control" tabindex="5">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="imagen" class="form-control" tabindex="6">
                            <br>
                            <img src="<?php echo e(asset('uploads/posts/'.$post->imagen)); ?>" width="200px" height="200px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                        <a href="/posts" class="btn btn-lg btn btn-secondary btn-block" tabindex="7"><i class="fa fa-ban" aria-hidden="true"></i></a>
                        <button type="submit" class="btn btn-lg btn btn-success btn-block gradient-custom" tabindex="8"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/post/edit.blade.php ENDPATH**/ ?>