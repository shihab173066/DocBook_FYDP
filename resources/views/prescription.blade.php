<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Doctor Homepage</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    
    
    
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
            <a href="#"><img width='100px' height='80px' src="/{{ $i->propic }}" alt="profile pic"></a>
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






              <form name="add_pres" id="add_pres">  
                  @csrf


                <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
                </div>
    
    
                <div class="alert alert-success print-success-msg" style="display:none">
                 
                <ul></ul>
                </div>
    
    
                
                <div class="table-responsive"> 
                    
                    <table class="table table-bordered" id="dynamic_table">  
                        
                        <thead>
                            <td><h2>Medicines:</h2></td> 
                            
                           
                        </thead>
                        <tbody id="med_sec">
                           
                             <tr id='med_row'>  
                            <div class="medicine">
                                
                                <td><input type="text" name="name[]" placeholder="Medicine Name" class="form-control name_list" /></td>
                                <td><input type="text" name="time[]" placeholder="Time" class="form-control time_list" /></td>  
                                <td><input type="text" name="continue[]" placeholder="Continuation Days" class="form-control continue_list" /></td>  
                                <td><input type="text" name="intake[]" placeholder="Intake Amount" class="form-control intake_list" /></td>  
                                <td><textarea name="describe[]" class="form-control" placeholder="Describe"></textarea></td>  
                            <td><button type="button" name="add_med" id="add_med" class="btn btn-success">+</button></td>  

                          
                           
                            </div>
                        
  
                        </tr>  
                        </tbody>


                        <thead>
                            <td><h2>Tests:</h2></td> 
                        </thead>

                    <tbody id="test_sec">
                        <tr id="test_row">

                            <div class="test">
                                
                                <td><input type="text" name="test_name[]" placeholder="Test Name" class="form-control test_name_list" /></td>
                                <td><input type="text" name="reason[]" placeholder="Time" class="form-control reason_list" /></td>  
                                <td><input type="text" name="hospital[]" placeholder="Hospital" class="form-control hospital_list" /></td>  
                                
                            <td><button type="button" name="add_test" id="add_test" class="btn btn-success">+</button></td>  

                        </div>


                    </tr>

                </tbody>

                <tfoot>
                    <tr>  

                           <td> <label for="tips">Tips: </label></td>
                            <td><textarea id="tips" name="tips[]" class="form-control" placeholder="Tips"></textarea></td>  

                            <td><label for="advice">Advice: </label></td>
                            <td><textarea id="advice" name="advice[]" class="form-control" placeholder="Advice"></textarea></td>  
                        
                        </tr>  
                       
                </tfoot>  
                    </table>  
                    <input type="button" name="submit_pres" id="submit_pres" class="btn btn-info" value="Submit" />  
                </div>
                <td><input name="post_id" id="post_id" type="hidden" value="{{$id}}"/></td>
                <td><input name="pat_email" id="pat_email" type="hidden" value="{{$post_info->patient_email}}"/></td>

    
    
             </form>

             

             <!-- CODE FOR HANDLING FORM -->
             <script type="text/javascript">
                $(document).ready(function(){      
                  var postURL = "{{ route('add_pres')}}";
                  var i=1; 
                  var j = 1; 

                  function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });  

      }
            
            
                  $('#add_med').click(function(){  
                      //alert("clicked");
                       i++;  
                       var str = "<tr id='med_row" +i+"' class='dynamic_added'><td><input type='text' name='name[]' placeholder='Medicine Name' class='form-control name_list' /></td><td><input type='text' name='time[]' placeholder='Time' class='form-control time_list' /></td>  <td><input type='text' name='continue[]' placeholder='Continuation Days' class='form-control continue_list' /></td>  <td><input type='text' name='intake[]' placeholder='Intake Amount' class='form-control intake_list' /></td>  <td><textarea name='describe[]' class='form-control' placeholder='Describe'></textarea></td>  <td><button type='button' name='remove' id=" + i + " class='btn btn-danger btn_remove'>X</button></td></tr>";
                       $('#med_sec').append(str);  
                  });  
            

                $('#add_test').click(function(){  
                      //alert("clicked");
                       j++;  
                       var str = " <tr id='test_row" + j + "' class='test_added'><div class='test'> <td><input type='text' name='test_name[]' placeholder='Test Name' class='form-control test_name_list' /></td><td><input type='text' name='reason[]' placeholder='Time' class='form-control reason_list'/></td>  <td><input type='text' name='hospital[]' placeholder='Hospital' class='form-control hospital_list' /></td><td><button class='btn btn-danger test_btns' type='button' name='remove' id=" + j + ">X</button></td> </div></tr>";
                       $('#test_sec').append(str);  
                  });  
                
            
            
                  $(document).on('click', '.btn_remove', function(){  
                      //alert("clicked");
                      //alert('remove');
                       var button_id = $(this).attr("id");   

                       try{
                        $("#med_row"+button_id + '').remove(); 
                       // alert($('#med_row'+button_id).attr('id'));
                         
                       }catch(err){
                           alert(err);

                           console(err);
                       }
                      
                       //alert('#row'+button_id+'');
                  });  

                  $(document).on('click', '.test_btns', function(){  
                      //alert('remove');
                       var button_id = $(this).attr("id");   
                       //alert(button_id);

                       try{
                        $("#test_row" + button_id).remove(); 
                       // alert($('#med_row'+button_id).attr('id'));
                         
                       }catch(err){
                           alert(err);

                           console(err);
                       }
                      
                       //alert('#row'+button_id+'');
                  });

                  $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

                  $('#submit_pres').click(function(){     
            alert('ajax working');       
           $.ajax({  
            
                method:"POST",  
                enctype: 'multipart/form-data',
                url:'{{ route("add_pres") }}',
                data:$('#add_pres').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                        
                    }else{
                     

                        i=1;
                        j = 1;
                        $('.dynamic_added').remove();
                        $('.test_added').remove();
                        $('#add_pres')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  


     

                


        

    });
            
            
                
            </script>

















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