<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Property Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      max-width: 600px;
      margin: 20px auto;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <form id="propertyForm" action="addhouse.php" method="POST">
    <label for="propertyType">Property Type:</label>
    <select id="propertyType" name="propertyType" required>
      <option value="house">Villa</option>
      <option value="apartment">Redential Apartment</option>
      <option value="condo">Commertial Apartment</option>
      <!-- Add more property types as needed -->
    </select>
    <label for="propertyId">Property ID:</label>
    <input type="number" id="propertyId" name="propertyId" required>
    <label for="propertyName">Property Name:</label>
    <input type="text" id="propertyName" name="propertyName" required>
    <label for="propertyName">bathrooms</label>
    <input type="text" id="propertyName" name="bathrooms" required>
    <label for="propertyName">bedrooms:</label>
    <input type="text" id="propertyName" name="bedrooms" required>

    <label for="propertyLocation">Location:</label>
    <input type="text" id="propertyLocation" name="propertyLocation" required>

    <label for="propertyPrice">Price:</label>
    <input type="number" id="propertyPrice" name="propertyPrice" required>
    <label for="propertyName">Square feet:</label>
    <input type="text" id="propertyName" name="feet" required>

    <label for="propertyDescription">Description:</label>
    <textarea id="propertyDescription" name="propertyDescription" rows="4" required></textarea>
    <label for="amenities">Amenities:</label>
    <textarea id="amenities" name="amenities" rows="4" required></textarea>

    <label for="propertyImage">Choose Image:</label>
    <input type="file" id="propertyImage" name="propertyImage" accept="image/*" required>

    <button type="submit">Add Property</button>
  </form>
  

</body>
</html>
