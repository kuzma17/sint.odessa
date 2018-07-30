@if(Request::path() != 'contacts')
<div class="map"  id="map"></div>
<script type="text/javascript">
    var map;
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 46.499583, lng: 30.7426}
        });

        var locations = [
            {
                title: 'Главный офис. Адмиральский пр, 33а',
                position: {lat: 46.43711, lng: 30.730315}
                //icon: {
                 //   url: "images/markers/svg/Arrow_1.svg",
                 //   scaledSize: new google.maps.Size(96, 96)
                //}

            },
            {
                title: 'пл. Соборная 12',
                position: {lat: 46.482146, lng: 30.730281}

            },
            {
                title: 'Днепропетровская дор., 94',
                position: {lat: 46.575718, lng: 30.7951071}


            },
            {
                title: 'ул. Академика Королева, 33',
                position: {lat: 46.400676, lng: 30.72347}

            }
        ];

        locations.forEach(function (element) {
            var marker = new google.maps.Marker({
                position: element.position,
                map: map,
                title: element.title,
                //icon: '/images/logo_icon.gif'
            });
            var contentString = '<div class="map_message">'+ element.title +'</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString});

                google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        });

    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-tzqTftm3ZEf0jOCDI9gpnXgpZRuZcTQ&callback=initMap"></script>


<div id="mapdiv" class="map"></div>
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
<script>

    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());

    var pois = new OpenLayers.Layer.Text( "My Points",
            { location:"./textfile.txt",
                projection: map.displayProjection
            });
    map.addLayer(pois);
    // create layer switcher widget in top right corner of map.
    var layer_switcher= new OpenLayers.Control.LayerSwitcher({});
   // map.addControl(layer_switcher);
    //Set start centrepoint and zoom
    var lonLat = new OpenLayers.LonLat(30.7426, 46.499583)
            .transform(
                    new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                    map.getProjectionObject() // to Spherical Mercator Projection
            );
    var zoom=11;

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);

    var size = new OpenLayers.Size(21,25);
    var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
    var icon = new OpenLayers.Icon('http://sint.odessa.ru/images/logo_icon.gif', size, offset);

    var marker1 = new OpenLayers.LonLat(30.730315, 46.43711).transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
    );
    var marker2 = new OpenLayers.LonLat(30.730281, 46.482146).transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
    );
    var marker3 = new OpenLayers.LonLat(30.7951071, 46.575718).transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
    );
    var marker4 = new OpenLayers.LonLat(30.72347, 46.400676).transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
    );

    markers.addMarker(new OpenLayers.Marker(marker1, icon));
    markers.addMarker(new OpenLayers.Marker(marker2, icon.clone()));
    markers.addMarker(new OpenLayers.Marker(marker3, icon.clone()));
    markers.addMarker(new OpenLayers.Marker(marker4, icon.clone()));

    map.setCenter (lonLat, zoom);

    var popup1 = new OpenLayers.Popup.FramedCloud("Popup", marker1, null, "Адмиральский пр.33А", null, true);
    var popup2 = new OpenLayers.Popup.FramedCloud("Popup", marker2, null, "пл. Соборная 12", null, true);
    var popup3 = new OpenLayers.Popup.FramedCloud("Popup", marker3, null, "Днепропетровская дор., 94", null, true);
    var popup4 = new OpenLayers.Popup.FramedCloud("Popup", marker4, null, "ул. Академика Королева, 33", null, true);

    map.addPopup(popup1, false);
    map.addPopup(popup2, false);
    map.addPopup(popup3, false);
    map.addPopup(popup4, false);

</script>

    @endif