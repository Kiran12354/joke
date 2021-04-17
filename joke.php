<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Best Jokes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron fluid-container" style="margin-left: 400px; margin-right: 400px;margin-top: 150px; text-align: center">
            <h2>Best Jokes To Make Your Day</h2>
            <hr>
            <div id="joke">Awesome Joke is Loading...</div>
            <hr>
            <button id="jokebtn" class="btn btn-warning">Next Joke</button>
        </div>
        
        <script>
//        const jokes=document.querySelector('#joke');
//        const jokebtn=document.querySelector('#jokebtn');
//        const generatejokes=()=>{
//            const setHeader={
//                headers:{
//                Accept:"application/json"
//                }
//              }
//            fetch('https://icanhazdadjoke.com',setHeader)
//                    .then((res)=>res.json())
//                    .then((data)=>{
//                        jokes.innerHTML=data.joke;
//                     }).catch((error)=>{
//                         console.log(error);        
//                     })
//        }
//        jokebtn.addEventListener('click',generatejokes);
//        generatejokes();

        const jokes=document.querySelector('#joke');
        const jokebtn=document.querySelector('#jokebtn');
        const generatejokes= async()=>{
            try{
            const setHeader={
                headers:{
                Accept:"application/json"
                }
              }
            const res=await fetch('https://icanhazdadjoke.com',setHeader);
            const data=await res.json();
            jokes.innerHTML=data.joke;
        }catch(err){
         console.log(`the error is ${err}`);   
        }
    }
        jokebtn.addEventListener('click',generatejokes);
        generatejokes();
        
        </script>
    </body>
</html>
