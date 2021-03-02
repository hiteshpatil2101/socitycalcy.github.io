<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Calculator</title>
    <style>
    body {
		color: #fff;
		background: #3598dc;
	}
    .form-control {
		min-height: 10px;
		background: #f2f2f2;
		width:100px;
	}
    .form{
        width: 1150px;
        margin: 30px auto;
    }
    .demo1{
        width:300px;
    }
    </style>
  </head>
  <body>
  <div class="form">
    <form action="calculation.php" method="post">
    <?php  $ammount = $_POST['ammount'];
           $apr_emi=$_POST['apr_emi'];
           $apr_amm=$ammount+$apr_emi;
           $apr_int=$apr_amm*6/1200;

           

           $may_emi=$_POST['may_emi'];
            $may_amm=$apr_amm+$may_emi;
            $may_int=$may_amm*6/1200;


           $j_emi=$_POST['j_emi'];
           $j_amm=$may_amm+$j_emi;
            $j_int=$j_amm*6/1200;

           $ju_emi=$_POST['ju_emi'];
           $ju_amm=$j_amm+$ju_emi;
            $ju_int=$ju_amm*6/1200;

           $aug_emi=$_POST['aug_emi'];
           $aug_amm=$ju_amm+$aug_emi;
            $aug_int=$aug_amm*6/1200;

           $s_emi=$_POST['s_emi'];
           $s_amm=$aug_amm+$s_emi;
            $s_int=$s_amm*6/1200;

           $oct_emi=$_POST['oct_emi'];
           $oct_amm=$s_amm+$oct_emi;
            $oct_int=$oct_amm*6/1200;

           $nov_emi=$_POST['nov_emi'];
           $nov_amm=$oct_amm+$nov_emi;
            $nov_int=$nov_amm*6/1200;

           $dec_emi=$_POST['dec_emi'];
           $dec_amm=$nov_amm+$dec_emi;
            $dec_int=$dec_amm*6/1200;

           $jan_emi=$_POST['jan_emi'];
           $jan_amm=$dec_amm+$jan_emi;
            $jan_int=$jan_amm*6/1200;

           $feb_emi=$_POST['feb_emi'];
           $feb_amm=$jan_amm+$feb_emi;
            $feb_int=$feb_amm*6/1200;
           
           $mar_emi=$_POST['mar_emi'];
           $mar_amm=$feb_amm+$mar_emi;
            $mar_int=$mar_amm*6/1200;

            $half=$apr_int+$may_int+$j_int+$ju_int+$aug_int+$s_int;
            $full=$apr_int+$may_int+$j_int+$ju_int+$aug_int+$s_int+$oct_int+$nov_int+$dec_int+$jan_int+$feb_int+$mar_int;
           
           
               
    ?>
        <h2 class="text-center">Calculator</h2>
        <h3>Enter Ammount:</h3>
        <input type="text"  class="form-control demo1" value="<?php echo $ammount ?>" name="ammount" required="required">


        <table>
            <div class="form-group has-error raw">
                
            <tr>
                    <td><label >Month</label></td> 
                    <td><label >EMI</label></td> 
                    <td><label >Ammount</label></td> 
                    <td><label >Interest</label></td> 
                    

            
                </tr>
                <tr>
                    <td><label for="f1">April:</label></td> 
                    <td>
        	            <input id="f1" type="text" value="<?php echo $apr_emi ?>"  class="form-control" name="apr_emi" required="required">
                    </td>
                    <td>
                        <input type="text" class="form-control" value="<?php echo $apr_amm ?>" name="apr_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $apr_int ?>" class="form-control" name="apr_int">
                    </td>

            
                </tr>
            </div>



		<tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">May:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $may_emi ?>" class="form-control" name="m_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $may_amm ?>" class="form-control" name="m_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $may_int ?>" class="form-control" name="m_int">
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">June:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $j_emi ?>" class="form-control" name="j_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $j_amm ?>" class="form-control" name="j_amm" >
                    </td>
                    <td>
                        <input type="text" value="<?php echo $j_int ?>" class="form-control" name="j_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">July:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $ju_emi ?>" class="form-control" name="ju_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $ju_amm ?>" class="form-control" name="ju_amm" >
                    </td>
                    <td>
                        <input type="text" value="<?php echo $ju_int ?>" class="form-control" name="ju_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">August:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $aug_emi ?>" class="form-control" name="aug_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $aug_amm ?>" class="form-control" name="aug_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $aug_int ?>" class="form-control" name="aug_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">September:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $s_emi ?>" class="form-control" name="s_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $s_amm ?>" class="form-control" name="s_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $s_int ?>" class="form-control" name="s_int">
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">October:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $oct_emi ?>" class="form-control" name="oct_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $oct_amm ?>" class="form-control" name="oct_amm" >
                    </td>
                    <td>
                        <input type="text" value="<?php echo $oct_int ?>" class="form-control" name="oct_int">
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">November:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $nov_emi ?>" class="form-control" name="nov_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $nov_amm ?>" class="form-control" name="nov_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $nov_int ?>" class="form-control" name="nov_int">
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">December:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $dec_emi ?>" class="form-control" name="dec_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $dec_amm ?>" class="form-control" name="dec_amm" >
                    </td>
                    <td>
                        <input type="text" value="<?php echo $dec_int ?>" class="form-control" name="dec_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">January:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $jan_emi ?>" class="form-control" name="jan_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $jan_amm ?>" class="form-control" name="jan_amm" >
                    </td>
                    <td>
                        <input type="text" value="<?php echo $jan_int ?>" class="form-control" name="jan_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">February:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $feb_emi ?>" class="form-control" name="feb_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $feb_amm ?>" class="form-control" name="feb_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $feb_int ?>" class="form-control" name="feb_int" >
                    </td>
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">March:</label> </td>
        	      <td>  <input id="f1" type="text" value="<?php echo $mar_emi ?>" class="form-control" name="mar_emi" required="required"></td>
                  <td>
                        <input type="text" value="<?php echo $mar_amm ?>" class="form-control" name="mar_amm">
                    </td>
                    <td>
                        <input type="text" value="<?php echo $mar_int ?>" class="form-control" name="mar_int">
                    </td>
            </div>
        </tr>
		     

        <div class="form-group">
        <tr>
        <td><button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button></td>
        <td><?php echo $half ?> </td>
        <td><?php echo $full ?></td>
        </tr>
            
        </div>
        </table> 
    </form>

    </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
</html>