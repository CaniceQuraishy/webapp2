<html>
<head>
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #92cce4;
            padding-top: 20px; /* Adding some top padding for space */
        }
        table {
            background-color: #fff;
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }
        table th, table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .top-right {
            text-align: right;
            margin-right: 50px; /* Adjusted margin-right for spacing */
            margin-bottom: 10px; /* Optional: Add margin bottom for separation */
        }
        .home-button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: 1px solid black;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        .home-button:hover {
            background-color: #333;
            color: white;
        }
    </style>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>
</head>

<body>
    <div class="top-right">
        <a href="homepage.php" class="home-button">Home</a>
    </div>

    <h2 style="text-align: center;">Displaying All Records</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include("connection.php");
        error_reporting(0);

        $query = "SELECT * FROM form";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                        <td>".$result['id']."</td>
                        <td>".$result['username']."</td>
                        <td>".$result['email']."</td>
                        <td>".$result['password']."</td>
                        <td>
                            <a href='update_design.php?id=".$result['id']."&un=".$result['username']."&em=".$result['email']."&pw=".$result['password']."'>Update</a> |
                            <a href='delete.php?id=".$result['id']."' onclick=\"return confirmDelete();\">Delete</a>
                        </td>
                      </tr>";
            }
        } else {
           echo "<tr><td colspan='5' style='text-align: center;'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
