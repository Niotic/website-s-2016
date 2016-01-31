
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Niotic | Contact Us</title>

  <!--Stylesheets-->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
    .large{
      width: 50%;

    }
    #alignment{
      padding-left:  20px;
      padding-top:   20px;
      padding-right: 20px;
    }


  </style>



</head>
<body>
  <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Main content -->

      <!-- Card Content -->
      <form class"card-panel large teal" action="MAILTO:somone@example.net" method="post" enctype="text/plain">
        <div class="container">
            <div class="row">
                <div class="col m10 offset-m1 s12">
                    <h2 class="center-align">Contact Us</h2>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <i class="mdi-content-mail prefix"></i>
                                    <input id="email" type="email" class="validate" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <i class="mdi-maps-store-mall-directory prefix"></i>
                                    <input id="company" type="text" class="validate">
                                    <label for="company">Company</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <textarea id="message" class="materialize-textarea"></textarea>
                                  <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <label for="budget">Budget</label>
                                  <br/>
                                </div>
                                <div class="input-field col s12">
                                    <select class="browser-default" id="budget">
                                      <option value="" selected disabled>Choose your option</option>
                                      <option value="1">&lt; $4000</option>
                                      <option value="2">$4000 - $9000</option>
                                      <option value="3">&gt; $9000</option>
                                    </select>
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
                            <div class="row">
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
                            <div class="row">
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
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col m12">
                                  <button class="btn waves-effect waves-light right-align" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                  </button>                                </div>
                            </div>
                        </form>
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
