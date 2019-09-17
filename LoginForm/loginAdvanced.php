<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Login Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>

    <body>
        <div class='container' style="max-width:500px">
            <form id='nameForm' method="POST">
                <br/>
                <br/>
                <br/>      
                <div class="input-field">
                    <label for="userName">Username:</label>
                    <input type="text" id='userName' name="userName" />
                </div>
                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" id='password' name="password"/>
                </div>
                <br/>
                <br/>
                <button class="waves-effect waves-light btn" name="submit">Submit</button>
            </form>    
            
            <?php require('loginController.php'); ?>
        </div> 
        
            

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>