<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>select | order</title>
    <style>
        .container {
            margin: 50px;
        }

        th,
        td {
            padding: 10px;
            font-weight: 600;
            width: 25%;
        }
    </style>
    <?php include 'header.php' ?>
<body>



    <div class="container">
        <h2>Clients Info</h2>
        <table border="1">

            <tr>
                <th>Num</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            <?php
            // connect to database 
            $conn = mysqli_connect('localhost', 'root', '', 'store');

            //check connection 
            if (!$conn) {
                echo 'connection error' . mysqli_connect_error();
            }
            // else 
            // echo ' connection is done';


            $sql = "SELECT * FROM clients";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['addres'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>

            </tbody>
        </table>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>