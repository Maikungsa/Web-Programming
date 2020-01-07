// Saranphon Phaithoon Section 1  6088114
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity1_6088114</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Student List</h1>
    <table>
        <tr>
            <th>Firstname</th></td>
            <th>Lastname</th>
            <th>Birthdate</th>
            <th>MobilePhone</th>
            <th>Age</th>
        </tr>
    <?php
        $conn = new mysqli("localhost", "root", "", "student");
        if(!$conn) {
            die("Could not connect: ".$conn->connect_error);
        }
        $sql = "SELECT * FROM personal_info";
        $result = $conn->query($sql);
        $total_age = 0;
        while($row = $result->fetch_assoc()) {
            $year = explode("-", $row['Birthdate']);
            $age = date("Y") - $year[0];
            echo "<tr><td>" . $row['Firstname'] . "</td>";
            echo "<td>" . $row['Lastname'] . "</td>";
            echo "<td>" . $row['Birthdate'] . "</td>";
            echo "<td>" . $row['Mobilephone'] . "</td>";
            echo "<td>" . $age . "</td></tr>";
            $total_age += $age;
        }
        echo "</table><br>Total value of age of all student is " . $total_age;
        $conn->close();
    ?>
</body>
</html>