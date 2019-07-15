
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Gardonyok</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand mr-0 p-3" href="/">Gardonyok</a>
    <ul class="navbar-nav px-4">
        <li class="nav-item d-flex text-nowrap">
            <div class="d-inline mr-3 text-light rounded font-weight-light h5">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
            <form class="" action="{{ route('logout') }}" method="POST">
                @csrf
                    <input class="d-inline btn btn-primary btn-sm " type="submit" value="Kijelentkezés">
            </form>
        </li>
    </ul>
</nav>

<div class="container">
        <nav class="bg-light sidebar">
            <div class="sidebar-sticky" >
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">
                            <span data-feather="home"></span>
                            Áttekintés <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('photos.index')}}">
                            <span data-feather="image"></span>
                            Galéria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about.index')}}">
                            <span data-feather="edit-2"></span>
                            Leírás
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.contacts')}}">
                            <span data-feather="users"></span>
                            Kapcsolatok
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class=" pt-2 px-2">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                @yield('title')
            </div>
            @yield('content')

        </main>

</div>

<!-- Bootstrap core JavaScript
================================================== -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


{{--<!-- Icons -->--}}
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>
