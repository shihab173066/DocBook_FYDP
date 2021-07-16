<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Doctor Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    
    
    
    
</head>

@if(Session::has('doctor'))
<body>
<!---------section-1---------->
<!------top-heading------>
<div class="container-fluid p-0">
    <div class="section-1">
  <div class="container">
            <div class="row justify-content-end align-items-center">
            
            <div class="col-md-6 offset-3">
                <p style="margin: 0px;">Doctor's Page</p>
            </div>
            
            
            
        </div>
  </div>
    </div>
</div>

<!---------bottom heading-------->
<!---------Navigation-bar----------->
<div class="container-fluid p-0">
    <div class="bottom-heading">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container logo-relation">
  <div class="row align-items-center" style="width: 100%;">
        <div class="col-md-2">
              <div class="logo-wrap">
                  <a class="navbar-brand" href="#">
                  <img src="icons/logofin.png" alt="">
              </a>
              </div>
          </div>
         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
<div class="col-md-12">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">News Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">View Prescribed Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
              <div class="profile-wrap">
                  <div class="name">
                  <a href="#">
                   
                    <p>{{session('doctor')}}</p>
                
                  </a>
            </div>
  
              <div class="profile-photo">
                
            @foreach($doc_info as $i)
            <a href="#"><img width='100px' height='80px' src={{ "/".$i->propic }} alt="profile pic"></a>
            @endforeach
             
            
             
                
          </div>

            </div>
              <a href="/logout">Log Out </a>
            </div>
              </div>

              
     
  
   
      
      
      
      
      
      
      
     </div> 
    
</div>

   
   
   
   
   
    
    
  </div>
    
  
  </div>
</nav> 
     
     
     
     
       
    </div>
</div>


<!--------bottom heading-2------->

<div class="container-fluid p-0">
    <div class="bottom-heading2" style="background: #d2d2d2">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <div class="row align-items-center" style="width: 100%;">
          <div class="col-md-3">
             <form class="d-flex">
       
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <input type="submit" value="Find" style="background: #9ba2fd;
    border: 1px solid #6c6cff;
    color: white;
    border-radius: 10px;
    padding: 0px 33px;
    font-weight: 500;">
        
        
      </form>
      
          </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
<div class="col-md-9">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
<!--
        <select class="form-select" aria-label="Default select example" style="width: 15%;border-radius: 20px 10px 20px 10px;
    margin-right: 15px;">
       <option selected>Set location</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
       </select>
      
-->
      
      
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hospital</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="#">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ambulance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Drugs and suppliments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Saved service</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
              <div class="profile-wrap">
                  <div class="messenger">
                  <a href="#">
                      <i class="fab fa-facebook-messenger"></i>
                  </a>
            </div>
  
              <div class="notification">
                  <i class="fas fa-bell"></i>
          </div>
              </div>
     
  
   
      
      
      
      
      
      
      
     </div> 
    
</div>

   
   
   
   
   
    
    
  </div>
    
  
  </div>
</nav> 
     
     
     
     
       
    </div>
</div>


















<!--------------section--2---------->

