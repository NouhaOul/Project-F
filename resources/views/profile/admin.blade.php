
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{ asset("/css/fontawesome.min.css") }}">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset("/css/templatemo-style.css") }}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url("#") }}">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url("#") }}">Daily Report</a>
                                <a class="dropdown-item" href="{{ url("#") }}">Weekly Report</a>
                                <a class="dropdown-item" href="{{ url("#") }}">Yearly Report</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("products") }}">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("accounts.html") }}">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url("#") }}">Profile</a>
                                <a class="dropdown-item" href="{{ url("#") }}">Billing</a>
                                <a class="dropdown-item" href="{{ url("#") }}">Customize</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="{{ url("login.html") }}">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            {{-- <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Latest Hits</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div> --}}
                {{-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>                        
                    </div>
                </div> --}}
                {{-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">Notification List</h2>
                        <div class="tm-notification-items">
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-01.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Jessica</b> and <b>6 others</b> sent you new <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>. Check new orders.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-02.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Oliver Too</b> and <b>6 others</b> sent you existing <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>. Read more reports.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-03.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Victoria</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">order updates</a>. Read order information.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-01.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">product records</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-02.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">order stuffs</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-03.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-01.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-02.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="{{ asset("/img/notification-03.jpg") }}" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="{{ url("#") }}"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 tm-block-col">
              
                        <h2 class="tm-block-title">Users List</h2>
                        <table class="table">

                                <tr>
                                    <th scope="col">Admin NO.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">Tele</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">Role</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($adminUsers as $admin)
    
                                    <tr>
                                        <th scope="row"><b>{{$admin->id}}</b></th>
                                        <td>
                                            <div class="tm-status-circle moving">
                                            </div>{{$admin->name}}
                                        </td>
                                        <td><b>{{$admin->prenom}}</b></td>
                                        <td><b>{{$admin->tele}}</b></td>
                                        <td><b>{{$admin->adress}}</b></td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->role}}</td>
                                        <td colspan="3">
                    
                                            <form action="{{ route('profile.admin', ['id' => $admin->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                <a href="" class="btn btn-info btn-outline-warning me-md-2">Edit</a>
                                            </form>
                                        </td>
    
                                    </tr>
                                @endforeach
                                <a href="" class="btn btn-info btn-outline-warning me-md-2">ajout Admin</a>

                    
                </div>

                <br>
                
                <div class="col-12 tm-block-col">
              
                        <h2 class="tm-block-title">coach List</h2>
                        <table class="table">

                                <tr>
                                    <th scope="col">Coach NO.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">Tele</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Cv</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Role</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($coachUsers as $coach)
    
                                    <tr>
                                        <th scope="row"><b>{{$coach->id}}</b></th>
                                        <td>
                                            <div class="tm-status-circle moving">
                                            </div>{{$coach->name}}
                                        </td>
                                        <td><b>{{$coach->prenom}}</b></td>
                                        <td><b>{{$coach->tele}}</b></td>
                                        <td><b>{{$coach->adress}}</b></td>
                                        <td>{{$coach->email}}</td>
                                        <td>{{$coach->cv}}</td>
                                        <td>{{$coach->image}}</td>
                                        <td>{{$coach->role}}</td>
                                        <td colspan="3">
                    
                                            <form action="{{ route('profile.admin', ['id' => $coach->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                <a href="" class="btn btn-info btn-outline-warning me-md-2">Edit</a>
                                            </form>
                                        </td>
    
                                    </tr>
                                @endforeach   
                </div>
                <div class="col-12 tm-block-col">
              
                        <h2 class="tm-block-title">member List</h2>
                        <table class="table">

                                <tr>
                                    <th scope="col">Member NO.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">Tele</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($memberUsers as $member)
    
                                    <tr>
                                        <th scope="row"><b>{{$member->id}}</b></th>
                                        <td>
                                            <div class="tm-status-circle moving">
                                            </div>{{$member->name}}
                                        </td>
                                        <td><b>{{$member->prenom}}</b></td>
                                        <td><b>{{$member->tele}}</b></td>
                                        <td><b>{{$member->adress}}</b></td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->role}}</td>
                                        <td colspan="4">
                    
                                            <form action="{{ route('profile.admin', ['id' => $coach->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                <a href="" class="btn btn-info btn-outline-warning me-md-2">Edit</a>
                                            </form>
                                        </td>
    
                                    </tr>
                                @endforeach   
                </div>
                

    <script src="{{ asset("/js/jquery-3.3.1.min.js") }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset("/js/moment.min.js") }}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{ asset("/js/Chart.min.js") }}"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ asset("/js/tooplate-scripts.js") }}"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>