<script src="/JobManagement/public/js/jquery-3.3.1.min.js"></script>
<script src="/JobManagement/public/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/JobManagement/public/js/mmenu.min.js"></script>
<script src="/JobManagement/public/js/tippy.all.min.js"></script>
<script src="/JobManagement/public/js/simplebar.min.js"></script>
<script src="/JobManagement/public/js/bootstrap-slider.min.js"></script>
<script src="/JobManagement/public/js/bootstrap-select.min.js"></script>
<script src="/JobManagement/public/js/snackbar.js"></script>
<script src="/JobManagement/public/js/clipboard.min.js"></script>
<script src="/JobManagement/public/js/counterup.min.js"></script>
<script src="/JobManagement/public/js/magnific-popup.min.js"></script>
<script src="/JobManagement/public/js/slick.min.js"></script>
<script src="/JobManagement/public/js/custom_jquery.js"></script>

<script>
    if ($('.utf-intro-banner-search-form-block')[0]) {
        setTimeout(function(){
            $(".pac-container").prependTo(".utf-intro-search-field-item.with-autocomplete");
        }, 300);
    }
</script>
<script>
    function date_limit(){
        // Get the input element
        var addressInput = document.getElementById("addressInput");
        var addressInput2 = document.getElementById("addressInput2");
        // Get the current date
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0
        var yyyy = today.getFullYear();
        var currentDate = yyyy + '-' + mm + '-' + dd;
        var nextDay = ++dd;
        var currentDate2 = yyyy + '-' + mm+ '-' + String(nextDay).padStart(2, '0');
        // Set the minimum date attribute
        addressInput.setAttribute("min", currentDate);
        addressInput2.setAttribute("min",currentDate2);
    }

</script>
<script>
    // The API Key provided is restricted to JSFiddle website
    // Get your own API Key on https://myprojects.geoapify.com
    const myAPIKey = "6d84118b5d614a53b24c8460e9342fba";

    const streetInput = new autocomplete.GeocoderAutocomplete(
        document.getElementById("street"),
        myAPIKey, {
            allowNonVerifiedHouseNumber: true,
            allowNonVerifiedStreet: true,
            skipDetails: true,
            skipIcons: true,
            placeholder: " "
        });

    const stateInput = new autocomplete.GeocoderAutocomplete(
        document.getElementById("state"),
        myAPIKey, {
            type: "state",
            skipDetails: true,
            placeholder: " ",
            skipIcons: true
        });

    const cityInput = new autocomplete.GeocoderAutocomplete(
        document.getElementById("city"),
        myAPIKey, {
            type: "city",
            skipDetails: true,
            skipIcons: true,
            placeholder: " "
        });


    const countryInput = new autocomplete.GeocoderAutocomplete(
        document.getElementById("country"),
        myAPIKey, {
            type: "country",
            skipDetails: true,
            placeholder: " ",
            skipIcons: true
        });

    const postcodeElement = document.getElementById("postcode");
    const housenumberElement = document.getElementById("housenumber");

    streetInput.on('select', (street) => {
        if (street) {
            streetInput.setValue(street.properties.street || '');
        }

        if (street && street.properties.housenumber) {
            housenumberElement.value = street.properties.housenumber;
        }

        if (street && street.properties.postcode) {
            postcodeElement.value = street.properties.postcode;
        }

        if (street && street.properties.city) {
            cityInput.setValue(street.properties.city);
        }

        if (street && street.properties.state) {
            stateInput.setValue(street.properties.state);
        }

        if (street && street.properties.country) {
            countryInput.setValue(street.properties.country);
        }
    });

    cityInput.on('select', (city) => {

        if (city) {
            cityInput.setValue(city.properties.city || '');
        }

        if (city && city.properties.postcode) {
            postcodeElement.value = city.properties.postcode;
        }

        if (city && city.properties.state) {
            stateInput.setValue(city.properties.state);
        }

        if (city && city.properties.country) {
            countryInput.setValue(city.properties.country);
        }
    });

    stateInput.on('select', (state) => {

        if (state) {
            stateInput.setValue(state.properties.state || '');
        }

        if (state && state.properties.country) {
            countryInput.setValue(state.properties.country);
        }
    });

    function checkAddress() {
        const postcode = document.getElementById("postcode").value;;
        const city = cityInput.getValue();
        const street = streetInput.getValue();
        const state = stateInput.getValue();
        const country = countryInput.getValue();
        const housenumber = document.getElementById("housenumber").value;

        const message = document.getElementById("message");
        message.textContent = "";

        if (!postcode || !city || !street || !housenumber || !state || !country) {
            highlightEmpty();
            message.textContent = "Please fill in the required fields and check your address again.";
            return;
        }

        // Check the address with Geoapify Geocoding API
        // You may use it for internal information only. Please note that house numbers might be missing for new buildings and non-mapped buildings. So consider that most addresses with verified streets and cities are correct.
        fetch(`https://api.geoapify.com/v1/geocode/search?housenumber=${encodeURIComponent(housenumber)}&street=${encodeURIComponent(street)}&postcode=${encodeURIComponent(postcode)}&city=${encodeURIComponent(city)}&state=${encodeURIComponent(state)}&country=${encodeURIComponent(country)}&apiKey=${myAPIKey}`).then(result => result.json()).then((result) => {
            let features = result.features || [];

            // To find a confidence level that works for you, try experimenting with different levels
            const confidenceLevelToAccept = 0.25;
            features = features.filter(feature => feature.properties.rank.confidence >= confidenceLevelToAccept);

            if (features.length) {
                const foundAddress = features[0];
                if (foundAddress.properties.rank.confidence === 1) {
                    message.textContent = `We verified the address you entered. The formatted address is: ${foundAddress.properties.formatted}`;
                } else if (foundAddress.properties.rank.confidence > 0.5 && foundAddress.properties.rank.confidence_street_level === 1) {
                    message.textContent = `We have some doubts about the accuracy of the address: ${foundAddress.properties.formatted}`
                } else if (foundAddress.properties.rank.confidence_street_level === 1) {
                    message.textContent = `We can confirm the address up to street level: ${foundAddress.properties.formatted}`
                } else {
                    message.textContent = `We can only verify your address partially. The address we found is ${foundAddress.properties.formatted}`
                }
            } else {
                message.textContent = "We cannot find your address. Please check if you provided the correct address."
            }
        });
    }


    function highlightEmpty() {
        const toHightlight = [];

        if (!document.getElementById("postcode").value) {
            toHightlight.push(document.getElementById("postcode"));
        }

        if (!cityInput.getValue()) {
            toHightlight.push(cityInput.inputElement);
        }

        if (!streetInput.getValue()) {
            toHightlight.push(streetInput.inputElement);
        }

        if (!document.getElementById("housenumber").value) {
            toHightlight.push(document.getElementById("housenumber"));
        }

        if (!stateInput.getValue()) {
            toHightlight.push(stateInput.inputElement);
        }

        if (!countryInput.getValue()) {
            toHightlight.push(countryInput.inputElement);
        }

        toHightlight.forEach(element => element.classList.add("warning-input"));

        setTimeout(() => {
            toHightlight.forEach(element => element.classList.remove("warning-input"));
        }, 3000);
    }
</script>