<!DOCTYPE>
<html lang="fr">
    <head>
        <title>Burnout Life</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/9f5978fa26.js"></script>
        <link href="public/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="container-fluid">
        <header class="col-lg-1">            
            <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <i class="fas fa-bars fa-lg"></i>
                </button>                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav nav-pills navbar-nav">
                        <li class="nav-item"><a class="nav-link" href=""><img src="public/img/menufront/home.png" alt="house icon"></a></li>
                        <li class="nav-item"><a class="nav-link" href=""><img src="public/img/menufront/passport.png" alt="passport icon"></a></li>
                        <li class="nav-item"><a class="nav-link" href=""><img src="public/img/menufront/tshirt.png" alt="tshirt icon"></a></li> 
                    </ul>
                    <ul class="nav nav-pills navbar-nav">
                        <li class="nav-item"><a class="nav-link" href=""><img src="public/img/menufront/profil.png" alt="profil icon"></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <section id="listActivities">
                <?= $content ?>
            </section>            
        </main>
    </body>
</html>