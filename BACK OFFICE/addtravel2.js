document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#offerForm");

    // Fonction pour nettoyer les espaces inutiles
    function cleanInput(input) {
        return input.replace(/^\s+|\s+$/g, ""); // Supprime les espaces en début et fin
    }

    form.addEventListener("submit", function (event) {
        let isValid = true;

        const title = document.querySelector("#title");
        const destination = document.querySelector("#destination");
        const departureDate = document.querySelector("#departure");
        const returnDate = document.querySelector("#return");
        const price = document.querySelector("#price");

        const titleError = document.querySelector("#title-error");
        const destinationError = document.querySelector("#destination-error");
        const departureError = document.querySelector("#departure-error");
        const returnError = document.querySelector("#return-error");
        const priceError = document.querySelector("#price-error");

        // Réinitialiser les messages
        titleError.textContent = "";
        destinationError.textContent = "";
        departureError.textContent = "";
        returnError.textContent = "";
        priceError.textContent = "";

        // Fonction pour afficher un message de validation
        function showSuccessMessage(element) {
            element.textContent = "Correct";
            element.style.color = "green";
        }

        // Validation Title
        if (cleanInput(title.value).length < 3) {
            titleError.textContent = "The title must contain at least 3 characters.";
            titleError.style.color = "red";
            isValid = false;
        } else {
            showSuccessMessage(titleError);
        }

        // Validation Destination
        if (!/^[A-Za-z\s]{3,}$/.test(cleanInput(destination.value))) {
            destinationError.textContent = "The destination must contain only letters and at least 3 characters.";
            destinationError.style.color = "red";
            isValid = false;
        } else {
            showSuccessMessage(destinationError);
        }

        // Validation Departure Date
        if (!departureDate.value) {
            departureError.textContent = "Please select a valid date.";
            departureError.style.color = "red";
            isValid = false;
        } else {
            showSuccessMessage(departureError);
        }

        // Validation Return Date
        if (!returnDate.value || (departureDate.value && new Date(returnDate.value) <= new Date(departureDate.value))) {
            returnError.textContent = "Return date must be after the departure date.";
            returnError.style.color = "red";
            isValid = false;
        } else {
            showSuccessMessage(returnError);
        }

        // Validation Price
        if (isNaN(price.value) || Number(price.value) <= 0) {
            priceError.textContent = "The price must be a positive number.";
            priceError.style.color = "red";
            isValid = false;
        } else {
            showSuccessMessage(priceError);
        }

        // Empêcher l'envoi du formulaire si une erreur est présente
        if (!isValid) {
            event.preventDefault();
        }
    });
});
