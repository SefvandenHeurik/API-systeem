document.addEventListener('DOMContentLoaded', function() {
    // Call the function to get departures
    getDepartures();
});

function getDepartures() {
    const station = 'Rm'; // Roermond
    const maxJourneys = 10;

    const apiKey = 'e65d65e7a82b4f2c9c2b5ec34deac34c';
    const apiUrl = `https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/departures?lang=en&station=${station}&maxJourneys=${maxJourneys}`;

    fetch(apiUrl, {
        method: 'GET',
        headers: {
            'Ocp-Apim-Subscription-Key': apiKey,
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        // Handle the data here
        console.log(data);
        displayDepartures(data);
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors here
    });
}

// ns.js

function displayDepartures(data) {
    const departuresTableBody = document.getElementById('departuresTableBody');
    departuresTableBody.innerHTML = ''; // Clear previous content

    const payload = data && data.payload;

    if (payload && payload.departures && payload.departures.length > 0) {
        // Sort departures based on planned departure time
        const sortedDepartures = payload.departures.sort((a, b) => {
            const aTime = new Date(a.plannedDateTime).getTime();
            const bTime = new Date(b.plannedDateTime).getTime();
            return aTime - bTime;
        });

        // Create and append rows for each departure
        sortedDepartures.forEach(departure => {
            const plannedDepartureTime = new Date(departure.plannedDateTime);
            const actualDepartureTime = departure.actualDateTime ? new Date(departure.actualDateTime) : null;

            // Format the time in Netherlands timezone with 24-hour clock and shorter format (HH:mm)
            const formattedPlannedDepartureTime = plannedDepartureTime.toLocaleTimeString(undefined, {
                timeZone: 'Europe/Amsterdam',
                hour12: false,
                hour: '2-digit',
                minute: '2-digit'
            });

            let delayInfo = '';
            if (actualDepartureTime) {
                const delayMinutes = Math.round((actualDepartureTime - plannedDepartureTime) / (1000 * 60));
                if (delayMinutes > 0) {
                    // Create a red box for the delay information
                    delayInfo = `<span class="bg-danger text-white p-1 rounded">+${delayMinutes} min</span>`;
                }
            }

            // Create a table row for each departure
            const departureRow = document.createElement('tr');

            // Create and append cells for each departure detail
            const timeCell = document.createElement('td');
            timeCell.className = 'departure-time fs-4 fw-bold';
            timeCell.innerHTML = `${formattedPlannedDepartureTime} ${delayInfo}`;

            const platformCell = document.createElement('td');
            platformCell.className = 'platform fs-4 fw-bold';
            platformCell.textContent = departure.plannedTrack;

            const destinationCell = document.createElement('td');
            destinationCell.className = 'destination';
            destinationCell.innerHTML = `<div class="destination fs-4 fw-bold">${departure.direction}</div><div class="via fs-6"><i>${getViaStationsText(departure.routeStations)}</i></div>`;

            const timeUntilDepartureCell = document.createElement('td');
            timeUntilDepartureCell.className = 'time-until-departure fs-4 fw-bold';
            timeUntilDepartureCell.textContent = getTimeUntilDeparture(plannedDepartureTime, actualDepartureTime);

            const trainTypeCell = document.createElement('td');
            trainTypeCell.className = 'train-type fs-4 fw-bold';
            trainTypeCell.textContent = getTrainTypeText(departure.product);

            // Append cells to the row
            departureRow.appendChild(timeCell);
            departureRow.appendChild(platformCell);
            departureRow.appendChild(destinationCell);
            departureRow.appendChild(timeUntilDepartureCell);
          //  departureRow.appendChild(trainTypeCell); als we deze erin willen moet je dit gewoon uit commenten. (welke type trein)

            // Append the row to the departures table body
            departuresTableBody.appendChild(departureRow);
        });
    } else {
        // If no departures are available, display a message
        const noDeparturesRow = document.createElement('tr');
        const noDeparturesCell = document.createElement('td');
        noDeparturesCell.colSpan = 5; // Span 5 columns
        noDeparturesCell.className = 'text-center';
        noDeparturesCell.textContent = 'Geen vertrekken beschikbaar.';
        noDeparturesRow.appendChild(noDeparturesCell);
        departuresTableBody.appendChild(noDeparturesRow);
    }
}

// Helper function to get the via stations text
function getViaStationsText(routeStations) {
    if (routeStations && routeStations.length > 0) {
        return `Via ${routeStations.map(stop => stop.mediumName).join(', ')}`;
    }
    return '';
}

// Helper function to get the train type text
function getTrainTypeText(product) {
    return product ? `${product.shortCategoryName} ${product.number}` : '';
}

// Helper function to get the time until departure
function getTimeUntilDeparture(plannedTime, actualTime) {
    if (actualTime) {
        const delayMinutes = Math.round((actualTime - new Date()) / (1000 * 60));
        return delayMinutes > 0 ? `${delayMinutes} min` : '<1 min';
    }
    return '';
}

// Get the body element
const body = document.body;

// Enable scrolling when the page is loaded
window.onload = function () {
  body.style.overflow = 'auto';
};


