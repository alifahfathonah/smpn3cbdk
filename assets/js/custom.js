$(function() {

  function initMap() {

    var location = new google.maps.LatLng(-6.8971335,106.8157769);

    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: location,
      zoom: 17,
      panControl: false,
      scrollwheel: false,
      disableDefaultUI: true,
      draggable: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var markerImage = 'assets/img/marker.png';

    var marker = new google.maps.Marker({
      position: location,
      map: map,
      icon: markerImage
    });

    var info = new SnazzyInfoWindow({
        marker: marker,
        placement: 'top',
        content: '<div><p> No. 691, Jalan Raya Karang Tengah, Karangtengah Cibadak, Sukabumi, Jawa Barat 43351</p></div>',
        showCloseButton: false,
        closeOnMapClick: false,
        padding: '15px 25px',
        backgroundColor: '#01a0fb',
        border: false,
        borderRadius: '4px',
        shadow: false,
        fontColor: '#fff',
        fontSize: '15px',
        maxWidth: 350


    });
    info.open();

    var styles = [{
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#444444"
        }]
      },
      {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [{
          "color": "#f2f2f2"
        }]
      },
      {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "featureType": "road",
        "elementType": "all",
        "stylers": [{
            "saturation": -100
          },
          {
            "lightness": 45
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [{
          "visibility": "simplified"
        }]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "featureType": "water",
        "elementType": "all",
        "stylers": [{
            "color": "#46bcec"
          },
          {
            "visibility": "on"
          }
        ]
      }
    ];

    map.set('styles', styles);


  }

  google.maps.event.addDomListener(window, 'load', initMap);
});
