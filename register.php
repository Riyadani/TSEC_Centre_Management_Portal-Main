<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript">
    function on() {
      document.getElementById("overlay").style.display = "block";
    }

    function off() {
      document.getElementById("overlay").style.display = "none";
    }
  </script>
  <script type="text/javascript">
        function Role(that) {
           // if (that.value == "Facilitator" && that.value== "Student")
           /* if(that.value == "Registeras") { */

           /*      document.getElementById("myDIV").style.display = "none"; */
           /*      document.getElementById("myDIV1").style.display = "none"; */
           /*      document.getElementById("myDIV2").style.display = "none"; */

           /*  } else { */
           /*      document.getElementById("myDIV").style.display = "block"; */
           /*      document.getElementById("myDIV1").style.display = "none"; */
           /*      document.getElementById("myDIV2").style.display = "none"; */
           /*    } */
           /*  }  */
           if(that.value=="Student")
           {
            document.getElementById("myDIV").style.display = "block"; 
           }
           else
           {
            document.getElementById("myDIV").style.display = "block"; 
           }
          }
              </script>        
        <script type="text/javascript">
        function Cource(that){
          if(that.value == "Technical"){
            document.getElementById("myDIV").style.display = "block";
            document.getElementById("myDIV1").style.display = "block";
            document.getElementById("myDIV2").style.display = "none";
          }
          else{
            document.getElementById("myDIV").style.display = "block";
            document.getElementById("myDIV1").style.display = "none";
            document.getElementById("myDIV2").style.display = "block";
          }
        }
    </script>
    
   <title>Registration || TataStriveOfficial</title>
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/nav.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <?php require 'header.php'; ?>

  <style>
    body {
      background: #000;
    }

    label {
      color: #000;
      font-weight: 700;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    a:hover {
      color: #fff;
    }
  </style>
</head>

<body>
  <nav id="nav" class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="images/logo.png" width="150px" height="40px"></a>
      <button class="navbar-toggler" style="background:#fff;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php" target="blank">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cources
            </a>
            <ul class="dropdown-menu " data-bs-popper="static" style="color: white;background-color:#000 ;">
              <li><a class="dropdown-item" href="jfsd.php" style="color: #fff;">JAVA</a></li>
              <li><a class="dropdown-item" href="ui,ux.php" style="color: #fff;">UI/UX</a></li>
              <li><a class="dropdown-item" href="aws.php" style="color: #fff;"> AWS</a></li>
              <li><a class="dropdown-item" href="bde.php" style="color: #fff;">BDE</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facilitator.php">Facilitator</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

          &nbsp;&nbsp;&nbsp;
          <button class="bt" style="border: 1px solid;border-radius: 10px;" type="submit"><a href="login.php">Login</a></button>
        </form>
      </div>
    </div>
  </nav>
  <br> <br>
  <br>
  <div class="row" align="center" style="background:#000; margin-top:-10px;">
    <div class="col-md-12" id="containerlong" style="width:60%;height:80%;margin:auto !important;">
      <form class="row g-3 needs-validation" id="myForm" novalidate action="process.php" method="post" style="background:#fff;margin-top: 15px;border-radius:5px;">
        <h3 align="center" style="color:#000;">Registration</h3>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="Enter First Name!" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" placeholder="Enter Last Name!" class="form-control" name="lname" id="validationCustom02" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Email Address</label>

          <input type="email" placeholder="Enter Email Address!" name="mail" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>

        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Password</label>
          <input type="password" placeholder="Enter Password!" name="pass" class="form-control" maxlength="16" minlength="8" id="myInput" value="" required>
          <input type="checkbox" onclick="myFunction()" style="vertical-align: middle;"><strong style="font-size:12px;vertical-align: middle;"> Show Password</strong>
          <div class="invalid-feedback">
            Please choose a between 8 to 16 character.
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Confirm Password</label>
          <input type="password" placeholder="Confirm Password!" name="cpass" class="form-control" value="" maxlength="16" minlength="8" id="myInput1" required>
          <div class="invalid-feedback">
            Please choose a between 8 to 16 character.
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">City</label>
          <input type="text" class="form-control" id="validationCustom01" name="city" placeholder="Enter city Name!" required>
          <div class="valid-feedback">

          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">State</label>
          <select class="form-select" name="st" id="inputState" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;">
            <option selected disabled value="">Select State</option>
            <option value="Andra Pradesh">Andra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madya Pradesh">Madya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttaranchal">Uttaranchal</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
            <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadeep">Lakshadeep</option>
            <option value="Pondicherry">Pondicherry</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <!-- state -->

        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">District</label>
          <select class="form-select" name="dist" id="inputDistrict" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;">
            <option selected disabled value="">Select District</option>

          </select>
          <div class="invalid-feedback">
            Please select a valid District.
          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Select Center</label>
          <select class="form-control" name="center" id="validationCustom02" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;" required>
            <option selected value="">Select Center</option>

            <option value="Anand">Anand</option>
            <option value="Navsari">Navsari</option>

          </select>

        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">zip</label>
          <input type="text" placeholder="Enter zip!" class="form-control" name="zp" id="validationCustom02" required>
          <div class="valid-feedback">

          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Select Role</label>
          <select class="form-control" onchange="Role(this);" name="role" onClcik="on()" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;" required>
            <option selected value="Registeras" selected="selected" disabled="disabled">Register as..</option>

            <option value="Student">Student</option>
            <option value="Facilitator">Facilitator</option>

          </select>
      
        </div>
        <div class="col-md-12" style="display: flex;">
          <div class="col-md-6" id="myDIV" style="display:none;width:50%;padding-right:8px">
            <label for="validationCustom02" class="form-label">Cources</label>
            <select class="form-control" onchange="Cource(this)" name="course" id="validationCustom02" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;" arial-expand="false" required>
              <option selected value="REG" selected="selected" disabled="disabled">Register in..</option>

              <option value="Technical">Technical</option>
              <option value="Commercial">Commercial</option>

            </select>
          </div>
          &nbsp;
          <div class="col-md-6" id="myDIV1" style="display:none;width:50%;padding-left:8px">
            <label for="validationCustom02" class="form-label">Technical Courses</label>
            <select class="form-control" name="technical" id="validationCustom02" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;" arial-expand="false" required>
              <option selected value="RegisterIN" selected="selected" disabled="disabled">Register in..</option>

              <option value="JFS">Java Full Stack Development (JFS)</option>
              <option value="AWS">Amazon Web Services (AWS)</option>
              <option value="JFS">UI/UX</option>
              

            </select>
          </div>
          &nbsp;
          <div class="col-md-6" id="myDIV2" style="display:none;width:50%;padding-left:8px">
            <label for="validationCustom02" class="form-label">Commercial Courses</label>
            <select class="form-control" name="commercial" id="validationCustom02" required style=" outline: none;color: #000;background: #fff;border:2px solid #000;" arial-expand="false" required>
              <option selected value="RegisterIn" disabled="disabled">Register in..</option>
              <option value="BFSI">Business Development Executive(BFSI)</option>

            </select>
          </div>
        </div>



        <div class="col-12">
          <div class="form-check" style="width:170px;font-family:auto">
            <input class="form-check-input" type="checkbox" name="tc" checked="true" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to T&C Policy
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
          <div class="col-12">
            <button class="bt" type="submit" style="border: 1px solid;background: #000; color: #FFF; padding:4px;">Submit</button><br>
            <label><span><a href="login.php">For Login</a></span></label>
          </div>
        </div>
    </div>


    </form>
  </div>
  </div>
  <?php require "footer.php"; ?>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
  <script>
    var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"];
    var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"];
    var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"];
    var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"];
    var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa", "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur", "Surguja"];
    var Goa = ["North Goa", "South Goa"];
    var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar", "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"];
    var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"];
    var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"];
    var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"];
    var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"];
    var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"];
    var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"];
    var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
      "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
    ];
    var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"];
    var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"];
    var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"];
    var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"];
    var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang", "Wokha", "Zunheboto"];
    var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"];
    var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"];
    var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"];
    var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
    var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"];
    var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy", "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural", "Warangal Urban", "Yadadri Bhuvanagiri"];
    var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti", "West Tripura"];
    var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit", "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar", "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao", "Varanasi"];
    var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar", "Uttarkashi"];
    var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"];
    var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
    var Chandigarh = ["Chandigarh"];
    var DadraHaveli = ["Dadra Nagar Haveli"];
    var DamanDiu = ["Daman", "Diu"];
    var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi", "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"];
    var Lakshadweep = ["Lakshadweep"];
    var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


    $("#inputState").change(function() {
      var StateSelected = $(this).val();
      var optionsList;
      var htmlString = "";

      switch (StateSelected) {
        case "Andra Pradesh":
          optionsList = AndraPradesh;
          break;
        case "Arunachal Pradesh":
          optionsList = ArunachalPradesh;
          break;
        case "Assam":
          optionsList = Assam;
          break;
        case "Bihar":
          optionsList = Bihar;
          break;
        case "Chhattisgarh":
          optionsList = Chhattisgarh;
          break;
        case "Goa":
          optionsList = Goa;
          break;
        case "Gujarat":
          optionsList = Gujarat;
          break;
        case "Haryana":
          optionsList = Haryana;
          break;
        case "Himachal Pradesh":
          optionsList = HimachalPradesh;
          break;
        case "Jammu and Kashmir":
          optionsList = JammuKashmir;
          break;
        case "Jharkhand":
          optionsList = Jharkhand;
          break;
        case "Karnataka":
          optionsList = Karnataka;
          break;
        case "Kerala":
          optionsList = Kerala;
          break;
        case "Madya Pradesh":
          optionsList = MadhyaPradesh;
          break;
        case "Maharashtra":
          optionsList = Maharashtra;
          break;
        case "Manipur":
          optionsList = Manipur;
          break;
        case "Meghalaya":
          optionsList = Meghalaya;
          break;
        case "Mizoram":
          optionsList = Mizoram;
          break;
        case "Nagaland":
          optionsList = Nagaland;
          break;
        case "Orissa":
          optionsList = Orissa;
          break;
        case "Punjab":
          optionsList = Punjab;
          break;
        case "Rajasthan":
          optionsList = Rajasthan;
          break;
        case "Sikkim":
          optionsList = Sikkim;
          break;
        case "Tamil Nadu":
          optionsList = TamilNadu;
          break;
        case "Telangana":
          optionsList = Telangana;
          break;
        case "Tripura":
          optionsList = Tripura;
          break;
        case "Uttaranchal":
          optionsList = Uttaranchal;
          break;
        case "Uttar Pradesh":
          optionsList = UttarPradesh;
          break;
        case "West Bengal":
          optionsList = WestBengal;
          break;
        case "Andaman and Nicobar Islands":
          optionsList = AndamanNicobar;
          break;
        case "Chandigarh":
          optionsList = Chandigarh;
          break;
        case "Dadar and Nagar Haveli":
          optionsList = DadraHaveli;
          break;
        case "Daman and Diu":
          optionsList = DamanDiu;
          break;
        case "Delhi":
          optionsList = Delhi;
          break;
        case "Lakshadeep":
          optionsList = Lakshadeep;
          break;
        case "Pondicherry":
          optionsList = Pondicherry;
          break;
      }


      for (var i = 0; i < optionsList.length; i++) {
        htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
      }
      $("#inputDistrict").html(htmlString);

    });
  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
  <script>
    function matchPassword() {
      var pw1 = document.getElementById("pswd1");
      var pw2 = document.getElementById("pswd2");
      if (pw1 != pw2) {
        alert("Passwords did not match");
      } else {
        alert("Password created successfully");
      }
    }
  </script>
 
</body>

</html>