<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
      <!-- Sidebar Navigation-->
       @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
       



          <style>
        /* Center the form horizontally */
        .form-container {
            display: flex;
            justify-content: center;
            padding-top: 50px; /* Pushes the form down, adjust as needed */
        }

        /* Set form width and center its content */
        form {
            text-align: center;
            width: 100%;
            max-width: 400px; /* Adjust the form width if needed */
        }

        /* Increase input field width */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }

        /* Optional button styling */
        button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Add Category</h1>
<div class="form-container">
    <form action="{{url('add_category')}}" method="POST">
        @csrf
        <div class="mb-3">
           
            <input type="text" name="add_category" placeholder="Enter category name">
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>


<!-- table -->



    <h2 class="mt-5">Categories List</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->category_name }}</td>
                 
                </tr>
            @endforeach
        </tbody>
    </table>

        











            

</div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>