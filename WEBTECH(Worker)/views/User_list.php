

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Signup Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Images/icon.png">
</head>
<body class="index-pages">
    <header>
        <div class="on-nav">
        <nav class="main-nav">
            <ul>
                <li><a href="admin_emp.php">Back</a></li>
                
            </ul>
        </nav>
        </div>
    </header>
    <div class="container">
    <h3 style="color:green;"><?php echo $regSuccessful; ?></h3>
        <section class="columns">
            <h1>Modification?</h1>
        </section>
        <form class="form" id="signup-form" name="index_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
                <label class="index_label" >Name:</label> <br> 
                <input class="index_input" type="text" name="emp_name" value="<?php echo $emp_name_req; ?>" required  >
                <span style="color:red;"><b><?php echo $emp_name_err; ?></b></span>
                
            </div>

            <div class="input-group">
                <label class="index_label" >Username:</label> <br> 
                <input class="index_input" type="text" name="emp_username" value="<?php echo $emp_username_req; ?>" required  >
                <span style="color:red;"><b><?php echo $emp_username_err; ?></b></span>
                
            </div>

            <div class="input-group">
                <label class="index_label" >Phone No:</label> <br> 
                <input class="index_input" type="text" name="emp_phone" value="<?php echo $emp_phone_req; ?>" required  >
                <span style="color:red;"><b><?php echo $emp_phone_err; ?></b></span>
            </div>

            <div class="input-group">
                <label class="index_label" >Email:</label> <br> 
                <input class="index_input" type="email" name="emp_email" value="<?php echo $emp_email_req; ?>" required  >
                <span style="color:red;"><b><?php echo $emp_email_err; ?></b></span>
            </div>

            <div class="input-group">
                <label class="index_label" >Address:</label> <br> 
                <input class="index_input" type="text" name="emp_address" value="<?php echo $emp_address_req; ?>" required  >
                <span style="color:red;"><b><?php echo $emp_address_err; ?></b></span>
            </div>

            <div>
                <label class="index_label"  >Employee Type:</label> <br> 
                <input class="index_input radio" type="radio" name="emp_type"  value="cashier" <?php if($emp_type_req == "cashier") echo "checked";?> required  >Cashier</input>
                <input class="index_input radio" type="radio" name="emp_type"  value="controller" <?php if($emp_type_req == "controller") echo "checked";?> required  >Controller</input>
                <input class="index_input radio" type="radio" name="emp_type"  value="deliveryman" <?php if($emp_type_req == "deliveryman") echo "checked";?> required  >Deliveryman</input>
                <input class="index_input radio" type="radio" name="emp_type"  value="admin" <?php if($emp_type_req == "admin") echo "checked";?> required  >Admin</input>
                <span style="color:red;"><b><?php echo $emp_type_err; ?></b></span>
            </div>


            <div class="input-group">
                <button class="btn" type="submit" name="btn_submit" value="submit">Update</button>
            </div>

        </form>
    </div>

    
</body>
</html>