<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo asset('css/login.css')?>" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Hospital Admin Page</title>
</head>
<body>

    <div class="container">
        @yield('main')
      </div>

      
    <div class="container">
        @yield('display')
      </div>

    <div class="container">
   
    <table class="table">

        <thead>
        
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Doctor Name</th>
          <th scope="col">Email</th>

         
         </tr>
         </thead>
         <tbody>
           @php($i = 1)
           @foreach($doc_data as $doc)
            <tr>
              <th scope="row"> {{ $i++ }}</th>
              <td>{{ $doc->fname." ".$doc->lname}}</td>
              <td>{{ $doc->email }}</td>


            </tr>
            @endforeach
         
         </tbody>
         
         </table>

        </div>

         <a href="/logout">Log Out </a>

         

    
</body>
</html>