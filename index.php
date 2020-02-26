<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->
    <title>FORM</title>
</head>
<body>
  
<form action="second.php" method="POST">
<div class="bg">
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Registration Form</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="name">First name</label>
                                <input type="text" class="form-control" placeholder="First Name *" name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Last name</label>
                                <input type="text" class="form-control" placeholder="Last Name *" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Middle name</label>
                                <input type="text" class="form-control" placeholder="Middle Name *" name="middlename" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Address</label>
                                <input type="text" class="form-control" placeholder="Address *" name="address" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Contact number</label>
                                <input type="text" class="form-control" placeholder="Ex. +639261111111 *" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="name">Date of Birth</label>
                                <input type="date" class="form-control" placeholder="Date of birth *" name="bday" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Place of Birth</label>
                                <input type="text" class="form-control" placeholder="PLace of birth *" name="pbirth" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Gender:</label> <br>
                                <input type="radio" name="gender" value="male" id="gender" checked>Male
                                <input type="radio" name="gender" value="female" id="gender">Female
                            </div>
                            <div class="form-group">
                                <label class="name">Guardian</label>
                                <input type="text" class="form-control" placeholder="Guardian *" name="guardian" required>
                            </div>
                            <div class="form-group">
                                <label class="name">Civil status</label>
                                <input type="text" class="form-control" placeholder="Civil status" name="civilstatus" required>
                            </div>     
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="name">Year level</label>
                                <select name="yearlevel" size="1" class="form-control" name="yearlevel" required>
                                    <option selected hidden value="">choose here *</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                </select> 
                            </div> 
                            <div class="form-group">
                                <label class="name">Course</label>
                                <select name="course" size="1" class="form-control" name="course" required>
                                    <option selected hidden value="">Choose here *</option>
                                    <option value="IT">IT</option>
                                    <option value="EMT">EMT</option>
                                    <option value="TCM">TCM</option>
                                    <option value="EE">EE</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label class="name">School year</label>
                                <input type="text" class="form-control" placeholder="Ex. 2001 *" name="schoolyear" required>
                            </div>
                            <div class="form-group">
                                <label class="name">E-mail</label>
                                <input type="email" class="form-control" placeholder="E-mail *" name="email" required>
                            </div>      
                        </div>
                    </div>
                    <div>
                    
                    </div>
                    <div>
                    <input type="submit" value="submit" class="btnSubmit">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>
</html>