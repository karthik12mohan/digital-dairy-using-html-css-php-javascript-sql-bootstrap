<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    </head>
    <body>
        <div class = "submission-form">
            <h1>Secret Dairy</h1>
            <h3>Store your thoughts permanently and securely.</h3>
            <h3>Log in using your username and password.</h3>

            <form name = "login" action = "index_dairy.php" onsubmit = "return validation()" method = "POST">
                <p>
                    <input type = "text" id = "email" name = "email" placeholder = "Your Email">
                </p>
                <p>
                    <input type = "password" id = "password" name = "password" placeholder = "Password">
                </p>
                <p>
                    <label for="loggedin">Stay logged In</label>
                    <input type="checkbox" id="loggedin" name="loggedin">
                </p>
                <p>
                    <input type = "submit" id = "btn" name = "btn" class = "btn btn-success" value = "log In">
                </p>
            </form>

            <script>
            function validation()  
            {  
                var id=document.login.email.value;  
                var ps=document.login.password.value;  
                if(id.length == "" && ps.length == "") {  
                    alert("email and password fields are empty");  
                    return false;  
                }
                else  
                {  
                    if(id.length == "") {  
                        alert("email is empty");  
                        return false;  
                    }   
                    if (ps.length == "") {  
                        alert("password is empty");  
                        return false;  
                    }  
                }                             
            }
            </script>

            <a href="index_register.php">Sign up</a>
        
        </div>
    </body>
</html>
