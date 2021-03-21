<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--stylesheet-->
  <link rel="stylesheet" href="style.css">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }
    a:link {
      color: white;
    }
    a:hover {
      color: white;
      text-decoration: none;
    }
    h5 {
      color: teal
    }
  </style>
</head>
<body>
  <nav>
    <div class="container-fluid nav-wrapper #282846 cyan darken-3 z-depth-5">
      <a href="index.php" class="brand-logo"><img src="https://s.clipartkey.com/mpngs/s/323-3239771_money-background-home-transparent-clipart-of-a-bank.png" style="height:60px;width:60px" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="transfermoney.php">View Customers</a></li>
        <li><a href="transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>
  <!--heading / title -->
  <div class="center head mt-0">
    <h2><b><span><img src="https://s.clipartkey.com/mpngs/s/323-3239771_money-background-home-transparent-clipart-of-a-bank.png" style="height:70px;width:60px" /></span><p style="font-family:'Serif'">  TJSV BANK</p></b></h2>
  </div>
  <!---3 col start-->
  <div class="row center sect">
    <!--end of card 1-->
    <!--second col-->
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img height="110%" class="cust" src="https://totalbalance.blog/wp-content/uploads/2018/12/money_transfer-e1544123010732.jpg">
            </div>
            <button onclick="location.href='transfermoney.php'" style="color:black" class="waves-effect waves-light #ffab00 amber accent-4 btn-large"><b>Perform Transactions</b><i class="material-icons right">add_circle</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 2-->
    <div class="col s4">
      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img height="130%" src="https://image.shutterstock.com/image-photo/businessman-holding-word-banking-hand-260nw-1150180799.jpg">
            </div>
            <br />
            <h5><b>Welcome to TJSV Bank !</b></h5>
            <br />
            <p class="#00838f cyan darken-3"><br /></p>
          </div>
        </div>
      </div>
    </div>
    <!--middle-->
    <div class="col s4">
      <!-- Promo Content 3 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img height="130%" class="cust" src="data:image/png;base64,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">
            </div>
            <button type="button" onclick="location.href='transactionhistory.php'" style="color:black" class="waves-effect waves-light #ffab00 amber accent-4 btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->
  </div>
  <!--sectio-->
  <footer class="center footer">
    <h6 class="info"><b>Made by Bhagyalaxmi Kamath</b></h6>
    Intern at The Sparks Foundation
  </footer>
  <script src="main.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>