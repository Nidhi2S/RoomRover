// FOR COUNTRY, STATE AND DISTRICT SELECTION 
const apiEndpoint = 'https://api.countrystatecity.in/v1/';
const apiKey = 'aWNiRmI3Sll2TklmVDFZV2VvSjBBZGd4OEH6cWk3Q2hQZms5ZzdzMw==';

// Function to fetch countries and populate the country dropdown
async function fetchCountries() {
    const countrySelect = document.getElementById('country');

    countrySelect.innerHTML = '<option value="">Select Country</option>';
    try {
        const response = await fetch(apiEndpoint + 'countries', {
            headers: {
                'X-CSCAPI-KEY': apiKey,
            },
        });
        const data = await response.json();
        data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.iso2;
            option.textContent = country.name;
            countrySelect.appendChild(option);
        });
        countrySelect.value = '<?php echo $country; ?>';
        fetchStates();
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
}

// Function to fetch states based on the selected country
async function fetchStates() {
    const countrySelect = document.getElementById('country');
    const stateSelect = document.getElementById('state');
    stateSelect.innerHTML = '<option value="">Select State</option>';
    const selectedCountry = countrySelect.value;

    if (selectedCountry) {
        try {
            const response = await fetch(apiEndpoint + `countries/${selectedCountry}/states`, {
                headers: {
                    'X-CSCAPI-KEY': apiKey,
                },
            });
            const data = await response.json();

            stateSelect.innerHTML = '<option value="">Select State</option>';
            data.forEach(state => {
                const option = document.createElement('option');
                option.value = state.iso2;
                option.textContent = state.name;
                stateSelect.appendChild(option);
            });

            stateSelect.value = '<?php echo $state; ?>';
            fetchCities();
        } catch (error) {
            console.error('Error fetching states:', error);
        }
    } else {
        stateSelect.innerHTML = '<option value="">Select State</option>';
        citySelect.innerHTML = '<option value="">Select District/City</option>';
    }
}

// Function to fetch cities based on the selected state
async function fetchCities() {
    const countrySelect = document.getElementById('country');
    const stateSelect = document.getElementById('state');
    const citySelect = document.getElementById('city');

    citySelect.innerHTML = '<option value="">Select District/City</option>';

    const selectedCountry = countrySelect.value;
    const selectedState = stateSelect.value;

    if (selectedCountry && selectedState) {
        try {
            const response = await fetch(apiEndpoint + `countries/${selectedCountry}/states/${selectedState}/cities`, {
                headers: {
                    'X-CSCAPI-KEY': apiKey,
                },
            });
            const data = await response.json();

            citySelect.innerHTML = '<option value="">Select District/City</option>';
            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.name;
                option.textContent = city.name;
                citySelect.appendChild(option);
            });
            citySelect.value = '<?php echo $city; ?>';
        } catch (error) {
            console.error('Error fetching cities:', error);
        }
    } else {
        citySelect.innerHTML = '<option value="">Select District/City</option>';
    }
}

// country
fetchCountries();

// terms and policy
document.getElementById('registrationForm').addEventListener('submit', function (event) {
    const termsCheckbox = document.getElementById('terms');

    if (!termsCheckbox.checked) {
        alert("You must agree to the terms and policies before submitting the form.");
        event.preventDefault(); // Prevent the form from submitting
    }
});

// VALIDATIONS
document.getElementById('registrationForm').addEventListener('submit', function (event) {
    // Reset previous error messages
    document.querySelectorAll('.error-message').forEach(function (element) {
        element.remove();
    });

    // Check if locality is empty
    var locality = document.getElementById('locality_id').value.trim();
    if (locality === '') {
        event.preventDefault();
        addErrorMessage('locality_id', 'Locality/building is required');
    }

    // Check if pincode is empty and a valid number
    var pincode = document.getElementById('pincode_id').value.trim();
    if (pincode === '' || !/^\d+$/.test(pincode)) {
        event.preventDefault();
        addErrorMessage('pincode_id', 'Pincode is required and must be a number');
    }

    // Check if country is selected
    var country = document.getElementById('country').value;
    if (country === '') {
        event.preventDefault();
        addErrorMessage('country', 'Please select a country');
    }

    // Check if state is selected
    var state = document.getElementById('state').value;
    if (state === '') {
        event.preventDefault();
        addErrorMessage('state', 'Please select a state');
    }

    // Check if city is selected
    var city = document.getElementById('city').value;
    if (city === '') {
        event.preventDefault();
        addErrorMessage('city', 'Please select a city');
    }

    // Check if terms and policies checkbox is checked
    var termsCheckbox = document.getElementById('terms');
    if (!termsCheckbox.checked) {
        event.preventDefault();
        addErrorMessage('terms', 'You must agree to the terms and policies');
    }
});

function addErrorMessage(fieldId, message) {
    var element = document.getElementById(fieldId);
    var errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.innerHTML = message;
    element.parentNode.appendChild(errorElement);
}


