<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Machine Status</title>
</head>
<body>

    <main>
        <div class="ms-container">
            <form class="ms-form" action="includes/add_status.php" method="post">
             <label class="ms-label">Process Name</label> <br>
             <input class="ms-input" type="text" name="process-name"> <br>
             <label class="ms-label">Machine Name</label> <br>
             <input class="ms-input" type="text" name="machine_name"> <br>
             <label class="ms-label">Machine Status</label> <br>
             <input class="ms-input" type="text" name="status">
             <button class="submit-button" type="submit">Submit</button>
            </form>
        </div>
    </main>

</body>
</html>