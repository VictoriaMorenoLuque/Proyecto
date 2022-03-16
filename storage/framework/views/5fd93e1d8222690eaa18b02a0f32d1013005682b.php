

<?php $__env->startSection('contenido'); ?>
  <br><br>
  <div class="container">
      <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
      <div id='calendar'></div> 
      </div>
      <div class="col-2
      "></div>
      </div>
  </div>
  
      <script>
         $(document).ready(function () {
            
         var SITEURL = "<?php echo e(url('/')); ?>";
           
         $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         var calendar = $('#calendar').fullCalendar({
                             editable: true,
                             events: SITEURL + "/fullcalender",
                             displayEventTime: false,
                             editable: true,
                             eventRender: function (event, element, view) {
                                 if (event.allDay === 'true') {
                                         event.allDay = true;
                                 } else {
                                         event.allDay = false;
                                 }
                             },
                             selectable: true,
                             selectHelper: true,
                             select: function (start, end, allDay) {
                                 var title = prompt('Evento:');
                                 if (title) {
                                     var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                     var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                     $.ajax({
                                         url: SITEURL + "/fullcalenderAjax",
                                         data: {
                                             title: title,
                                             start: start,
                                             end: end,
                                             type: 'add'
                                         },
                                         type: "POST",
                                         success: function (data) {
                                             displayMessage("Evento creado con éxito.");
           
                                             calendar.fullCalendar('renderEvent',
                                                 {
                                                     id: data.id,
                                                     title: title,
                                                     start: start,
                                                     end: end,
                                                     allDay: allDay
                                                 },true);
           
                                             calendar.fullCalendar('unselect');
                                         }
                                     });
                                 }
                             },
                             eventDrop: function (event, delta) {
                                 var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                 var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
           
                                 $.ajax({
                                     url: SITEURL + '/fullcalenderAjax',
                                     data: {
                                         title: event.title,
                                         start: start,
                                         end: end,
                                         id: event.id,
                                         type: 'update'
                                     },
                                     type: "POST",
                                     success: function (response) {
                                         displayMessage("Evento modificado correctamente.");
                                     }
                                 });
                             },
                             eventClick: function (event) {
                                 var deleteMsg = confirm("¿Quiéres borrar el evento?");
                                 if (deleteMsg) {
                                     $.ajax({
                                         type: "POST",
                                         url: SITEURL + '/fullcalenderAjax',
                                         data: {
                                                 id: event.id,
                                                 type: 'delete'
                                         },
                                         success: function (response) {
                                             calendar.fullCalendar('removeEvents', event.id);
                                             displayMessage("Evento borrado");
                                         }
                                     });
                                 }
                             }
          
                         });
          
         });
         function displayMessage(message) {
             toastr.success(message, 'Event');
         } 
         
      </script>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/fullcalender.blade.php ENDPATH**/ ?>