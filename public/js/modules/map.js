/* ======================================
   GOOGLE MAP
====================================== */

console.log("MAP SCRIPT LOADED");

let map;
let markers = [];
let bounds;

/* ===== загрузка Google Maps API ===== */

function loadGoogleMaps() {
    const script = document.createElement("script");

    script.src =
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&v=weekly&libraries=marker";

    script.async = true;
    script.defer = true;

    script.onload = () => {
        console.log("Google Maps script loaded");
    };

    document.head.appendChild(script);

    waitForGoogleMaps();
}

function waitForGoogleMaps() {

    console.log("waiting google...", window.google);

    if (window.google && window.google.maps) {
        console.log("Google Maps ready");
        initMap();
    } else {
        setTimeout(waitForGoogleMaps, 100);
    }
}


/* ===== инициализация карты ===== */

function initMap() {
    console.log(432432432432);
    map = new google.maps.Map(document.getElementById("mapdiv"), {

        center: { lat: 46.48, lng: 30.73 },
        zoom: 11

    });

    bounds = new google.maps.LatLngBounds();

    addMarker(46.43711, 30.730315, "Адміральський");
    addMarker(46.482146, 30.730281, "Соборка");
    addMarker(46.575718, 30.7951071, "Дніпродорога");
    addMarker(46.400676, 30.72347, "Корольова");

    map.fitBounds(bounds);

}

// function initMap() {
//     console.log("INIT MAP WORKS");
//
//     console.log("INIT MAP CALLED");
//
//     const el = document.getElementById("mapdiv");
//
//     if (!el) {
//         console.error("mapdiv not found");
//         return;
//     }
//
//     map = new google.maps.Map(el, {
//         center: { lat: 46.48, lng: 30.73 },
//         zoom: 11
//     });
// }


/* ===== добавление маркера ===== */

function addMarker(lat, lng, title) {

    const position = { lat: lat, lng: lng };

    const marker = new google.maps.Marker({

        position: position,
        map: map,
        title: title,

        icon: {
            url: "/images/marker.svg",
            scaledSize: new google.maps.Size(40, 40)
        }

    });

    const infowindow = new google.maps.InfoWindow({
        content: `<strong>${title}</strong>`
    });

    marker.addListener("mouseover", () => infowindow.open(map, marker));
    marker.addListener("mouseout", () => infowindow.close());

    marker.addListener("click", () => focusOffice(lat, lng));

    markers.push(marker);

    bounds.extend(position);

}


/* ===== фокус на офис ===== */

function focusOffice(lat, lng) {

    map.panTo({ lat: lat, lng: lng });

    map.setZoom(15);

    const mapBlock = document.getElementById("mapdiv");

    mapBlock.scrollIntoView({
        behavior: "smooth",
        block: "center"
    });

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

loadGoogleMaps();


/* ===== клик по карточке офиса ===== */

document.addEventListener("DOMContentLoaded", () => {

    const mapBlock = document.getElementById("mapdiv");

    if (!mapBlock) return;

    console.log(43243243243243);

     loadGoogleMaps();

    document.querySelectorAll(".office-card").forEach(card => {

        card.addEventListener("click", function () {

            const lat = parseFloat(this.dataset.lat);
            const lng = parseFloat(this.dataset.lng);

            focusOffice(lat, lng);

        });

    });

});


/* ===== делаем initMap глобальной ===== */

// window.initMap = initMap;