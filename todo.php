<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url(./image/background.jpg) no-repeat center center fixed;
            background-size: cover;
            background-color: rgba(240, 240, 240, 1);
        }

        .container {
            margin-top: 30px;
        }

        .form-control {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            color: #fff; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-primary {
            width: 100%;
        }

        .table {
            width: 100%;
        }

        td {
            padding: 8px;
        }

        h3 {
            margin-top: 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            color: #fff; 
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
        }

        .bg-white {
            background-color: rgba(0,0,0,0.5);
        }

        .shadow {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-primary">
<a  style="float: right; margin:10px;" href="logout.php" class="btn btn-warning">
                Logout
            </a>   
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">ToDo</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
</button>
                </div> 
            </div>
        </div>
    </form>

    <!-- getdata -->
    <?php
    include "config.php";
    $rawData = mysqli_query($con, "SELECT * FROM tbltodo");
    ?>
    
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody>
                    <?php while($row = mysqli_fetch_array($rawData)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['list']; ?></td>
                            <td style="width: 10%;">
                                <a href="delete.php?ID=<?php echo $row['id']; ?>" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-eraser"></i>
                                </a>
                            </td>
                            <td style="width: 10%;">
                                <a href="update.php?ID=<?php echo $row['id']; ?>" class="btn btn-outline-success">
                                    <i class="fa-solid fa-square-pen"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody> 
            </table>  
        </div>
    </div>
</body>
</html>