<div class="container-fluid p-0">
  <div class="all-body-wrap" style="background: #f3f1f1;
    padding: 50px 0px;">
      <div class="container">
          <div class="body-wrap">
              <div class="catagory-location">
                 <div class="row justify-content-end">
                     <div class="col-md-6">
                  <form action="">
                                        <div class="catagory-search">
                                  <div class="row">
                           <div class="col-md-6">
                               <select class="form-select" aria-label="Default select example">
  <option selected>Search by categories</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                           </div>
                           
                           <div class="col-md-6">
                               <select class="form-select" aria-label="Default select example">
  <option selected>Search by location</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                           </div>
                           
                           
                           
                           
                           
                       </div>
                         
                           
                               
                     </div>
                  </form>
                     
                     
                     
                  </div>
                 </div>
              </div>
              
        
   
  
    <?php $id = $post_info[0]->id; ?>
    <?php $email = $post_info[0]->patient_email; ?>

    <div class="card">
        @foreach($patient_info as $p)
        @if($p->email == $email)
        @if($post_info[0]->post_type == "Post Anonymously")
        <h5 class="card-header">User {{$p->userid}}</h5>
        @else
        <h5 class="card-header">Name: {{$p->fname.' '.$p->lname}}, User {{$p->userid}}</h5>
        @endif
        
       
        <h7 class="card-header">Date and Time: {{\Carbon\Carbon::parse($post_info[0]->created_at)->toDayDateTimeString()}}</h7>
        <h7 class="card-header">Gender: {{$p->gender}}</h7>
        <div class="card-body">
         <h5 class="card-title">Category: {{$post_info[0]->problem_type}}</h5>
         <p class="card-text">{{$post_info[0]->details}}</p><br>
         
         @if($post_info[0]->prescription_count == 0)
         
         <div class="container">
          <h7>Prescriptions Given:</h7>
          <span>&#10006; &#10006; &#10006;</span><br>
          <h7>Specialist Recommendation: </h7>
          @if($post_info[0]->specialist_count == 0)
          <span>&#10006;</span>
          @else
          <span>&#9989;</span>
          @endif
         </div>
         <div class="text-center">
         
         
                <a href="give/{{$post_info[0]->id}}" class="btn btn-primary">Give Prescription</a>
           
          
         
        </div>
         @elseif($post_info[0]->prescription_count == 1)
         
         <div class="container">
          <h7>Prescriptions Given:</h7>
             <span> &#9989; &#10006; &#10006;</span><br>
             <h7>Specialist Recommendation: </h7>
             @if($post_info[0]->specialist_count == 0)
             <span>&#10006;</span>
             @else
             <span>&#9989;</span>
             @endif
          </div>


          <div class="text-center">

              <a href="give/{{$post_info[0]->id}}" class="btn btn-primary">Give Prescription</a>

           
          </div>

         @elseif($post_info[0]->prescription_count == 2)
       
         <div class="container">
          <h7 >Prescriptions Given:</h7>
          <span> &#9989; &#9989; &#10006;</span><br>
          <h7>Specialist Recommendation: </h7>
          @if($post_info[0]->specialist_count == 0)
          <span>&#10006;</span>
          @else
          <span>&#9989;</span>
          @endif
        </div>
<div class="text-center">
 
  <a href="give/{{$post_info[0]->id}}" class="btn btn-primary">Give Prescription</a>


</div>
         @elseif($post_info[0]->prescription_count == 3)
         
         <div class="container">
          <h7>Prescriptions Given:</h7>
          <span> &#9989; &#9989;  &#9989;</span><br>
          <h7>Specialist Recommendation: </h7>
          @if($post_info[0]->specialist_count == 0)
          <span>&#10006;</span>
          @else
          <span>&#9989;</span>
          @endif
         </div>
         <div class="text-center">
          <a href="give/{{$post_info[0]->id}}" class="btn btn-secondary disabled">Give Prescription</a>
          

         
        </div>
         @else

         @endif

          <br><br>
       </div>
 </div>
 <br>
        @endif
        
     @endforeach

       

   


















<!--------section-5-footer----->
<div class="container-fluid p-0">
    <div class="footer">
        <div class="container">
            <div class="row text-center" style="padding: 18px 18px;">
                <div class="col-md-3">
                    <p>Emergency Chat With </p>
                    <p><strong>Hospitals</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Emergency Chat With</p>
                    <p><strong>Doctors</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Top Article of the</p>
                    <p><strong>Doctors</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Suggesition for</p>
                    <p><strong>Covid-19</strong></p>
                </div>
                
                
                
            </div>
            
            
        </div>
    </div>
</div>


















<!-----------bootstrap js link------------->
<script src="/js/bootstrap.min.js"></script>

</body>
@endif
</html>