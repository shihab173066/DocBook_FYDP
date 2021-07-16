<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo asset('css/login.css')?>" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<script>

    window.onload = function loadit() {
        var user = $("select.userType").children("option:selected").val();
        
        if(user == "doctor"){
            $("#blood").hide();
            $('#spec_div').hide();
            $("#email").show();
            $("#fname").show();
            $('#lname').show();
            $('#phone').show();
            $('#doc_div').show();
            $("#password").show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();
        }else if(user == "patient"){
            $("#blood").show();
            $("#email").show();
            $("#fname").show();
            $('#lname').show();
            $('#doc_div').hide();
            $('#spec_div').hide();
            $('#phone').show();
            $("#password").show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();

        }else if(user == "specialist"){
            $("#blood").hide();
            $('#doc_div').show();
            $('#spec_div').show();
            $("#email").show();
            $("#password").show();
            $("#fname").show();
            $('#lname').show();
            $('#phone').show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();

        }else if(user == "admin"){
            $("#email").show();
            $("#password").show();
            $("#fname").hide();
            $('#lname').hide();
            $('#phone').hide();
            $('#doc_div').hide();
            $('#spec_div').hide();
            $("#blood").hide();
            $("#name").hide();
            $("#age").hide();
            $("#gender").hide();
            $("#blood").hide();

        }
        }
    $(document).ready(function(){

    $("select.userType").change(function(){
        var user = $(this).children("option:selected").val();
        if(user == "doctor"){
            $("#blood").hide();
            $('#spec_div').hide();
            $("#email").show();
            $("#fname").show();
            $('#lname').show();
            $('#phone').show();
            $('#doc_div').show();
            $("#password").show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();
        }else if(user == "patient"){
            $("#blood").show();
            $("#email").show();
            $("#fname").show();
            $('#lname').show();
            $('#doc_div').hide();
            $('#spec_div').hide();
            $('#phone').show();
            $("#password").show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();

        }else if(user == "specialist"){
            $("#blood").hide();
            $('#doc_div').show();
            $('#spec_div').show();
            $("#email").show();
            $("#password").show();
            $("#fname").show();
            $('#lname').show();
            $('#phone').show();
            $("#name").show();
            $("#gender").show();
            $("#age").show();

        }else if(user == "admin"){
            $("#email").show();
            $("#password").show();
            $("#fname").hide();
            $('#lname').hide();
            $('#phone').hide();
            $('#doc_div').hide();
            $('#spec_div').hide();
            $("#blood").hide();
            $("#name").hide();
            $("#age").hide();
            $("#gender").hide();
            $("#blood").hide();

        }
    });
});
</script>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo asset('icons/logofin.png') ?>" id="icon" alt="DocBook Icon" />
    </div>

    <!-- Login Form -->
    <form action="reg" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="userType">User Type : </label>
      <select name="userType" id="userType" class="userType">
        <option value="patient">Patient</option>
        <option value="doctor">Doctor</option>
        <option value="specialist">Specialist Doctor</option>
        <option value="admin">Admin</option>
      </select> <br/>
      <input type="email" name="email" id="email" class="fadeIn second" placeholder="Email">
      <input type="text" name="fname" id="fname" class="fadein second" placeholder="First Name"><input type="text" name="lname" id="lname" class="fadein second" placeholder="Last Name">
       <div class="fadeIn second">
        <label for="propic">Select Profile Picture</label>
                    <input type="file" name="propic" class="form-control">

                </div>

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <div class="container" name="doc_div" id="doc_div">
      <label>Home Address</label>
      <input type="text" id="homeaddress" class="fadeIn third" name="homeaddress" placeholder="">
      <label>Chamber Address</label>
      <input type="text" id="chamberaddress" class="fadeIn third" name="chamberaddress" placeholder="">
      <label>Hospital Name</label>
      <input type="text" id="hospital" class="fadeIn third" name="hospital" placeholder="">
      <label>NID Number: </label>
      <input type="text" id="nidno" class="fadeIn third" name="nidno" placeholder="">
      <label>Medical College: </label>
      <input type="text" id="medcollege" class="fadeIn third" name="medcollege" placeholder="">
      <label>Graduation Year: </label>
      <input type="number" id="gradyear" class="fadeIn third" name="gradyear" placeholder="">
      <label>Medical License Number: </label>
      <input type="text" id="licenseno" class="fadeIn third" name="licenseno" placeholder="">
      <label>Experience: </label>
      <input type="number" id="experience" class="fadeIn third" name="experience" placeholder="">
      <label>Degree Acomplishments: </label>
      <input type="text" id="degree" class="fadeIn third" name="degree" placeholder=""><br>
      <div name="spec_div" id="spec_div">
      <label>Medical Field</label>
      <input type="text" id="field" class="fadeIn third" name="field" placeholder="">
      </div>
      
      </div><br>
      <label>Age: </label>
      <input type="number" name="age" id="age" class="fadein second" placeholder="Age"><br>
      <label>Gender: </label>
      <select name="gender" id="gender" class="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select> <br/>
      <input type="text" name="phone" id="phone" class="fadein second" placeholder="Mobile Number/Phone">
      <select name="blood" id="blood" class="blood">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
      </select> <br/>
      @if ($errors->any())
      <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
      <input type="submit" class="fadeIn fourth" value="Register">
    </form>

    
  </div>
</div>