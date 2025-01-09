<?php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcu</title>
</head>
<body>
    <xmp>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .outer{
            height: 450px;
            width: 400px;
            margin: 50px auto;
            border-radius: 10px;
        }
        .outer1{
            height: 100px;
            width: 400px;
            background-color: gray;
        }
        .outer1 input{  
            height: 100px;
            width: 400px;
            outline: none;
            background-color: transparent; 
            box-shadow: 0px 0px 0px gray inset;
            font-size: 40px;
            color: brown ;
            padding-right: 10px;
            border: none;
            text-align: right;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .outer2{
            height: 320px;
            width: 400px;
            background-color: beige;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .outer2 button{
            height: 60px;
            width: 60px;
            margin: 8px;
            font-size: 30px;
            background-color: bisque;
            border-radius: 5px;
            color: #ff0004;
            cursor: pointer;
            border: none;
        }
    </style>
</head>
<body>
    <div class="outer">
        <div class="outer1">
            <input type="text" id="input">
        </div>
        <div class="outer2">
            <button>AC</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>+</button>
            <button>DEL</button>
            <button>4</button>
            <button>5</button>
            <button>6</button>
            <button>-</button>
            <button>=</button>
            <button>7</button>
            <button>8</button>
            <button>9</button>
            <button>*</button>
            <button>00</button>
            <button>.</button>
            <button>0</button>
            <button>%</button>
            <button>/</button>
        </div>
    </div>
     <!-------------- ------------if u want to use this code please dont use the part of code injected live serer ------------------------------>
</body>
<script>
    let input=document.getElementById("input");
    let btn=document.querySelectorAll("button");
    let string="";
    let arr=Array.from(btn);
    arr.forEach(button => {
        button.addEventListener('click',(e)=>{
            if (e.target.innerHTML=="="){
                string=eval(string);
                input.value=string;

            }
            else if(e.target.innerHTML=="AC"){
                string="";
                input.value=string;
            }
            else if(e.target.innerHTML=="DEL"){
                string=string.substring(0,string.length-1);
                input.value=string;
            }

            else{
                string +=e.target.innerHTML;
                input.value=string;
            }
            
        })
    });
</script>
</html>
    </xmp>
</body>
</html>
?>