﻿document.getElementById('reservation-form').addEventListener('submit', function (event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var dateTime = document.getElementById('date-time').value;
    var partySize = document.getElementById('party-size').value;

    // Validate phone number
    var phoneRegex = /^\d+$/; // Regular expression to match only digits
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number.');
        return;
    }

    // Here you can implement your own logic to handle the reservation, e.g., send the data to a server.

    alert('Reservation confirmed for ' + name + ' at ' + dateTime + ' for a party of ' + partySize);
    document.getElementById('reservation-form').reset();
});

// Get the current date and time
var now = new Date();

// Round down to the nearest 30 minutes
var roundedMinutes = Math.ceil(now.getMinutes() / 15) * 15;

// Adjust the current time by rounding down the minutes
now.setMinutes(roundedMinutes);

// Create flatpickr instance for date and time picker
var dateTimePicker = flatpickr(document.getElementById('date-time'), {
    enableTime: true,
    minDate: now,
    dateFormat: 'Y-m-d H:i',
    time_24hr: true,
    minuteIncrement: 15,
});

