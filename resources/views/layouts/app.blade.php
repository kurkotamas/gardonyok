<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.jpg" type="image/png">
    <title>Gardony</title>
</head>
<body data-spy="scroll" data-target="#main-nav" id="home">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm navbar-light fixed-top" id="main-nav">
    <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="images/logo.png" width="40" height="40" alt="">
            Gardony</a>
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
    <div class="dark-overlay">
        <div class="home-inner container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <h1 class="display-4">Lorem <strong>ipsum</strong> dolor sit amet.
                    </h1>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, deserunt?
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-dark txt-center card-form">
                        <div class="card-body">
                            <h3>Sign Up Today</h3>
                            <p>Please fill out this form to register</p>
                            <form action="">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-lg" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- GALLERY HEAD -->
<section id="gallery-head-section">
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
<section id="gallery-section" class="bg-light text-muted py-5">
    <div class="container">
        <div>
            <div class="card text-white mb-3">
                @yield('gallery_photo_wider')
                <div class="card-img-overlay">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                    <p>
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card-columns">
                @yield('gallery_photo')
            </div>
        </div>
    </div>
</section>

<!-- ABOUT HEAD -->
<section id="about-head-section" class="bg-primary">
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
<section id="about-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-2">
                <div class="card">
                    <div class="card-body text-dark text-center">
                       <img src="images/person4.jpg" alt="" class="img-fluid rounded-circle">
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
<section id="contacts-head-section" >
    <div class="container">
        <div class="row">
            <div class="col text-center py-5">
                <h1 class="display-4">Kapcsolatok</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et fugiat enim provident tempora. Dicta praesentium totam sunt commodi atque expedita.
                </p>
                <a href="" class="btn btn-outline-light">Find Out MOre</a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTS SECTION  -->
<section id="contacts-section" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="card col-md-6 order-2 border border-dark">
                <div class="card-body">
                    <h3 class="mb-4">Hagyjon üzenetet</h3>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Név">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control" placeholder="Üzenet"></textarea>
                        </div>
                        <input type="submit" value="Küldés" class="btn btn-outline-dark">
                    </form>
                </div>
            </div>
            <div class="col-md-6 order-1">
                <h3>Elérhetőségek</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, assumenda. Fugit quam expedita, repellat provident velit cum! Id, sit amet! </p>
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

<!-- FOOTER -->
<footer id="main-footer" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col text-center py-4">
                <h3>Gardony</h3>
                <p>Copyright &copy; <span id="year"></span></p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>
            </div>
        </div>
    </div>
</footer>

<!-- CONTACT MODAL -->
<div class="modal fade text-dark" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Us</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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


</script>

</body>
</html>