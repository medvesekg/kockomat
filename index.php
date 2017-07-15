<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kockomat</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet">
        <link rel="icon" href="dice/2020.png">
    </head>
    <body>
        
        <?php
       
        //nastavitev spremenljivk
        
        if(isset($_POST["tip"]) and isset($_POST["stevilo"])) {
        $a = $_POST["tip"];
        $b = $_POST["stevilo"];
        } 
        else {
            $a="";
            $b="";
        }
        
        ?>
        
        <div class="header">
            <div class="container">
                <h1>Kockomat</h1>
            </div>
        </div>
        
        <!-- Obrazec -->
        <div class="input">
            <div class="container">
                <form method="post">
                    <div class="row input-row">

                        <div class="col-md-6">

                            <select class="form-control pull-left" id="tip" name="tip">
                                    <option value="4" <?php if($a == 4) { echo " selected"; } ?> >4-strana</option>
                                    <option value="6" <?php if($a == 6) { echo " selected"; } ?> >6-strana</option>
                                    <option value="8" <?php if($a == 8) { echo " selected"; } ?> >8-strana</option>
                                    <option value="10" <?php if($a == 10) { echo " selected"; } ?> >10-strana</option>
                                    <option value="12" <?php if($a == 12) { echo " selected"; } ?> >12-strana</option>
                                    <option value ="20" <?php if($a == 20) { echo " selected"; } ?> >20-strana</option>
                                </select>    
                        </div>
                        <div class="col-md-6">

                            <select class="form-control pull-left" id="stevilo" name="stevilo">
                                    <option value="1" <?php if($b == 1) { echo " selected"; } ?> >Enkrat</option>
                                    <option value="2" <?php if($b == 2) { echo " selected"; } ?> >Dvakrat</option>
                                    <option value="3" <?php if($b == 3) { echo " selected"; } ?> >Trikrat</option>
                                    <option value="4" <?php if($b == 4) { echo " selected"; } ?> >Štirikrat</option>
                                    <option value="5" <?php if($b == 5) { echo " selected"; } ?> >Petkrat</option>
                                    <option value="6" <?php if($b == 6) { echo " selected"; } ?> >Šestkrat</option>
                             </select>
                        </div>


                    </div>
                    <div class="row">
                            <input type="submit" value="Rolaj!" id="poslji">
                    </div>              
                </form>
            </div>
        </div>
        
        
        <!-- Koda za metalnik kock-->
        <?php
        
        
        
        $sum = 0;
        function metkocke($tip, $stevilo) {
            global $sum;
            for($x = 1; $x <= $stevilo; $x++) {
                $r = rand (1, $tip);
                echo "<img src='dice/$r$tip.png'>";
                $sum = $r + $sum;
            }
      
        }
        
        
        
        
        ?>
       
       
        <!-- Rezultati --->
        <div class="kocke">
            <div class="container">
                <div class="row">
                    <?php if(isset($_POST["tip"])) { echo metkocke($a,$b); } ?>
                </div>
            </div>
        </div>
        
        <div class="skupaj">
            <div class="container">
                <div class="row">
                    <p><?php if(isset($_POST["tip"])) { echo "Skupaj $sum"; } ?></p>
                </div>
            </div>   
        </div>
  
    </body>
</html>
