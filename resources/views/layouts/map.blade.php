<div id="mapdiv" class="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&callback=initMap" async defer></script>
<script>
    let map;
    let markers = [];

    function initMap() {

        map = new google.maps.Map(document.getElementById("mapdiv"), {
            center: { lat: 46.499583, lng: 30.7426 },
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        addMarker(30.730315, 46.43711, "@lang('main.office_admiralsky')");
        addMarker(30.730281, 46.482146, "@lang('main.office_soborka')");
        addMarker(30.7951071, 46.575718, "@lang('main.office_dneprodoroga')");
        addMarker(30.72347, 46.400676, "@lang('main.office_koroleva')");
    }

    function addMarker(lng, lat, title) {
        const marker = new google.maps.Marker({
            position: { lat: lat, lng: lng },
            map: map,
            title: title,
            // icon: {
            //     url: '/images/logo_icon.gif',
            //     scaledSize: new google.maps.Size(30, 30),
            //     anchor: new google.maps.Point(15, 15)
            // }
        });

        const infowindow = new google.maps.InfoWindow({
            content: title,
        });

        marker.addListener('mouseover', () => {
            infowindow.open(map, marker);
        });

        marker.addListener('mouseout', () => {
            infowindow.close();
        });

        markers.push(marker);
    }
</script>