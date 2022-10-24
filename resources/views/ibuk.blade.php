<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fery - @yield('title')</title>
</head>
<body>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <!--CSS LAINNYA-->
        <style>
            .jumbotron {
  padding-top: 6rem;
  background-color: #e2edff;
}

#peojects {
  background-color: #e2edff;
}

section {
  padding-top: 5rem;
}
        </style>

    <body id="home">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Fery Ferdinansyah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" href="./profil">Home</a>
                        <a class="nav-link active" href="./about">About</a>
                        <a class="nav-link active" href="./project">Projects</a>
                        <a class="nav-link active" href="./contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <!--End of navbar-->    
        @yield('conten')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,256L60,224C120,192,240,128,360,117.3C480,107,600,149,720,181.3C840,213,960,235,1080,218.7C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <footer class="bg-primary text-white text-center p-3">
            <p>by <a href="https://www.instagram.com//?fbclid=IwAR0ixusqBhGakvMo8i3OC_878Z7VQOKecCnSLfvkur53vq0fEQjRu-YTgx8" class="text-white fw-bold">Fery Ferdinansyah</a></p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        
</body>
</html>