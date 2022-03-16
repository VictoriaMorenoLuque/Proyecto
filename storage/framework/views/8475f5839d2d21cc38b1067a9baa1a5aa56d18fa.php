

<?php $__env->startSection('contenido'); ?>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="/messages" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="" class="form-label">Destinatario:</label>
                            <select id="addressee" name="addressee" type="text" class="form-control" placeholder="Título" tabindex="1">
                                <option value=" ">Selecciona el destinatario</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Título:</label>
                            <input id="title" name="title" type="text" class="form-control" placeholder="Título" tabindex="2">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mensaje:</label>
                            <input id="description" name="description" type="text" class="form-control" placeholder="Mensaje" tabindex="3">
                        </div>
                        <br>
                        <button type="reset" class="btn btn-lg btn btn-secondary btn-block" tabindex="3">Cancelar</button>
                        <button type="submit" class="btn btn-lg btn btn-success btn-block gradient-custom" tabindex="4">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(session('enviar') == 'Ok'): ?>
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Mensaje enviado',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/message/create.blade.php ENDPATH**/ ?>