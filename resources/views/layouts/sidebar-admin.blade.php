<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>


    <div class="card">
        <div class="wrapper">
            <div class="sidebar">
                <div class="card-header"> <strong> Admin Resources</strong></div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <a href="/admin"><i class="fa fa-home"></i>Home
                            </a> </li>
                        <li class="list-group-item"><a href="/admin/users"><i class="fa fa-users" aria-hidden="true"></i>Users</a>
                        </li>
                        <li class="list-group-item"><a href="/admin/recipients"><i class="fa fa-user-circle-o"
                                    aria-hidden="true"></i>Recipients</a></li>
                        <li class="list-group-item"><a href="/admin/transactions"><i class="fa fa-credit-card"
                                    aria-hidden="true"></i>Transactions</a></li>
                        <li class="list-group-item"><a href="/admin/profile"><i class="fa fa-user" aria-hidden="true"></i>Profiles</a>
                        </li>
                        <li class="list-group-item"><img src="{{URL::asset('/images/vector.jpg')}}" height="275px"
                                width="150px" alt="" srcset=""></li>

                    </ul>
                </div>


            </div>
        </div>
    </div>
</body>

</html>