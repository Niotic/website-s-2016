
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
    .input-field{
      align-content: center;

    }
  </style>



</head>
<body>
  <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Main content -->

      <!-- Card Content -->
      <div class="card large">
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
            </form>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</a>
          </div>
      </div>


  <!-- footer -->
  <?php include 'footer.php'; ?>

</div>

</body>
</html>
