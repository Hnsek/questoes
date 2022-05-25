<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php 
        $estados = array(
            "AL" => "Alagoas",
            "SP" => "São Paulo",
            "RJ" => "Rio de Janeiro"
        )

    ?>
    <form action="#" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $_POST["nome"]; ?>">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php echo $_POST["cidade"]; ?>">
        <label>Estado</label>
        <select name="estados" id="estados">
            <?php 
                foreach($estados as $estado):
                    if($estado != $estados[$_POST["estados"]]){
                        echo "<option value='".array_search($estado, $estados)."'>".$estado."</option>";
                    }
                    else{
                        echo "<option value='".array_search($estado, $estados)."' selected>".$estado."</option>";
                    }
                endforeach;
            ?>
        </select>
        <input type="submit">
    </form>

    <?php 
        $nomePOST = $_POST["nome"];
        $cidadePOST = $_POST["cidade"];
        $estadoPOST = $_POST["estados"];

        
        if(empty($nomePOST) || empty($cidadePOST)){
            echo "Os campos nome e cidade não podem ser vazios";
        }
        else{
            $numeroDePalavrasNome = str_word_count($nomePOST);
            if($numeroDePalavrasNome < 2){
                echo "O nome deve ter duas palavras no mínimo";
            }
            else{
                echo "Tudo certo :)"; 
            }
        }
        
    ?>

</body>
</html>