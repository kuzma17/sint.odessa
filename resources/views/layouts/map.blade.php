<section class="offices-section fade-in">
    <div class="container">

        <h2 class="text-center mb-5">Наши офисы на карте</h2>

        <div class="row">

            <!-- КАРТА -->
            <div class="col-md-9">
                <div id="mapdiv" class="map"></div>
            </div>

            <!-- СПИСОК ОФИСОВ -->
            <div class="col-md-3">

                <div class="office-list">

                    <div class="office-card" data-lat="46.482146" data-lng="30.730281">
                        <h5>Центр (Соборка)</h5>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Соборная площадь, 12
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                    </div>

                    <div class="office-card" data-lat="46.43711" data-lng="30.730315">
                        <h5>Адміральський</h5>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Адмиральский проспект, 33а
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                    </div>

                    <div class="office-card" data-lat="46.575718" data-lng="30.7951071">
                        <h5>пос. Котовского</h5>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            ул. Семена Палия, 94
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                    </div>

                    <div class="office-card" data-lat="46.400676" data-lng="30.72347">
                        <h5>Таирово</h5>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            ул. Королева, 33
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<script async
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&callback=initMap&v=weekly&libraries=marker"
></script>

<script>
    let map;
    let markers = [];
    let bounds;

    function initMap() {
        map = new google.maps.Map(document.getElementById("mapdiv"), {
            center: { lat: 46.48, lng: 30.73 },
            zoom: 11
        });

        bounds = new google.maps.LatLngBounds();

        // Добавляем офисы
        addMarker(46.43711, 30.730315, "Адміральський");
        addMarker(46.482146, 30.730281, "Соборка");
        addMarker(46.575718, 30.7951071, "Дніпродорога");
        addMarker(46.400676, 30.72347, "Корольова");

        map.fitBounds(bounds);
    }

    function addMarker(lat, lng, title) {
        const position = { lat: lat, lng: lng };

        const marker = new google.maps.Marker({
            position: position,
            map: map,
            title: title,
            icon: {
                url: '/images/marker.svg',
                scaledSize: new google.maps.Size(40, 40)
            }
        });

        const infowindow = new google.maps.InfoWindow({
            content: `<strong>${title}</strong>`
        });

        marker.addListener('mouseover', () => infowindow.open(map, marker));
        marker.addListener('mouseout', () => infowindow.close());

        marker.addListener('click', () => focusOffice(lat, lng));

        markers.push(marker);
        bounds.extend(position);
    }

    function focusOffice(lat, lng) {

        // перемещаем карту
        map.panTo({ lat: lat, lng: lng });
        map.setZoom(15);

        // прокрутка страницы к карте
        const mapBlock = document.getElementById("mapdiv");
        mapBlock.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

        // подсветка карточки
        document.querySelectorAll(".office-card").forEach(card => {
            card.classList.remove("active");

            if (
                parseFloat(card.dataset.lat) === lat &&
                parseFloat(card.dataset.lng) === lng
            ) {
                card.classList.add("active");
            }
        });
    }

    // Клик на карточку → карта фокус
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".office-card").forEach(card => {
            card.addEventListener("click", function () {
                const lat = parseFloat(this.dataset.lat);
                const lng = parseFloat(this.dataset.lng);
                focusOffice(lat, lng);
            });
        });
    });
</script>