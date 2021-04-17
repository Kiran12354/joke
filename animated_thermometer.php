<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body style="background: grey;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7" style="margin-top: 180px">
        <div class="card-body">
            <h1 style="font-size: 100px;">I am Thermometer <span id="temp" class="fa"></span></h1>
        </div>
           </div>
        </div>
        
        <script>
        const tempLoad=()=>{
            let temp=document.getElementById('temp');
            temp.innerHTML="&#xf2cb";
            temp.style.color="red";
            setTimeout(()=>{
                temp.innerHTML="&#xf2ca";
                temp.style.color="green";
            },500);
            setTimeout(()=>{
                temp.innerHTML="&#xf2c9";
                temp.style.color="green";
            },1000);
            setTimeout(()=>{
                temp.innerHTML="&#xf2c8";
                temp.style.color="green";
            },1500);
            setTimeout(()=>{
                temp.innerHTML="&#xf2c7";
                temp.style.color="yellow";
            },2000);
        }    
        tempLoad();
        setInterval(tempLoad,2500);
        </script>
    </body>
</html>
