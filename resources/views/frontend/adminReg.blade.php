<head>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"  rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"  rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"  rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/Login.css') }}">
    
</head>
    <body>
<div class="wrapper">
        <div class="logo">
            <img src="{{ asset('/assets/TraitMatrix Logo.png') }}" alt="">

            
        </div>
        <div class="text-center mt-4 name">
            Q3 Admin Registration
        </div>
        <form class="p-3 mt-3" action="{{ url('checkreg') }}" method="POST">
            @if(Session::get('fail'))
            <div class="alert alert-danger">
               {{ Session::get('fail') }}
            </div>
         @endif
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="userName" placeholder="Name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="userName" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            
        </div>
    </div>
</body>