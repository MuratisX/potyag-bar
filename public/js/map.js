function initMap() {
    var location = {
        lat: 50.434571,
        lng: 30.506824
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: location,
        scrollwheel: false,
        mapTypeControl: false,
        zoomControl: false
    });

    var marker = new google.maps.Marker({
        position: location,
        map: map,
        icon: {
            url: ('/img/map-marker.svg'),
            scaledSize: new google.maps.Size(15, 21)
        }
    });

    $.getJSON("/map_style.json", function(data) {
        map.setOptions({styles: data});
    });

}

initMap();