<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Data</title>
  <style>
    table {
      width: 50%;
      margin: 20px auto;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #999;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    h2 {
      text-align: center;
    }
  </style>
</head>
<body>

<h2>Submitted Application Details</h2>
<table>
  <tr><th>Field</th><th>Value</th></tr>
  <tr><td>Full Name</td><td><?php echo htmlspecialchars($_POST['fullname']); ?></td></tr>
  <tr><td>Email</td><td><?php echo htmlspecialchars($_POST['email']); ?></td></tr>
  <tr><td>Phone</td><td><?php echo htmlspecialchars($_POST['phone']); ?></td></tr>
  <tr><td>Course</td><td><?php echo htmlspecialchars($_POST['course']); ?></td></tr>
  <tr><td>Date of Birth</td><td><?php echo htmlspecialchars($_POST['dob']); ?></td></tr>
  <tr><td>Gender</td><td><?php echo htmlspecialchars($_POST['gender']); ?></td></tr>
  <tr><td>Education</td><td><?php echo htmlspecialchars($_POST['education']); ?></td></tr>
  <tr><td>Address</td><td><?php echo nl2br(htmlspecialchars($_POST['address'])); ?></td></tr>
  <tr><td>City</td><td><?php echo htmlspecialchars($_POST['city']); ?></td></tr>
  <tr><td>State</td><td><?php echo htmlspecialchars($_POST['state']); ?></td></tr>
  <tr><td>Zip Code</td><td><?php echo htmlspecialchars($_POST['zip']); ?></td></tr>
  <tr><td>Country</td><td><?php echo htmlspecialchars($_POST['country']); ?></td></tr>
</table>

</body>
</html>
