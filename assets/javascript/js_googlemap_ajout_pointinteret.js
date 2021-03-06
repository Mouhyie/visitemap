/**
 * Created by root on 5/8/14.
 */
function initialize() {
    /*var position_lat=48.3;
    var postition_lng=4.0833;
    var mapOptions = {
        zoom: 4,
        center: new google.maps.LatLng(position_lat,postition_lng)
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var markers = [];*/
    var markers = [];
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(43, 2),
        new google.maps.LatLng(50, 4));
    map.fitBounds(defaultBounds);

    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
        document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var searchBox = new google.maps.places.SearchBox(
        /** @type {HTMLInputElement} */(input));

    // [START region_getplaces]
    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.
    google.maps.event.addListener(searchBox, 'places_changed', function() {
        var places = searchBox.getPlaces();

        for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
        }

        // For each place, get the icon, place name, and location.
        markers = [];
        var bounds = new google.maps.LatLngBounds();
        for (var i = 0, place; place = places[i]; i++) {
            var image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                title: place.name,
                position: place.geometry.location
            });

            markers.push(marker);

            bounds.extend(place.geometry.location);
        }

        map.fitBounds(bounds);
    });
    // [END region_getplaces]

    // Bias the SearchBox results towards places that are within the bounds of the
    // current map's viewport.
    google.maps.event.addListener(map, 'bounds_changed', function() {
        var bounds = map.getBounds();
        searchBox.setBounds(bounds);
    });

    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });


    google.maps.event.addListener(map, 'dblclick', function(e) {
        placeMarker(e.latLng, map);
    });



}

function placeMarker(position, map) {
    //alert(position);
    syn_location(position   );
    var image='/assets/images/logo-utt.jpg';
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        icon: image
    });
    map.panTo(position);
    google.maps.event.addListener(marker, "rightclick", function() {
        marker.setMap(null);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

