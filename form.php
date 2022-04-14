<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['adress'];
$phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>39-dars</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Familiya</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Telefon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td><?php echo $fname;?></td>
                    <td><?php echo $lname;?></td>
                    <td><?php echo $address;?></td>
                    <td><?php echo $phone;?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>