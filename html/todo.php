<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>
</head>
<body>
    <xmp>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="to.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        </head>
        <style>
            *{
    margin: 0px;
    padding:0px;
    box-sizing: border-box;
}
.container{
    min-height: 300px;
    width: 30%;
    margin: 50px auto;
    background-color: aqua;
}
.container h1{
    text-align: center;
}
.container input{
    margin-top: 20px;
    height: 30px;
    width: 200px;
    outline: none;
    padding-left: 10px;
    font-size: 1rem;
    margin-left:50px;
}
.container .add{
    height: 30px;
    width: 100px;
    background-color: hotpink;
    color: white;
    font-size: 1rem;
    border: none;
    cursor: pointer;
}
.text p{
    margin-top: 20px;
    height: 30px;
    margin-left:50px;
    padding-left: 10px;
    width: 200px;
    padding-top: 5px;
    font-size: 1rem;
    background-color:white;
    color:gray;
}
.text .fa-solid{
    position: relative;
    top: -20px;
    color: red;
    font-size: 1.3rem;
    padding-left:200px; 
}
        </style>
        
        <body>
        
            <div class="container">
               <h1>To do list App</h1>
                <input type="text" placeholder="Enter your Task" class="input">
                <button class="add" onclick="add()">Add Task</button>
                <div class="text"></div>
            </div>
                  <!-------------- ------------if u want to use this code please dont use the part of code injected live serer ------------------------------>
        </body>
  
        <script>
            let inp=document.querySelector(".input");
            let text=document.querySelector(".text");
            function add(){
                if(inp.value==""){
                    alert("Please enter tha task");
                }
                else{
                    let newEle=document.createElement("p");
                    newEle.innerHTML=`${inp.value}<i class="fa-solid fa-trash"></i>`;
                    text.appendChild(newEle);
                    inp.value="";
                    newEle.querySelector("i").addEventListener("click",remove)
                    function remove(){
                        newEle.remove(); 
                    }
                }
            }
        </script>
        </html></xmp>
</body>
</html>