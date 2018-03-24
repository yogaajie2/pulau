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

    <div class="jumbotron jumbotron-fluid text-center">
        <h1>THE HOUSE</h1>
    </div>

    <div class="container text-center houseDescription">
      <h4>Cozy and clean, a perfect place to relax with your friends and families after a dive in the ocean or a stroll around the Island. </h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <?php include ('standard.html'); ?>

                <div class="container text-left">
                    <div class="row mt-5 mb-4">
                        <div class="col">
                            <p>Properties:</p>
                        </div>
                        <div class="col">
                            <p>Accommodates: 8</p>
                            <p>Beds: 8 Single(s)</p>
                        </div>
                        <div class="col">
                            <p>size: 32 sq m</p>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-4">
                            <p>More Info:</p>
                        </div>
                        <div class="col-8">
                            <p>The family room provides the warmth, cleanliness and extra space your family and friends needs for a perfect holiday experience.</p>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <p>Amenities:</p>
                        </div>
                        <div class="col">
                            <p>A/C</p>
                            <p>Shower</p>
                            <p>Towels</p>
                        </div>
                        <div class="col">
                            <p>TV</p>
                            <p>Kitchen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 sideBook">
                <div class="container">
                    <div class="row d-md-block">
                        <p>From</p>
                        <h3>Rp600000</h3>
                        <p>Per Night</p>
                    </div>
                    <div class="container">
                        <h2>Stacked form</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                              </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
      

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