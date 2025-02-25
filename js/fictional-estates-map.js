let map;
let markers = [];
let infoWindow;
let searchBy = 'DISTANCE';
let estateLocation

const mapContainer = document.getElementById('map-container');

const estateTitle = document.querySelector('h1').textContent;
const estateMainImgSrcMedium = document.querySelector('.carousel-item img').getAttribute('data-medium-url');

// Storing the coordinates for the posts of the houses custom post type that were saved to the database and passed over by wp_localize_script
const latitude = houseCoordinates.latitude;
const longitude = houseCoordinates.longitude;

if (latitude != '' && longitude != '') {
    estateLocation = {
        'lat': parseFloat(latitude),
        'lng': parseFloat(longitude)
    };
} else {
    // For the Fictional Estates Map Project I always want this to be these coordinates (and expect the consts latitude and longitude to be empty)
    estateLocation = {
        'lat': 51.358398648238634,
        'lng': 12.356678598921786
    };
}


const typeButtons = document.querySelectorAll('.type-btn');
const searchBySelect = document.getElementById('search-by');


function initMap() {
    map = new google.maps.Map(mapContainer, {
        center: estateLocation,
        zoom: 12,
        mapId: 'Yb0ecf45a422613b4',
        mapTypeControl: false,
        fullscreenControl: false,
        streetViewControl: false,
    });

    infoWindow = new google.maps.InfoWindow();
    addEstateMarker(estateLocation);

    quotaErrorCheck();
}



// Function to add a Marker for the Estate position

async function addEstateMarker(location) {
    const { AdvancedMarkerElement } = await google.maps.importLibrary('marker');

    const estateMarker = new AdvancedMarkerElement({
        map,
        position: location,
        gmpClickable: true,
    });

    estateMarker.element.id = 'estate-marker';




    // Eventlistener on Estate Marker to show details

    estateMarker.addListener('click', () => {
        infoWindow.close();

        const contentDiv = document.createElement('div');

        contentDiv.classList.add('place-details');


        const titleElement = document.createElement('p');
        titleElement.textContent = estateTitle;


        contentDiv.appendChild(titleElement);

        const img = document.createElement('img');

        img.src = estateMainImgSrcMedium;


        const imgContainer = document.createElement('div');
        imgContainer.classList.add('place-img-container');
        imgContainer.appendChild(img);

        contentDiv.appendChild(imgContainer);

        infoWindow.setContent(contentDiv);

        infoWindow.open(map, estateMarker);
    });

}


