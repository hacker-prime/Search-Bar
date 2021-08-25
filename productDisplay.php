<?php

include("productDB.php");

?>

<?php

include("productInformation.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phynix-Product Display</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Settings</a>
            <a href="#">History</a>
            <!-- <a href="#">Clients</a> -->
            <a href="#">Contact</a>
        </div>     

        <!-- https://stackoverflow.com/questions/5067279/how-to-align-this-span-to-the-right-of-the-div -->
        <div class="navButton">
            <span style="cursor:pointer" onclick="openNav()" class="right">&#9776;</span>
        </div>

        
        <div id='search-box'>
            <form autocomplete="off" id='search-form'>
                <input id='identify-text' type='text' required>
                <button id='search-button'>                     
                    <i class="fa fa-search"></i>
                    <i class="input-icon" id="close" ></i>
                </button>
            </form>    
            <div class="card-panel" id="output" style="display:none">
                                                          
            </div>        
        </div>
        
        
        <div class="cards">
                    <div class="card">
                        <img class="card__image" src="cafeBlue.jpg" alt="">
                        <!-- <img class="card__image" src="dashboard/image-preview-upload/images/<?php echo $image?>" alt=""> -->

                        <div class="card__content">
                        <p><?php echo $name ?></p>
                        <p><?php echo $description?></p>
                        <p>$<?php echo $price?></p>
                        </div>
                        <div class="card__info">
                        <!-- <div>
                            <i class="material-icons">thumb_up</i>310
                             </div> -->
                             <button type="button" class="cartButton">Add to Cart</button>

                        <div>
                            <!-- <a href="./" class="card__link">View Article</a> -->
                        </div>

                        
                        </div>
                    </div>
  
        </div>


        <form action="#" class="formCart">
                      <a href="#" class="">
                      <span class="cartQuantity">0</span>
                      <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                      </a>
        </form>

        
        
<script src="main.js"></script>


</body>
</html>