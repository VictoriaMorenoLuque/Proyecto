

<?php $__env->startSection('contenido'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="vh-100" style="background-color: #ffffff;">
                <div class="container py-5 h-80">
                    <div class="row d-flex justify-content-center align-items-center h-80">
                        <div class="col col-lg-6 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <a href="<?php echo e(url('add-perfil')); ?>" class="btn btn-lg btn btn-success btn-block gradient-custom"><i class="fa fa-plus" aria-hidden="true"></i></a><br><br>
                                    <?php $__currentLoopData = $perfil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(asset('uploads/perfils/'.$item->profile_image)); ?>" alt="Avatar" class="img-fluid my-5" style="width: 80px;">
                                        <a href="<?php echo e(url('edit-perfil/'.$item->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="<?php echo e(url('delete-perfil/'.$item->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <h5><?php echo e(Auth::user()->name); ?></h5>
                                        <p><?php echo e(Auth::user()->surname); ?></p>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Información</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Rol</h6>
                                                    <p class="text-muted"><?php echo e(Auth::user()->role); ?></p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Grupo</h6>
                                                    <p class="text-muted">
                                                        ?
                                                    </p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Número de usuario</h6>
                                                    <p class="text-muted">
                                                        <?php echo e(Auth::user()->id); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/perfil/index.blade.php ENDPATH**/ ?>