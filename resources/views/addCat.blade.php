<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{ asset("/css/fontawesome.min.css") }}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{ asset("/jquery-ui-datepicker/jquery-ui.min.css") }}" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset("/css/templatemo-style.css") }}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
        <form action="{{route('storeCat')}}" method="post">
            @csrf

            <input type="text" class="form-control" id="name" name="name" placeholder="Enter new category">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>

        </form>
  </body>
</html>
