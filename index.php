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

        <div class="container">
            <div class="dropdown" style="margin-bottom: 10px;">
                <div>
                    <h3 color style="color: aliceblue;">วงดนตรี</h3>
                </div>
                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    วงดนตรีทั้งหมด
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
                    <li><a class="dropdown-item" href="#">ไทย</a></li>
                    <li><a class="dropdown-item" href="#">ลูกทุ่ง</a></li>
                    <li><a class="dropdown-item" href="#">สากล</a></li>
                    <li><a class="dropdown-item" href="#">เกาหลี</a></li>
                </ul> -->
                <form action="show.php" method="post">
                    <select >
                        <option value="all">ทั้งหมด</option>
                        <option value="thai">ไทย</option>
                        <option value="cun">ลูกทุ่ง</option>
                        <option value="inter">สากล</option>
                        <option value="sk";type="submit">เกาหลี</option>
                    </select>
                </form>
            </div>
            <?php
            include('conn.php');
            $sql = "select * from artist";
            $result = $conn->query($sql);
            $num = $result->num_rows;

            echo '<div class="row" style="cursor: pointer;">';
            for ($i = 1; $i <= $num; $i++) {
                $row = $result->fetch_assoc();
                echo <<< PRT
                    <div class="col-4" style="cursor: pointer;" onclick="location.href='show.php?page=$row[id]';">
                        <img class="img-fiuid" src="$row[image]" style="width: 100%">
                    </div>
             PRT;
            }
            echo '</div>';
            ?>
        </div>
    </div>
</body>

</html>