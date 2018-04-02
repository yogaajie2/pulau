<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700|Raleway:500" rel="stylesheet">

    <title>Sunset Bungalow Pramuka Island</title>
  </head>
  <body>
    
    <?php include('header.html') ?>

    <div class="container formContainer">
        <div class="row">
            <div class="col">
                <form class="needs-validation" novalidate action="success.php" method="post">
                    <div class="form-group row">
                        <label for="inputFirstName" class="col-sm-2 col-form-label pt-0">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFirstName" placeholder="John" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputLastName" class="col-sm-2 col-form-label pt-0">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputLastName" placeholder="Doe" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label pt-0">Email Address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please input a valid email address.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPhoneNumber" class="col-sm-2 col-form-label pt-0">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPhoneNumber" placeholder="+1 234 567 89" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label pt-0">Street Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputAddress" placeholder="1 Wall St." required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputZipCode" class="col-sm-2 col-form-label pt-0">Zip Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputZipCode" placeholder="NY 12345" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label pt-0">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCity" placeholder="New York City" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2 col-form-label pt-0">State / County</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputState" placeholder="New York" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCountry" class="col-sm-2 col-form-label pt-0">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCountry" placeholder="USA" required>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputMessage" class="col-sm-2 col-form-label pt-0">Messages, requests</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create Booking</button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Please Check Again.</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Please make sure to fill out all the required fields.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Form Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>