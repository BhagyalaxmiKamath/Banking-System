<!DOCTYPE html>
<html lang="en">

<head>
    <title>TJSV Bank </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="style.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: Poppins;
        }

        .footer {
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="center mt-0 #ffab00 amber accent-3">
        <h3><b><span><img src="https://s.clipartkey.com/mpngs/s/323-3239771_money-background-home-transparent-clipart-of-a-bank.png" style="height:60px;width:50px" /></span>Few Steps To Go...</b></h3>
    </div>
    <div class="container-fluid">

        <?php
        include 'connection.php';
        if (isset($_REQUEST['id'])) {
            $sid = $_GET['id'];
            $sql = "SELECT * FROM  customer where id=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            $rows = mysqli_fetch_assoc($result);
        }
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>

            <div class="container-fluid">
                <table class="table table-sm table-striped table-condensed table-bordered">
                    <tr>
                        <th class="text-center">Client Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Bank Balance</th>
                    </tr>
                    <tr>
                        <td class="center py-2"><?php echo (isset($rows['id']) ? $rows['id'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['name']) ? $rows['name'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['email']) ? $rows['email'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['balance']) ? $rows['balance'] : ''); ?></td>
                    </tr>
                </table>
            </div>

            <div class="container">
                <br><br><br>
                <label for="to">Transfer To:</label>
                <select id="to" name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    include 'connection.php';
                    $sid = $_REQUEST['id'];
                    $sql = "SELECT * FROM customer where id!=$sid";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "Error " . $sql . "<br>" . mysqli_error($conn);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option class="table" value="<?php echo $rows['id']; ?>">

                            <?php echo $rows['name']; ?> (Balance:
                            <?php echo $rows['balance']; ?> )

                        </option>
                    <?php
                    }
                    ?>
            </div>
            </select>
            <br>
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
            <div class="text-center">
                <button class="btn mt-3 waves-effect waves-light" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
            <br>
        </form>
    </div>
    </div>
    <footer class="center footer">
        <h6 class="info"><b>Made by Bhagyalaxmi Kamath</b></h6>
        Inter at The Sparks Foundation
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {

    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array from which the amount is to be transferred.

    // check input of negative value by user
    if (($amount) < 0) {
        echo '<script>';
        echo ' alert("Please enter correct amount.")';  // showing an alert box.
        echo '</script>';
    }

    // check insufficient balance.
    else if ($amount > $sql1['balance']) {
        echo '<script>';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $sql = "SELECT * from customer where id=$to";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customer set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);

        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customer set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);


        $sql = "INSERT INTO transactions(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>