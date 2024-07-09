<html>
<head>
    <title>Display</title>
    <style>
        body
        {
            background:#92cce4
        }
        table{
            background-color: #fff;
        }
        </style>
</head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);




//echo $total';

if($total != 0)
{
    ?>
    <h2 align="center">Displaying All Records</h2>
    <center><table border="1" cellspacing="7" width=100%>
    <tr>
        <th width="5%"> ID</th>
        <th width="10%"> Username</th>
        <th width="10%"> Email</th>
        <th width="5%"> Password</th>
        <th width="25%"> Operations</th>
</tr>


    <?php
    while ($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td> ".$result['id']."</td>
        <td> ".$result['username']."</td>
        <td> ".$result['email']."</td>
        <td> ".$result['password']."</td>
        <td><a href='update_design.php?id=".$result['id']."&un=".$result['username']."&em=".$result['email']."&pw=".$result['password']."'>Update</a></td>
    </tr>";
    

    }
}
else{
   echo"No records found"; 
}
?>
</table>
</center>
</html>