<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
    tr, th, td {
        border: 1px solid black;
    }
            
    body {
        background-image: url('crime.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100%;
    }

    .tablecss {
        margin-top: 50px;
    }
</style>
</head>
<body>

<center>
    <h1><u>Previous Complaint Details</u></h1>
    <div class="tablecss">
        <table>
  <tr>
    <th>FIRST NAME</th>
    <th>GENDER</th>
    <th>DAY</th>
    <th>MONTH</th>
    <th>YEAR</th>
    <th>TIME</th>
    <th>TYPE</th>
    <th>DESCRIPTION</th>
    <th>CITY</th>
    <th>PINCODE</th>
    <th>STATE</th>
    <th>COUNTRY</th>
  </tr>
  <?php
  // Connect to the MySQL database
  $conn = mysqli_connect('localhost', 'root', '', 'fir');
  
  // Select the database
  mysqli_select_db($conn, 'fir');
  
  // Execute a SELECT query to retrieve the data
  $result = mysqli_query($conn, 'SELECT * FROM application');
  
  // Iterate through the rows of data
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['firstname'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['day'] . '</td>';
    echo '<td>' . $row['month'] . '</td>';
    echo '<td>' . $row['year'] . '</td>';
    echo '<td>' . $row['time'] . '</td>';
    echo '<td>' . $row['type'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['city'] . '</td>';
    echo '<td>' . $row['pincode'] . '</td>';
    echo '<td>' . $row['state'] . '</td>';
    echo '<td>' . $row['country'] . '</td>';
    echo '</tr>';
  }
  ?>
</table>
    </div>
<button onclick = "window.location.href='logout.php';>Logout</button>
</center>
</body>
</html>

