<?php
include('./header.php')
?>
<html>
<head>
  <title>Consult</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    h2{
      color: white;
      text-align: center;
      letter-spacing: 1.5px;
    }
    select {
    color: black;
    background-color: white;
  }
  /* Change the color of the select box options */
  select option {
    color: black;
  }
label{
  color: white;
  display: block;
}
form .option{
  border-radius: 4px;
   border: 1px solid white;
  outline: 0;
   padding: 1
 }

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  form label {
  display: block;
  font-weight: bold;
  font-size: 16px; /* Adjust the font size as desired */
  margin-bottom: 5px; /* Add spacing between labels */
}

form select {
  border-radius: 4px;
  border: 1px solid white;
  outline: 0;
  padding: 10px;
  width: 200px;
}
/* Add a border and padding to the form */
  form{
   background: rgba(27,31,34);
   width: 600px;
   margin: 65px auto;
   max-width: 97%;
   border-radius: 2px;
   padding: 55px 30px;
   border: 1px solid white;
  text-transform: uppercase;
  height: 500px;
  }
  .radio-group {
    
    margin-bottom: 10px;
  }
  
  .radio-groups {
    margin-bottom: 10px;
    display: flex;
    flex-direction: row;
  }

  .radio-groups label {
    margin-right: 10px;
  }

  .radio-groups .radio-row {
    
    flex-direction: row;
  }
  .form-wrapper {
    display: flex;
    justify-content: flex-end;
  }

  .form-wrapper input[type="submit"] {
    font-size: 14px; /* Increase the font size as desired */
    padding: 8px 8px; /* Adjust the padding as desired */
    border-radius: 5px;
  }
  </style>
</head>
<body>
  <div class="container"><br>
    <h2>Let's Find College!!</h2>
    <form action="process_form.php" method="POST">
    <label for="State">State(India):</label>
  <select name="state" id="State" required>
  <option value="">Select a state</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
  <!-- Add more states as needed -->
</select><br><br><br>

      <label for="Stream">Stream:</label>
      <select name="stream" id="Stream" required>
        <option value="Engineering">Engineering</option>
        <option value="Management">Management</option>
        <option value="Science">Science</option>
        <option value="Commerce">Commerce</option>
        <option value="Arts">Arts</option>
        <option value="Hotel-management">Hotel-management</option>
        <option value="Agriculture">Agriculture</option>
        <option value="Medical">Medical</option>
        <option value="Pharmacy">Pharmacy</option>
        <option value="Law">Law</option>
        <!-- Add more options as needed -->
      </select><br><br><br>
<div class ="radio-group">
  <label for="degree">Degree:</label>
      <input type="radio" name="degree" value="UG" id="ug-radio" required>
      <label for="ug-radio">UG</label>
      <input type="radio" name="degree" value="PG" id="pg-radio" required>
      <label for="pg-radio">PG</label>
</div>
<div class ="radio-groups">
      <label for="fee">Fee:</label>
      <input type="radio" name="fee" value="&gt;50k" id="fee-1" required>
      <label for="fee-1">&gt;50k</label>
      <input type="radio" name="fee" value="50k-1L" id="fee-2" required>
      <label for="fee-2">50k to 1 Lakh</label>
      <input type="radio" name="fee" value="1L-5L" id="fee-3" required>
      <label for="fee-3">1 Lakh to 5 Lakhs</label>
      <input type="radio" name="fee" value="5L-10L" id="fee-4" required>
      <label for="fee-4">5 Lakhs to 10 Lakhs</label>
      <input type="radio" name="fee" value="10L-20L" id="fee-5" required>
      <label for="fee-5">10 Lakhs to 20 Lakhs</label>
      <input type="radio" name="fee" value="Not an issue" id="fee-6" required>
      <label for="fee-6">Not an issue</label>
</div>
<div class="form-wrapper"> <input type="submit" value="Submit"></div>
     
    </form>
  </div>
</body>
</html>
<?php
include('./footer.php')
?>