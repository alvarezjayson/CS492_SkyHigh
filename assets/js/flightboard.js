document.addEventListener('DOMContentLoaded', function() {
    // Example flights data (replace with your own dynamic data)
    const flightsData = [
        { number: 'XY123', status: 'On Time', time: '13:00' },
        { number: 'AB456', status: 'Delayed', time: '14:30' },
        { number: 'CD789', status: 'On Time', time: '15:45' },
        { number: 'EF012', status: 'On Time', time: '17:00' },
        { number: 'GH345', status: 'Delayed', time: '18:20' }
    ];

    // Function to populate flights information
    function populateFlights() {
        const flightsContainer = document.getElementById('flights');
        flightsData.forEach(flight => {
            const flightElement = document.createElement('div');
            flightElement.classList.add('flight');
            flightElement.innerHTML = `
                <span class="flight-number">${flight.number}</span>
                <span class="flight-status ${flight.status === 'Delayed' ? 'delayed' : ''}">${flight.status}</span>
                <span class="flight-time">${flight.time}</span>
            `;
            flightsContainer.appendChild(flightElement);
        });
    }

    // Call function to populate flights on page load
    populateFlights();
});

