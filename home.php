<?php

    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM login");

    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['idguru'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Hello, <?php echo $_SESSION['idguru']; ?></h1>

    <?php

        }
        else{

            header("Location: index.php");
            exit();

        }

    ?>

    <table>

        <td>NO KAD PENGENALAN GURU</td>

        <?php

            $no = 1;

            while ($res = mysqli_fetch_array($result)){
                echo "<tr>";

                echo "<td>".$res['idguru']."</td>";
                
                echo "<td>".$res['password']."</td>";

                $no++;

            }
            
        ?>

    </table>

    <a href="logout.php">Logout</a>

</body>
</html>
