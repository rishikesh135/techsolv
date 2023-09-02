
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="cssform.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>PHP Contact Form </title>
</head>
<body>

<div class="main">
    <div class="register">
        <h2>  CONTACT FORM</h2>
    <form  method="POST" class="form1" action=" fetch.php">
            <label class="name">Full Name</label><br>
            <input type="text" name="name" class="D1" placeholder="Enter Your Full Name" required></input><br><br>
            
            
    
            <label>Phone Number</label><br>
            <input type="number" name="mob" class="D1" placeholder="Enter Your Phone No." required></input><br><br>
            
     
            <label>Email</label><br>
            <input type="email" name="email" class="D1" placeholder="Enter Your Email" required></input><br><br>
       
            <label>Subject</label><br>
            <input type="text" name="sub" class="D1"  placeholder="Enter Subject" required></input><br><br>
       
            <label>Message</label><br>
            <textarea rows="4" name="msg" class="D1" cols="20" placeholder="Enter your Message.."required></textarea><br><br>     

            <button type="submit"  class="btn" name="register">Submit</button>
       

    </form>
</div>
</div>
</body>
</html>
