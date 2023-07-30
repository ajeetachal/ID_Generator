<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

    <form action="info.php" method="post">
    <h3> ID  Card Form</h3>
        
    <div class="fullname">
            <input type="text" placeholder="Company Name" name="companyname">
        </div>

        <div class="fullname">
            <input type="text" placeholder="Full Name" name="fullname">
        </div>

        <div class="fullname">
            <input type="text" placeholder="Designation" name="Designation">
        </div>

        <div class="fullname">
            <input type="text" placeholder="ID Number" name="id">
        </div>
        
        <div class="fullname">
            <input type="date" placeholder="Date Of Birth" name="DOB">
        </div>
     
        <div class="fullname">
            <input type="email" placeholder="Email ID" name="email">
        </div>

        <div class="fullname">
            <input type="number" placeholder="Mobile NUmber" name="mobile">
        </div>

        <div class="fullname">
            <input type="text" placeholder="website url" name="website">
        </div>

        <div class="button">
            <button class="but1" type="submit">SUBMIT</button>
            <button class="but2" type="reset" >RESET</button>
        </div>

    </form>
</body>
</html>