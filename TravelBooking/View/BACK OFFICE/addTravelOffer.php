<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Offer Form</title>
    <link rel="stylesheet" href="styling1.css">
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 2px;
        }
        .correct {
            color: green;
            font-size: 12px;
            margin-top: 2px;
        }
    </style>
</head>
<body>
    <h1>Add Travel Offer</h1>
    <form id="offerForm" action="Verification.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Enter the title of the offer">
        <p id="title-error" class="error"></p>
        <p id="title-correct" class="correct" style="display:none;">Correct</p>

        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination" placeholder="Enter the destination">
        <p id="destination-error" class="error"></p>
        <p id="destination-correct" class="correct" style="display:none;">Correct</p>

        <label for="departure">Departure Date:</label>
        <input type="date" name="departure" id="departure">
        <p id="departure-error" class="error"></p>

        <label for="return">Return Date:</label>
        <input type="date" name="return" id="return">
        <p id="return-error" class="error"></p>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" placeholder="Enter the price">
        <p id="price-error" class="error"></p>

        <div class="checkbox-label">
            <label for="availability">Availability:</label>
            <input type="checkbox" id="availability" name="availability">
        </div>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="family">Family Trips</option>
            <option value="couple">Couples' Trips</option>
            <option value="adventure">Adventure and Sports Trips</option>
        </select>

        <button type="submit">Add Offer</button>
    </form>
    <!-- <script src="addTraveloffer.js"></script>
         <script src="addtravel2.js"></script>
    <script src="addtravel3.js"></script> -->


</body>
</html>
