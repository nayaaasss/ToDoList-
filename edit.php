<?php
include 'db.php';

//select data yang akan diedit
$q_select = "SELECT * FROM task WHERE task_id = '".$_GET['id']."'";
$run_q_select = mysqli_query($conn, $q_select);
$d = mysqli_fetch_object($run_q_select);

//update data
if(isset($_POST['edit'])) {
    $q_update = "UPDATE task SET task_lable ='".$_POST['task']."' WHERE task_id = '".$_GET['id']."'";
    $run_q_update = mysqli_query($conn, $q_update);

    header('Refresh:0; url=index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gaya.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="title">
            <i class='bx bx-sun'></i>
            <span>To Do List</span>
        </div>

        <div class="description">
            <? date("1, d M Y")?>
        </div>

        </div>


        <!-- Content -->
        <div class="content">
        <div class="card">
            <form action="" method="post">
                <input name="task" type="text" class="input-control" placeholder="Edit Task" value="<?=$d->task_lable?>">
                <div class="text-right">
                    <button type="submit" name="edit">Edit</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
</body>
</html>