async function nearbySearch(type) {
    clearMarkers();

    try {
        const { Place, SearchNearbyRankPreference } = await google.maps.importLibrary('places');
        const { AdvancedMarkerElement } = await google.maps.importLibrary('marker');

        let radius

        if (type == 'preschool') {
            radius = 6000
        } else {
            radius = 3000
        }

        const request = {
            fields: ['displayName', 'location', 'photos', 'id'],
            locationRestriction: {
                center: estateLocation,
                radius: radius,
            },
            includedPrimaryTypes: type,
            maxResultCount: 7,
            rankPreference: SearchNearbyRankPreference[searchBy],

        };


        const { places } = await Place.searchNearby(request);

        let validPlaces;

        if (type == 'preschool') {
            validPlaces = places.filter(place => !place.displayName.toLowerCase().includes('schule'));
        } else {
            validPlaces = places;
        }

        if (validPlaces.length) {

            const { LatLngBounds } = await google.maps.importLibrary('core');
            const bounds = new LatLngBounds();

            validPlaces.forEach((place) => {
                const placeMarker = new AdvancedMarkerElement({
                    map,
                    position: place.location,
                    title: place.displayName,
                    gmpClickable: true,
                });



                // Function to create attribution DIV.

                function createAttribution(attribution) {
                    let attributionLabel = document.createElement('div');
                    attributionLabel.classList.add('attribution-label');

                    let text = document.createElement('p');
                    text.textContent = 'Image by:';

                    let link = document.createElement('a');
                    link.textContent = attribution[0].displayName;
                    link.href = attribution[0].uri;
                    link.target = '_blank';

                    attributionLabel.appendChild(text);
                    attributionLabel.appendChild(link);

                    return attributionLabel;
                }


                // Adding eventlistener on the chosen type's pins to show the details

                placeMarker.addListener('click', () => {
                    infoWindow.close();

                    const contentDiv = document.createElement('div');

                    contentDiv.classList.add('place-details');


                    const titleElement = document.createElement('p');
                    titleElement.textContent = placeMarker.title;


                    contentDiv.appendChild(titleElement);


                    if (place.photos[0]) {
                        const img = document.createElement('img');

                        img.src = place.photos[0].getURI({ maxWidth: 200 });

                        img.onerror = function () {
                            displayQuotaOverlay();
                        };

                        const imgContainer = document.createElement('div');
                        imgContainer.classList.add('place-img-container');
                        imgContainer.appendChild(img);


                        attributionLabel = createAttribution(place.photos[0].authorAttributions);

                        imgContainer.appendChild(attributionLabel);
                        contentDiv.appendChild(imgContainer);
                    };


                    if (place.id) {
                        const googleMapsLink = document.createElement('a');
                        googleMapsLink.href = `https://www.google.com/maps/place/?q=place_id:${place.id}`;
                        googleMapsLink.target = '_blank';
                        googleMapsLink.textContent = 'In Google Maps ansehen';
                        googleMapsLink.classList.add('mt-2');
                        contentDiv.appendChild(googleMapsLink);
                    }


                    infoWindow.setContent(contentDiv);

                    infoWindow.open(map, placeMarker);
                });

                markers.push(placeMarker);


                bounds.extend(place.location);
                bounds.extend(estateLocation);
            });
            map.fitBounds(bounds);
        } else {
            alert('Keine Ergebnise gefunden');
        }
    } catch (error) {

        quotaErrorCheck(error);

    }


}



typeButtons.forEach((button) => {
    button.addEventListener('click', showSelectedTypeMarkers);
    button.addEventListener('click', colorSelectedButton);
});


function colorSelectedButton() {
    typeButtons.forEach((button) => {
        button.classList.remove('btn-active');
    });
    this.classList.add('btn-active');
};



function showSelectedTypeMarkers() {
    let type;

    if (this.id == 'school') {
        type = ['primary_school', 'secondary_school'];
    } else {
        type = [this.id];
    }

    nearbySearch(type);
}


function clearMarkers() {

    markers.forEach((marker) => {
        marker.setMap(null);
    });

    markers = [];
}



// Triggering actualized search when another value gets selected to search by

searchBySelect.addEventListener('change', function () {
    let activeTypeBtn = document.querySelector('.btn-active');
    searchBy = searchBySelect.value;
    if (activeTypeBtn) {
        activeTypeBtn.click();
    }
})


function quotaErrorCheck(caughtError) {

    let originalConsoleError = console.error;

    /* Temporarely overwriting the funcitonality of console.error to enable itterating through messages 
       (the initMap function doesn't throw a catch when quotas are exhaustet but succeeds in the request while throwing an error and displaying the map, but modified to be unusable) */
    console.error = function (...args) {
        originalConsoleError.apply(console, args);
        args.forEach(arg => {
            if (String(arg).toLowerCase().includes('quota') || String(arg).toLowerCase().includes('429') || String(arg).toLowerCase().includes('requests')) {
                displayQuotaOverlay();
            }
        });
    };
    if (caughtError) {
        console.error(caughtError);
    }
    setTimeout(() => {
        console.error = originalConsoleError;
    }, 5000);
}

function displayQuotaOverlay() {
    const quotaMessageOverlay = document.createElement('div');
    quotaMessageOverlay.textContent =
        `Da bei erhöhter Anzahl von Anfragen an die Google Maps APIs Kosten anfallen musste hier ein Limit festgesetzt werden.
            Dieses scheint Momentan ausgeschöpft zu sein, bitte versuchen Sie es morgen erneut.`;
    quotaMessageOverlay.classList.add('quota-message-overlay');
    mapContainer.appendChild(quotaMessageOverlay);

    typeButtons.forEach((button) => {
        button.removeEventListener('click', showSelectedTypeMarkers);
    });
};