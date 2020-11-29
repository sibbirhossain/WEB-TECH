<?php include '../controller/_dbconnect.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Balance</title>
</head>

<body>
    <table align="center" width="300px" ; height="20px" ; border="1px">
        <tr>
            <th>Balance</th>
        </tr>
        <tr>
            <td>
                <?php
                $sql = "SELECT *FROM user1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['balance'];
                    }
                }
                ?>
            </td>
        </tr>
    </table>
    <label for="add">Add Balance</label>
    <input type="text">
   
    
</body>

</html>