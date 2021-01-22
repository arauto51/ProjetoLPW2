<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background-color: lightblue;    
    }
    input[type=text], select {
         width: 100%;
        padding: 12px 20px;
         margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
}
    input[type=submit] {
        width: 30%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position: relative;
        left: 120px;
    }
    div {
        width: 30%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
}
    .center {
        margin: auto;
        width: 30%;
        border: 3px solid #73AD21;
        padding: 10px;
}
    h1 {
        text-align: center;
    }
   

</style>





<body>

    <div class = "center">
        <h1>Cadastro Produto</h1>
            <form action="{{ route ('cadastroP')}} " method="POST">
@csrf
                 <label for="fname">nome:</label> <br>
                <input type="text" id="nome" name="nome"><br><br>
                <label for="lname">preço:</label> <br>
                 <input type="text" id="preço" name="preço"><br><br>
                <input type="submit" value="Cadastro">
   
            </form>
  
            <form action="{{ route ('principal')}} ">
                 <input type="submit" value="Tela Principal">
            </form>

    </div>

</body>
</html>