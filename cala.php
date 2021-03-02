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

        <h2 class="text-center">Calculator</h2>
        <h3>Enter Ammount:</h3>
        <input type="text"  class="form-control demo1" name="ammount" required="required">


        <table>
            <div class="form-group has-error raw">
                
            <tr>
                    <td><label >Month</label></td> 
                    <td><label >EMI</label></td> 
                   
                    

            
                </tr>
                <tr>
                    <td><label for="f1">April:</label></td> 
                    <td>
        	            <input id="f1" type="text" value="1500"  class="form-control" name="apr_emi" required="required">
                    </td>
                   

            
                </tr>
            </div>



		<tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">May:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="may_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">June:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="j_emi" required="required"></td>
                  
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">July:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="ju_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">August:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="aug_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">September:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="s_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">October:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="oct_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">November:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="nov_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">December:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="dec_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">January:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="jan_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">February:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="feb_emi" required="required"></td>
                 
            </div>
        </tr>
        <tr>
            <div class="form-group has-error">
                 <td>   <label for="f1">March:</label> </td>
        	      <td>  <input id="f1" type="text" value="1500" class="form-control" name="mar_emi" required="required"></td>
                 
            </div>
        </tr>
		     

        <div class="form-group">
        <tr>
        <td><button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button></td>
        </tr>
            
        </div>
        </table> 
    </form>

    </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
</html>