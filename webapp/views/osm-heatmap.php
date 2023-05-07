<?php
    $this->layout("_theme", [
        'title' => "SIAGEO - Densidade Kernel"
    ]);
?>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <h6><i class="fa fa-map"></i> Densidade Kernel (Mancha criminal) com Open Street Map</h6>
            </div>
            <div class="card-body"></div>
                <div id="map-osm"></div>
            </div>
        </div><!-- end card-->
    </div>
</div>

<?php //$this->start('scripts'); ?>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet-heat.js"></script>
    <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
    <script src="js/criminalpoints.js"></script>
    <script src="js/kernel-density-osm.js"></script>
<?php //$this->end(); ?>
