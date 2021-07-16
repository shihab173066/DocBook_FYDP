<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to my website</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    
    <script>

      window.onload = function loadit() {
          var problem = $("#problemtype").children("option:selected").val();

          if(x == "Uncategorized"){
            $('#msg').text('Message -> Write about your unknown problem.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');

          }

           
                
             
          else if(x == "Mental Health"){

            $('#msg').text('Message -> Write your problem in details.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');


          }

          else if(x == "Romantic Relationship"){
            $('#msg').text('Message -> Please write your emotional feelings and attraction related problem in details.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');

            
          }

          else if(x == "Fitness"){
            $('#msg').text('Message -> Please post exercise related queries.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Nutritionist"){
            $('#msg').text('Message -> Please post diet related queries.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Mens Health"){
            $('#msg').text('Message -> Please post Male related health issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Womens Health"){
            $('#msg').text('Message -> Please post female related health issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Pregnancy"){
            $('#msg').text('Message -> Please post pregnancy related queries free of cost.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');

          }

          else if(x == "Ear Nose Throat"){
            $('#msg').text('Message -> Please post your Ear Nose Throat realted issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Skin"){
            $('#msg').text('Message -> Please post your urology related issues.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }
          else if(x == "Urology"){
            $('#msg').text('Message ->  Please post your urology related issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Child Care"){
            $('#msg').text('Message -> Please post your pediatrics realted issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Sex Education"){
            $('#msg').text('Message -> Make post to learn and improve about your sexual wellbeing.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }

          else if(x == "Gynecology"){
            $('#msg').text('Message -> Please post your gyneacology realted problems.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Family Planning"){
            $('#msg').text('Message -> Get consultation regarding family planning{anonoymous or identified.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }
          else if(x == "Menstruation"){
            $('#msg').text('Message -> Please post about your menstruation realted queires');
            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Respiratory"){
            $('#msg').text('Message -> Post your respiratory related issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post With Name</option>');
          }
          
          else if(x == "FOLLOW UP"){
            $('#msg').text('Message -> . . . . ');
          }

          else{

          }

      }
          
      $(document).ready(function(){
  
      $("#problemtype").change(function(){
          var x = $(this).children("option:selected").val();
          if(x == "Uncategorized"){
            $('#msg').text('Message -> Write about your unknown problem.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');

          }

           
                
             
          else if(x == "Mental Health"){

            $('#msg').text('Message -> Write your problem in details.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');


          }

          else if(x == "Romantic Relationship"){
            $('#msg').text('Message -> Please write your emotional feelings and attraction related problem in details.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');

            
          }

          else if(x == "Fitness"){
            $('#msg').text('Message -> Please post exercise related queries.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Nutritionist"){
            $('#msg').text('Message -> Please post diet related queries.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Mens Health"){
            $('#msg').text('Message -> Please post Male related health issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Womens Health"){
            $('#msg').text('Message -> Please post female related health issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Pregnancy"){
            $('#msg').text('Message -> Please post pregnancy related queries free of cost.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');

          }

          else if(x == "Ear Nose Throat"){
            $('#msg').text('Message -> Please post your Ear Nose Throat realted issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Skin"){
            $('#msg').text('Message -> Please post your urology related issues.');

            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }
          else if(x == "Urology"){
            $('#msg').text('Message ->  Please post your urology related issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Child Care"){
            $('#msg').text('Message -> Please post your pediatrics realted issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post With Name</option>');
          }

          else if(x == "Sex Education"){
            $('#msg').text('Message -> Make post to learn and improve about your sexual wellbeing.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }

          else if(x == "Gynecology"){
            $('#msg').text('Message -> Please post your gyneacology realted problems.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Family Planning"){
            $('#msg').text('Message -> Get consultation regarding family planning{anonoymous or identified.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post Anonymously</option>');
            $('#posttype').append('<option>Post With Name</option>');
          }
          else if(x == "Menstruation"){
            $('#msg').text('Message -> Please post about your menstruation realted queires');

            $('#posttype').append('<option>Post Anonymously</option>');
          }
          else if(x == "Respiratory"){
            $('#msg').text('Message -> Post your respiratory related issues.');
            $('#posttype').empty();
            $('#posttype').append('<option>Post With Name</option>');
          }
          
          else if(x == "FOLLOW UP"){
            $('#msg').text('Message -> . . . . ');
          }

          else{

          }
          
      });
  });
  </script>
    
</head>
<body>
<!---------section-1---------->
<!------top-heading------>
<div class="container-fluid p-0">
    <div class="section-1">
  <div class="container">
            <div class="row justify-content-end align-items-center">
            
            <div class="col-md-6 offset-3">
                <p style="margin: 0px;">Patient's Page</p>
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
                  <img src="images/logo.png" alt="">
              </a>
              </div>
          </div>
         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
<div class="col-md-10">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
      <div class="profile-wrap">
        <div class="name">
        <a href="#">
         
          <p>{{session('patient')}}</p>
      
        </a>
  </div>

    <div class="profile-photo">
      
  @foreach($info as $i)
 
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
<form action="post_issue" method="POST" enctype="multipart/form-data">
  @csrf
<div class="container-fluid p-0">
    <div class="patient-post-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="patient-post-left">
                       <div class="row">
                           <div class="col-md-12">
                              <div class="patient-post-left-text">
                                 <p><a href="#">Trending Topics</a></p> 
                                 
                                 <p><a href="#">Covid-19  Update</a></p> 
                                 
                                  
                              </div> 
                           </div>
                           <div class="col-md-12">
                              <div class="patient-post-left-text">
                                 <p><a href="#">Advertise</a></p> 
                                 
                            
                                 
                                  
                              </div> 
                           </div>
                           <div class="col-md-12">
                              <div class="patient-post-left-text">
                                 <p><a href="#">Doctors Article</a></p> 
                            
                                 
                                  
                              </div> 
                           </div>
                           
                           
                           
                       </div>
                   </div>   
                </div>
               
                 <div class="col-md-6">
              <div class="patient-post-middle">
                <select class="form-select" name="posttype" id="posttype">
                    <option>Post Anonymously</option>
                    <option>Post With Name</option>
                    
                </select><br>
                      <div class="problem-type-select">
                      
                      <div class="problem-type">
                          <p>Problem type</p>
                          <select id="problemtype" name="problemtype" class="form-select">
  <option value="Uncategorized">Uncategorized</option>
  <option value="Mental Health">Mental Health</option>
  <option value="Romantic Relationship">Romantic Relationship</option>
  <option value="Fitness">Fitness</option>
  <option value="Nutritionist">Nutritionist</option>
  <option value="Mens Health">Men's Health</option>
  <option value="Womens Health">Women's Health</option>
  <option value="Pregnancy">Pregnancy</option>
  <option value="Ear Noise Throat">Ear Noise Throat</option>
  <option value="Skin">Skin</option>
  <option value="Urology">Urology</option>
  <option value="Child Care">Child Care</option>
  <option value="Sex Education">Sex Education</option>
  <option value="Gynecology">Gynecology</option>
  <option value="Family Planning">Family Planning</option>
  <option value="Menstruation">Menstruation</option>
  <option value="Respiratory ">Respiratory</option>
  <option value="FOLLOW UP">FOLLOW UP</option>




</select>
                      </div>
                      
                      
                  </div>
                  <div class="post-submit">
                    <div class="container">
                      
                      <label style="color:red; font-size: 20px;" name="msg" id="msg">
                        <label>Message -> </label>
                        Write about your unknown problem.
                      </label><br><br>
                    </div>
                         
                          <div class="form-floating">
                            
  <textarea class="form-control" maxlength = "1000" placeholder="Details.." name="details" id="details" style="height: 200px"></textarea>
  
</div>
                      
                      </div>
      <div class="gender-age">
          <div class="gender">

          </div>
         
      </div>  
      <div class="file-upload">
          <div class="mb-3">
<!--  <label for="formFile" class="form-label">Default file input example</label>-->
  <label>Upload Image:</label>
  <input class="form-control" name="post_img" type="file" id="post_img"> <br> <br>
  <label>Upload PDF:</label>
  <input class="form-control" name="pdf" type="file" id="pdf"> <br>
</div>

<input type="hidden" class='form-control' name='email' id="email" value={{session('patient')}}>


<!--  <label for="formFile" class="form-label">Default file input example</label>-->


      
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
      <div class="post-btn">
          <input type="submit" value="Post">
      </div>
        </form>              
     
                      
              </div>
          </div>  
 
     <div class="col-md-3">
         <div class="patient-post-right">
             <div class="row">
                 <div class="col-md-12">
                     <div class="patient-post-right-text">
                     <p><a href="#">Prescription</a></p>
                 </div>
                 </div>
                 <div class="col-md-12">
                     <div class="patient-post-right-text">
                     <p><a href="#">Reports</a></p>
                 </div>
                 </div>
                 <div class="col-md-12">
                     <div class="patient-post-right-text">
                     <p><a href="#">Medical History</a></p>
                 </div>
                 </div>
                 <div class="col-md-12">
                     <div class="patient-post-right-text">
                     <p><a href="#">Balance Statement</a></p>
                 </div>
                 </div>
                 <div class="col-md-12">
                     <div class="patient-post-right-text">
                     <p><a href="#">Activity Log</a></p>
                 </div>
                 </div>
                 
                 
                 
             </div>
         </div>
     </div>          
               
               
               
               
               
                
            </div>
            
         
            
            
        </div>
    </div>
</div>

















<!--------section-5-footer----->
<div class="container-fluid p-0">
    <div class="footer">
        <div class="container">
            <div class="row text-center" style="padding: 18px 0px;">
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
</html>