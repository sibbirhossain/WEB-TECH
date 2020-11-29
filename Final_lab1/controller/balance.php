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
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
        <label for="amount">Enter Amount</label>
        <input type="text" name="amount" value=<?php echo $amount ?> >
        <input type="submit" name="add" value="Add">
        <input type="submit" name="withdraw" value="Withdraw">
    </form>
    
    
   
    
</body>

</html>
