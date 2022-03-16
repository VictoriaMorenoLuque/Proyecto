

<?php $__env->startSection('contenido'); ?>
<div class="content">
    <div class="row">
        <div class="mapform">
        <br>
            <div id="map" style="height:600px; width: 1300px;" class="my-3"></div>
            <script>
                let map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById("map"), {
                        center: {
                            lat: 37.8847,
                            lng: -4.77915
                        },
                        zoom: 15,
                        scrollwheel: true,
                    });

                    const uluru = {
                        lat: 37.8847,
                        lng: -4.77915
                    };
                    let marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                        draggable: true
                    });

                    google.maps.event.addListener(marker, 'position_changed',
                        function() {
                            let lat = marker.position.lat()
                            let lng = marker.position.lng()
                            $('#lat').val(lat)
                            $('#lng').val(lng)
                        })

                    google.maps.event.addListener(map, 'click',
                        function(event) {
                            pos = event.latLng
                            marker.setPosition(pos)
                        })
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" type="text/javascript"></script>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/map.blade.php ENDPATH**/ ?>