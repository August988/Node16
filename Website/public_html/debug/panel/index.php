<!DOCTYPE html>
<html>
<head>
    <title>Games - Node16 Debug</title>
    <link rel="icon" type="x-icon" href="../../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="og:title" content="Debug">
    <meta name="author" content="NODE16 Development Team">
    <meta name="description" content="Node16, it is a website. It is for old brick builders. Good for use.">
    <meta name="og:description" content="Node16, it is a website. It is for old brick builders. Good for use.">
    <meta name="og:site_name" content="Node16">
    <meta name="og:type" content="website">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
    .divider {
        border: 1px solid;
        border-color: #d0d0d0;
        width: 150px;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 10px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand active" href="../">Debug</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../">Return to node16</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Games</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="your_php_file.php" method="post" enctype="multipart/form-data">
                <input class="form-control mr-sm-2" type="search" placeholder="Search for Assets" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <div class="container card" style="width: 1000px; height: 700px;">
        <br>
        <h2>Debug Panel</h2>
        <form action="../post/panel.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="panelPassword" name="panelPassword">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">NODE16</button>
        </form>
        <br>
    </div>
</body>
</html>
