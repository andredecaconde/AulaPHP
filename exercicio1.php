<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>exercicio de php </h1>

<form action="">

<P>digite o nome do cliente<br>
<input type="text" name="cliente">
</p>


<P>escolha o sexo do cliente<br>
<input type="radio" name="sexo" value="F">feminino<BR>
<input type="radio" name="sexo" value="M">masculino<br>
</p>


<p>
    digite o valor da compra<br>
    <input type="text" name="valorcompra">
</p>


<p>
    <input type="submit" value="calcular">
</p>
</form>


<?PHP

if(isset($_REQUEST["calcular"])){
    $nome=$_REQUEST["cliente"];
    $sexo=$_REQUEST["sexo"];
    $valor=$_REQUEST["valorcompra"];
    $desconto=0;

    echo"O nome é $nome";
    echo "o sexo é $sexo";
    echo "o valor é $valor";

    if($sexo=="F"){
        $desconto = ($valor*0.02);
        echo"o desconto é $desconto";
    }

    if($sexo=="M"){
        $desconto = ($valor*0.05);
        echo"o desconto é $desconto";
    }


    $valorfinal=$valor-$desconto;
    echo "o valor com desconto é $valorfinal";
}

?>

</body>
</html>