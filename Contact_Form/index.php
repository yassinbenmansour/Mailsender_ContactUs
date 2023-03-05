
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<div class="container-fluid p-5  ">
    <h1 class="text-center text-black">Contact us</h1>
    <div class="p-5 m-5 ">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <label for="name" class="form-label">Nom :</label>
                <input type="text" name="nom" class="form-control">

                <label for="mail" class="form-label">Email :</label>
                <input type="email" name="mail" class="form-control">

                <label for="Tel" class="form-label">Tel :</label>
                <input type="text" name="tel" class="form-control">

                <label for="website" class="form-label">Site web :</label>
                <input type="text" name="web" class="form-control">

                <label for="mesg" class="form-label">Message :</label>
                <textarea class="form-control" rows="5"  name="msg"></textarea>

                <input type="submit" name="send" class="btn btn-outline-dark my-4 float-end" value="Send">
        </form>

        <?php
include_once "./traitement.php";
?>
        
    </div>
</div>


</body>
</html>