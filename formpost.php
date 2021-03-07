<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2> My articale</h2>
        <form action="connection.php" method="post" >

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>


                <textarea class="form-control" name="content"id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>

            <div class="form-group">

             
              <label for="exampleInputEmail1">created at:</label>
                <?php
                date_default_timezone_set('Africa/Cairo');
                $created= date("d/m/Y  h:i:sa ");
                echo $created   ?>



            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>