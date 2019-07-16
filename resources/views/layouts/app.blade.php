<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <title>{{config('app.name')}}</title>
</head>
<body data-spy="scroll" data-target="#main-nav" id="home">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" id="main-nav">
    <div class="container">
        <a id="navBrand" href="/" class="navbar-brand">
            {{config('app.name')}}</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery-head-section" class="nav-link">Galéria</a>
                </li>
                <li class="nav-item">
                    <a href="#about-head-section" class="nav-link">Rólunk</a>
                </li>
                <li class="nav-item">
                    <a href="#contacts-head-section" class="nav-link">Kapcsolatok</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- HOME SECTION -->
<header id="home-section">
    <div class="primary-overlay">
        <div class="home-inner container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 offset-lg-8 p-2">
                    <a class="p-2" href="http://facebook.com"><i class="fab fa-facebook fa-3x"></i></a>
                    <a class="p-2" href="http://instagram.com"><i class="fab fa-instagram fa-3x"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <h1 class="display-4"> <strong>Üdvözöljük</strong> weboldalunkon!
                    </h1>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <h3 class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </h3>
                    </div>

                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <h3 class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </h3>
                    </div>

                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <h3 class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card bg-dark">
                            <img class="img-fluid" src="images/gallery-wide.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- GALLERY HEAD -->
<section id="gallery-head-section" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Galéria</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et fugiat enim provident tempora. Dicta praesentium totam sunt commodi atque expedita.
                </p>
                <a href="" class="btn btn-outline-secondary">Find Out More</a>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SECTION  -->
<section id="gallery-section" class="pt-4">
    <div class="container">
        <div class="">
            @yield('gallery_photo')
        </div>
    </div>
</section>

<!-- ABOUT HEAD -->
<section id="about-head-section" class="bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Rólunk</h1>
                <p class="lead">
                    @yield('about_head_text_top')
                </p>
                <a href="" class="btn btn-outline-light">Find Out MOre</a>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION  -->
<section id="about-section" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-2">
                <div class="card" id="creator">
                    <div class="card-body text-dark text-center">
                       <img src="images/person.jpg" alt="" class="img-fluid rounded-circle">
                        <div class="card-title">
                            <h3>Antal Attila</h3>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, vitae, voluptates? Perferendis, obcaecati placeat est.
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8 order-1">
                <h3>Create Your Passion</h3>
                <p>@yield('about_head_text_bottom')</p>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla porro aperiam, quibusdam at esse voluptate!
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla porro aperiam, quibusdam at esse voluptate!
                    </div>
                </div>
                <div class="d-flex">
                    <div class="p-4 align-self-start">
                        <i class="fas fa-check fa-2x"></i>
                    </div>
                    <div class="p-4 align-self-end">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla porro aperiam, quibusdam at esse voluptate!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTS HEAD -->
<section id="contacts-head-section" class="bg-secondary py-3">
    <div class="primary-overlay">
        <div class="container">
            <div class="row">
                <div class="col text-center py-5">
                    <h1 class="display-4">Kapcsolatok</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et fugiat enim provident tempora. Dicta praesentium totam sunt commodi atque expedita.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTS SECTION  -->
<section id="contacts-section" class="bg-light py-5">
    <div class="container py-2">
        <div class="row">
            <div class="card col-md-6 order-2 border border-dark">
                <div class="card-body">
                    <h4 class="mb-4">Hagyjon üzenetet</h4>
                    {!! Form::model(['method'=>'POST', 'action'=>'GuestController@store'])!!}
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Név">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea rows="5" name="message" class="form-control" placeholder="Üzenet"></textarea>
                        </div>
                        <input type="submit" value="Elküldöm" class="btn btn-danger btn-lg btn-block">
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6 order-1">
                <h3 class="display-4">Elérhetőségek</h3>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, assumenda. Fugit quam expedita, repellat provident velit cum! Id, sit amet! </p>
                @yield('contacts')
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="main-footer py-2">
    <div class="container">
        <div class="row justify-content-center py-4">
                <h3 class="mr-2">{{config('app.name')}}</h3>
                <p class="">Copyright &copy; <span id="year"></span></p>
        </div>
    </div>
</footer>




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
    //Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    //Init Scrollspy
    $('body').scrollspy({target: '#main-nav'});

    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });



</script>

</body>
</html>