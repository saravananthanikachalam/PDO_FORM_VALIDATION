<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN USING BOOTSTRAP</title>
    <link rel="stylesheet" href="../STYLE/login.css">
</head>
<body>
    <div class="loki">
        <div class="login">
            <form action="../CODE/PDO_LOG.PHP" method="POST">
                <label for="chk" aria-hidden="true">LOGIN</label>
                <input type="text" name="Fname" placeholder="User Name" required="">
                <input type="password" name="Pass" placeholder="Password" required="">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    
    </div>
</body>
</html>