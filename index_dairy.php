<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index_login.php">Secret Dairy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-outline-success my-2 my-sm-0 align-right" href = "index_register.php">logout</a>
            </form>
            </ul>
        </div>
    </nav>

    <h1>Type In your dairy<h1>
        <div class = "dairy-form">
                <form name = "dairy" action = "dairy.php" method = "POST">
                    <p>
                        <textarea id="dairy" name="dairy" rows="11" cols="82" required></textarea>
                    </p>
                    <p>
                        <input type = "submit" id = "btn" name = "btn" class = "btn btn-primary" value = "Upload">
                    </p>
                </form>
        </div>
    </body>
</html>
