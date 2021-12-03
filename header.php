
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Header</title>
    
</head>
<body>
    <div class="header" id="myHeader">
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn"
    ><i class="fas fa-bars"></i></label>
    <div class = "logo">
        <p>recapit</p>
    </div>
    <ul>
        <li><a href="#" class="active">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">view profuct</a></li>
        <li><a href="#">location</a></li>
        <li><a href="#">contact us</a></li>
    </ul>
</nav>
</div>
<script>
    window.onscroll = function(){
        myFunction()
    };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    function myFunction(){
        if(window.pageYOffset > sticky){
            header.classList.add("sticky");
        }else{
            header.classList.remove("sticky");
        }
    }
</script>
    
</body>
</html>