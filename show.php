<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg"> 
        <div>
            <h3 class="banname">CSMSU Music Award 2023</h3>
        </div>
        <?php
        include('conn.php');
        $id = $_GET['page'];
        $sql = "select * from artist WHERE id =$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        echo <<<PTR


        <div class="MN">
        <div>
            <h5 style="color: aliceblue;"><a href="index.php" style="text-decoration: none; color: rgb(72, 69, 69);">หน้าแรก</a>/$row[name]</h5>
        </div>
        <div class="card" style="width: 400px;align-items: center;height: 450px;">
            <img class="img-fiuid" src="$row[image]" style="width: 100%">
            <div class="card-body">
                <h3>$row[name] - ไทย</h3>
                <p class="card-text">$row[description]</p>
            </div>
        </div>

        PTR;

        ?>
       

       

        </div>
</body>

</html>