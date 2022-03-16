

<?php $__env->startSection('contenido'); ?>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-1">
        </div>
        <div class="col-5">
        <div class="card">
                <div class="card-header mb-2 text-muted"> Notificaciones no leidas</div>
                <div class="card-body">

                    <?php if(auth()->user()): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $messageNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="card-subtitle mb-2 text-muted"><?php echo e($notification->data['title']); ?></h4>
                        <h5 class="card-subtitle mb-2 text-muted"><?php echo e($notification->data['description']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($notification->created_at->diffForHumans()); ?></h6>
                        <!-- <a href="/markAsRead" type="submit" class="btn btn-lg btn btn-secondary btn-block" data-id="<?php echo e($notification->id); ?>">Marcar como leída</a> -->
                    </div>
                    <?php if($loop->last): ?>
                    <a href="/markAsRead" class="btn btn-lg btn btn-success btn-block gradient-custom" id="mark-all">Marcar todas como leídas</a>

                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h6 class="card-subtitle mb-2 text-muted">No hay notificaciones</h6>
                    <?php endif; ?>

                    <?php endif; ?>

                </div>
        </div>
        </div>
        <div class="col-5">
        <div class="card">
                <div class="card-header mb-2 text-muted"> Notificaciones leidas</div>
                <div class="card-body">

                    <?php if(auth()->user()): ?>
                    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->readNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="card-subtitle mb-2 text-muted"><?php echo e($notification->data['title']); ?></h4>
                        <h5 class="card-subtitle mb-2 text-muted"><?php echo e($notification->data['description']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($notification->created_at->diffForHumans()); ?></h6>
                       
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h6 class="card-subtitle mb-2 text-muted">No hay notificaciones leídas</h6>
                    <?php endif; ?>

                    <?php endif; ?>

                </div>
        </div>
        </div>
        <div class="col-1">
        </div>
    </div>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function sendMarkRequest(id = null) {
        return $.ajax("<?php echo e(route('markNotification')); ?>", {
            method: 'POST',
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                id
            }
        });
    }

    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));

            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });

        $('#mark-all').click(function() {
            let request = sendMarkRequest();

            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
</script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/message/notifications.blade.php ENDPATH**/ ?>