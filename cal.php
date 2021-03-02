<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
        border-radius: 10px;
    }
	.login-form {
		width: 1150px;
        margin: 30px auto;
		
	}
	.login-form h2 {
        margin: 10px 0 25px;
    }
    .login-form form {
		color: #7a7a7a;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
        outline: none !important;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #2389cd;
	}
	
</style>
</head>
<body>
<div class="login-form">
    <form action="validation.php" method="post">
        <h2 class="text-center">Calculator</h2>   
        <div class="form-group has-error raw">
            <label for="f1">January:</label>
        	<input id="f1" type="text" value="1500" style="display=flex;" class="form-control" name="uname" required="required">
            
            <input type="text" class="form-control" style="display=flex;" name="uname" required="required">
            
        </div>
		
        <div class="form-group has-error">
            <label for="f1">February:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">March:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">April:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">May:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">June:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>

        <div class="form-group has-error">
            <label for="f1">July:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">August:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">September:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">October:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">November:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		
        <div class="form-group has-error">
            <label for="f1">December:</label>
        	<input id="f1" type="text" value="1500" class="form-control" name="uname" required="required">
        </div>
		     

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
        </div>
        
    </form>
   
</div>
</body>
</html>