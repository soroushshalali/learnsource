<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/7b691a6b0e.js" crossorigin="anonymous"></script>
    <title>Panel</title>
</head>

<body>
    <?php include './components/navbar.php'; ?>



    <?php

    // require_once './libs/crud.php';


    // $conn = new mysqli('localhost', 'root', '', 'learnsource');
    // if ($conn->connect_error) {
    //     echo 'There is an Error: ' . $conn->connect_error;
    // } else {
    // $query = "INSERT INTO `articles`(`title`, `text`) VALUES ('asdtitle' , 'textdlkasdkaskdjalskd')";
    // $query = "select * from articles";
    // $query="update articles set id='8' where id=7";
    // $query="delete from articles where id=8";
    // $result = $conn->query($query);
    // // while ($row = $result->fetch_assoc()) {
    // while ($row = $result->fetch_array()) {
    //     // var_dump($row);
    //     echo $row['id'] . '<br>';
    // }


    //insert Prepare()
    // $title = 'ttttttttttt';
    // $text = 'text';
    // $stmt_insert = $conn->prepare("INSERT INTO `articles`(`title`, `text`) VALUES (? ,?)");
    // $stmt_insert->bind_param('ss',$title,$text);
    // $stmt_insert->execute();

    //delete Prepare();
    // $id = 9;
    // $stmt_del = $conn->prepare("delete from articles where id=?");
    // $stmt_del->bind_param('i', $id);
    // $stmt_del->execute();


    //update Prepare()
    // $title = 'soaodasidopaspodipasodiaposidopas';
    // $id = 4;
    // $stmt_update = $conn->prepare("update articles set title=? where id=?");
    // $stmt_update->bind_param('si', $title, $id);
    // $stmt_update->execute();


    //select Prepare()
    // $sql = "SELECT * FROM users WHERE id=?"; // SQL with parameters
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $id);
    // $stmt->execute();
    // $result = $stmt->get_result(); // get the mysqli result
    // $user = $result->fetch_assoc(); // fetch data  
    // }

    ?>





    <div class="header mb-5">
        <div class="container">
            <div class="form-section mx-auto">
                <form class="" action="./backend/panel_back.php" method="POST" enctype = "multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="abstarct">Abstarct</label>
                        <textarea id="abstarct" class="form-control" name="abstract" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea id="text" class="form-control" name="text" rows="3"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>







    <?php
    include './components/footer.php';
    ?>
</body>

</html>