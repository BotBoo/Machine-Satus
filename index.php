<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine Status</title>
</head>
<body>

    <form action="includes/add_status.php" method="post">
        <label>Machine Name</label>
        <input type="text" name="machine_name">
        <label>Process Status</label>
        <input type="text" name="status">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>