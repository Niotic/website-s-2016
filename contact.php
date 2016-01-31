
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Niotic | Contact Us</title>

  <!--Stylesheets-->

  <link rel="stylesheet" href="css/styles.css">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
    body {
      background-image: url(src/contact.gif);
    }
    .row{
      padding-left:  20px;
      padding-top:   20px;
      padding-right: 20px;
    }
    *::-moz-placeholder{
      color: white !important;
    }
   input:not([type]), input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="time"], input[type="date"], input[type="datetime-local"], input[type="tel"], input[type="number"], input[type="radio"],
   textarea.materialize-textarea, select {
      font-size: 1.7rem !important;
    }
  </style>



</head>
<body class="teal">

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Main content -->

      <!-- Card Content -->
      <form action="MAILTO:somone@example.net" method="post" enctype="text/plain">
            <div class="row">
                <div class="col m10 offset-m1 s12">
                  <div class="card niotic-dark">
                    <div class="card-content white-text">
                    <span class="card-title "> Contact Us </span>
                    <div class="row">
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input placeholder="First Name" id="first_name" type="text" class="validate input-field">
                                </div>
                                <div class="input-field col m6 s12">
                                    <input placeholder="Last Name"  id="last_name" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m4 s4">
                                    <i class="mdi-content-mail prefix"></i>
                                    <input placeholder="Email" id="email" type="email" class="validate" required>
                                </div>
                                <div class="input-field col m4 s4">
                                    <i class="mdi-maps-store-mall-directory prefix"></i>
                                    <input placeholder="company" id="company" type="text" class="validate">
                                </div>
                                <div class="input-field col m4 s4">
                                  <i class="material-icons prefix">phone</i>
                                  <input placeholder="Phone Number" id="telephone" type="tel" class="validate">

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <textarea placeholder="Message" id="message" class="materialize-textarea"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select id="budget">
                                      <option value="" selected disabled>Choose your option</option>
                                      <option value="1">&lt; $4000</option>
                                      <option value="2">$4000 - $9000</option>
                                      <option value="3">&gt; $9000</option>
                                    </select>
                                    <label class="active" for="budget"> Budget</label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="input-field col s12">
                                  <label>Any Specific Requirement(s)?</label>
                                  <br/>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group3" type="checkbox" id="Website" />
                                  <label for="Website">Website</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group3" type="checkbox" id="mobile" />
                                  <label for="mobile">Mobile App</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group3" type="checkbox" id="Desktop" />
                                  <label for="Desktop">Desktop App</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group3" type="checkbox" id="On" />
                                  <label for="On">Other/None</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <label>How Did You Find Us?</label>
                                  <br/>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group1" type="radio" id="google" />
                                  <label for="google">Google</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group1" type="radio" id="customer" />
                                  <label for="customer">Customer</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group1" type="radio" id="store" />
                                  <label for="store">Store</label>
                                </div>
                                <div class="input-field col m3 s6 center-align">
                                  <input name="group1" type="radio" id="other" />
                                  <label for="other">Other</label>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row" >
                                <div class="input-field col s12">
                                  <label>Communication Preferences</label>
                                  <br/>
                                </div>
                                <div class="input-field col m4 s12 center-align">
                                  <input name="group2" type="checkbox" id="emailComm" />
                                  <label for="emailComm">Email</label>
                                </div>
                                <div class="input-field col m4 s12 center-align">
                                  <input name="group2" type="checkbox" id="callComm" />
                                  <label for="callComm">Call Me</label>
                                </div>
                                <div class="input-field col m4 s12 center-align">
                                  <input name="group2" type="checkbox" id="newsletter" />
                                  <label for="newsletter">Newsletter</label>
                                </div>
                            </div>
                            <!--
                               $firstname    = "First Name: " . $_POST["first_name"];
                               $lastname     = "Last Name: " . $_POST["last_name"];
                               $email        = $_POST["email"];
                               $corporation  = "Corporation: " . $_POST["corporation"];
                               $phone        = "Phone Number: " . $_POST["telephone"];
                               $message      = "Message" . $_POST["message"];
                               $how          = $_POST[];
                               $what         = $_POST[];
                               $whatMethod   = $_POST[];
                               $headers = 'From: ' . $email . "\r\n" .
                                   'Reply-To: ' . $email . "\r\n" .
                                   'X-Mailer: PHP/' . phpversion();

                               $msg = $firstname . "\n" . $lastname . "\n" . $corporation . "\n" . $phone . "\n" . $message;
                             -->
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col m12">
                                  <button class="btn waves-effect waves-light right-align" type="submit" name="send">Submit
                                    <i class="material-icons right">send</i>
                                  </button>
                                </div>
                            </div>
                            <!--
                            if (isset($_POST['send']) {
                              mail("isyed.ahmed@hotmail.com", "Niotic Inquiry from: " . $email, $msg );
                            }-->
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </form>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</div>

</body>
</html>
