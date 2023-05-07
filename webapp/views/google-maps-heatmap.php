<?php $this->layout("_theme", [
        'title' => "SIAGEO - Densidade Kernel"
    ]);
?>

<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h6><i class="fa fa-map"></i> Densidade Kernel (Mancha criminal) com Google Maps</h6>
            </div>
            <div class="card-body">
                <div class="maparea" id="map"></div>
            </div>
        </div><!-- end card-->
    </div>
</div>

<?php $this->start('scripts'); ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="js/kernel-density.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_NGgvp-ZvQ6x0SARJtQ7z0WXPjBccF7E&callback=initMap&libraries=visualization&v=weekly"
      defer
    ></script>
<?php $this->end(); ?>
