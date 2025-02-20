// Function to validate Title
function validateTitle() {
    const title = document.getElementById('title').value;
    const titleError = document.getElementById('title-error');
    const titleCorrect = document.getElementById('title-correct');

    if (title.length >= 3) {
        titleError.textContent = '';
        titleCorrect.style.display = 'block';
    } else {
        titleError.textContent = 'Title must contain at least 3 characters.';
        titleCorrect.style.display = 'none';
    }
}

// Function to validate Destination
function validateDestination() {
    const destination = document.getElementById('destination').value;
    const destinationError = document.getElementById('destination-error');
    const destinationCorrect = document.getElementById('destination-correct');
    const regex = /^[A-Za-z\s]+$/; // Only letters and spaces

    if (destination.length >= 3 && regex.test(destination)) {
        destinationError.textContent = '';
        destinationCorrect.style.display = 'block';
    } else {
        destinationError.textContent = 'Destination must contain only letters and spaces, and at least 3 characters.';
        destinationCorrect.style.display = 'none';
    }
}

// Add event listeners for both fields
document.getElementById('title').addEventListener('keyup', validateTitle);
document.getElementById('destination').addEventListener('keyup', validateDestination);
