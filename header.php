<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Self Study Report Generator</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>SSR-Generator</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Helping Hand</p>
                    <li class="active">
                        <a href="Index.php">Home</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Criteria-3</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="3.1.php">3.1</a></li>
                            <li><a href="3.2.php">3.2</a></li>
                            <li><a href="3.3.php">3.3</a></li>
                            <li><a href="3.4.php">3.4</a></li>
                            <li><a href="3.5.php">3.5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Criteria-4</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="download.php">Download</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="logout.php" class="download">Logout</a></li>
                    <li><a href="Index.php">Back to home</a></li>
                </ul>
            </nav>
    </body>
</html>
        
