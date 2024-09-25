<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise4</title>
    <style>
        
        button {
            padding: 80px 80px; 
            font-size: 50px; 
        }
    </style>
</head>
<body>
    <form method="GET" action="">
        <input type="hidden" name="name" value="CEDRIC VON SADO">
        <button type="submit">CLICK HEREEEEEEE</button>
    </form>
    
    <div>
        <?php
        if (isset($_GET['name'])) {
            echo htmlspecialchars($_GET['name']);
        }
        ?>
    </div>
</body>
</html>
