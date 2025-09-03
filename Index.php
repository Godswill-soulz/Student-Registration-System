<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Reigistration System </title>
    <style>
    .container{
        background: #101D33FF; 
        width: 50%;
        justify-self: center;
        padding: 50px;
        border-radius: 14px;
        max: width 400px;
        font-family: Tahoma;
    }
    h1{
        color: #fff; 
        text-align: center;
        margin-bottom: 30px;
    }
    label{
        display: block;
        color: #fff;
        margin-bottom: 6px;

    }
    input{
        width: 95%;
        padding: 10px;
        border: none;
        background-color: #334155;
        border-radius: 9px;

    }
    .button{
        width:90px;
        padding: 7px;
        margin-top: 8px;
        justify-content: center;
        display: inline-block;
        border: none;
        border-radius: 4px;
        background: orange;
        color: #101D33FF;
        
    }
    </style>
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
            <h1>Student Registration System</h1>
         <div>
            <label for="name">Full name</label>
            <input type="text" name="full_Name" placeholder="Enter name" required>
         </div>
         <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email" required>
         </div>
         <div>
            <label for="Department">Department</label>
            <input type="Text" name="department" placeholder="Enter Department" required>
         </div>
         <div>
            <label for="Matric Number">Matric Number</label>
            <input type="Text" name= "matric_Number" placeholder="Enter Matric Number" required>
         </div> 
         <button type="Submit"class="button" > <strong >Register</strong></button>  


        </form>
    </div>
</body>
</html>