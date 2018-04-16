<?php

require_once('item.class.php');

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
    <h1>PRICE!</h1>
    <div class="row mb-2">
    <?php
        $tab = array(2357);
        $card = new item;

        foreach($tab as $value):
          //$card->setId($value);
          $card->getItem($value);
        ?>

    <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $card->name; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $card->price . "gp"; ?></div>
              <p class="card-text mb-auto"><?php echo $card->description; ?></p>
              <a href="<?php echo $card->link; ?>">Continue reading</a>
            </div>
            <img src="<?php echo $card->icon; ?>">      
          </div>
        </div>  
    
    </div>
    <?php endforeach ?>
    
      <div class="row mb-2">

        <?php
        $tab = array(1623,1607,1656,1675,1694,1637,1727,1621,1605,1677,1696,1639,1658,1729,1619,1603,1698,1679,1660,1641,1725,1617,1601,1700,1681,1662,1643,1731);
        $card = new item;

        foreach($tab as $value):
          //$card->setId($value);
          $card->getItem($value);
        ?>
        
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $card->name; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $card->price . "gp"; ?></div>
              <p class="card-text mb-auto"><?php echo $card->description; ?></p>
              <a href="<?php echo $card->link; ?>">Continue reading</a>
            </div>
            <img src="<?php echo $card->icon; ?>">      
          </div>
        </div>  
        <?php endforeach ?>


      </div>   
    </div>     
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>