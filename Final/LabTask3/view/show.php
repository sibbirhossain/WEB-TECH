<?php include '../data/_dbconnection.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Info.</title>
</head>

<body>
    <table align="center" width="300px" ; height="20px" ; border="1px">
        <tr>
            <th>user</th>
        </tr>
        <tr>
            <td>
                <?php
                $sql = "SELECT *FROM user1;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['username'];
                    }
                }
                ?>
            </td>
        </tr>
    </table>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
        
        <input type="submit" name="delete" value=delete >
        <br><br><br>
        <?php include('input.php'); ?>
        <input type="submit" name="update" value="update">
        
    </form>
    
    <?php require '../controller/update.php'  ?>
    <?php require '../controller/delete.php'  ?>
   
    
</body>

</html>