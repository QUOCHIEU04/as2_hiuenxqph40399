{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('layout.partial.css')

</head>

<body>
  @include('layout.partial.nav')


    <div class="container">
        <div class="row">
            <h1>Welcome {{ $name }} to my website!</h1>
            
            
            

            <nav>
                @if (!is_logged())
                    <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
                @endif

                @if (is_logged())
                    <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
                @endif
            </nav>
        </div>
    </div>
@include('layout.partial.js')

</body>

</html>



 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    @include('layout.partial.css')

    <style>
        body {
            padding-top: 56px;
        }
        .product {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" width="100px" src="{{ asset('assets/admin/img/haha.png') }}" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>

                    <li>
                        <nav>
                            @if (!is_logged())
                                <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
                            @endif
            
                            @if (is_logged())
                                <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
                            @endif
                        </nav>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Welcome to MyStore</h1>
                    <p class="lead mb-5 text-white-50">Your one-stop shop for all your needs</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 product">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Product Image">
                    <div class="card-body">
                        <h4 class="card-title">Product 1</h4>
                        <p class="card-text">Description of Product 1.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Buy Now!</a>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4 product">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Product Image">
                    <div class="card-body">
                        <h4 class="card-title">Product 2</h4>
                        <p class="card-text">Description of Product 2.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Buy Now!</a>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4 product">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Product Image">
                    <div class="card-body">
                        <h4 class="card-title">Product 3</h4>
                        <p class="card-text">Description of Product 3.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Buy Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; MyStore 2024</p>
        </div>
    </footer>

    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

