<?php
    include_once("conn.php");

    // Selecionar método
    $method = $_SERVER["REQUEST_METHOD"];

    if($method === "GET") {
        
        // Consulta
        $pedidosQuery = $conn->query("SELECT * FROM pedidos;");

         // Resgatar todos os pedidos
        $pedidos = $pedidosQuery->fetchAll();

        // trazer dados para montar pizza
        $pizzas = []; 

        // Montando pizza
        foreach($pedidos as $pedido) {

            $pizza = []; //array vazio

            // Definir um array para pizza
            $pizza["id"] = $pedido["pizza_id"];

            // Resgatando a pizza
            $pizzaQuery = $conn->prepare("SELECT * FROM pizzas WHERE id = :pizza_id");

            $pizzaQuery->bindParam(":pizza_id", $pizza["id"]);

            $pizzaQuery->execute();

            $pizzaData = $pizzaQuery->fetch(PDO::FETCH_ASSOC);

            // Resgatando a borda a pizza
            $bordaQuery = $conn->prepare("SELECT * FROM bordas WHERE id = :borda_id");

            $bordaQuery->bindParam(":borda_id", $pizzaData["borda_id"]);

            $bordaQuery->execute();

            $borda = $bordaQuery->fetch(PDO::FETCH_ASSOC);

            $pizza["borda"] = $borda["tipo"];

            // Resgatando a borda a pizza
            $massaQuery = $conn->prepare("SELECT * FROM massas WHERE id = :massa_id");

            $massaQuery->bindParam(":massa_id", $pizzaData["massa_id"]);

            $massaQuery->execute();

            $massa = $massaQuery->fetch(PDO::FETCH_ASSOC);

            $pizza["massa"] = $massa["tipo"];

            // Resgatando os sabores da pizza
            $saboresQuery = $conn->prepare("SELECT * FROM pizza_sabor WHERE pizza_id = :pizza_id");

            $saboresQuery->bindParam(":pizza_id", $pizza["id"]);

            $saboresQuery->execute();

            $sabores = $saboresQuery->fetchAll(PDO::FETCH_ASSOC);

            // Resgatando o nome dos sabores
            $saboresDaPizza = [];

            $saborQuery = $conn->prepare("SELECT * FROM sabores WHERE id = :sabor_id");

            foreach($sabores as $sabor) {

                $saborQuery->bindParam(":sabor_id", $sabor["sabor_id"]);

                $saborQuery->execute();

                // Trazer um dos sabores
                $saborPizza = $saborQuery->fetch(PDO::FETCH_ASSOC);

                // Trazer conteúdo do item
                array_push($saboresDaPizza, $saborPizza["nome"]);

            }

            $pizza["sabores"] = $saboresDaPizza;

            // Adicionar status do pedido
            $pizza["status"] = $pedido["status_id"];

            // Adicionar o array de pizza, ao array das pizzas
            array_push($pizzas, $pizza);
            
        }

       // Resgatando os status pro front
       $statusQuery = $conn->query("SELECT * FROM status;");

       // Mostrar todos os dados
       $status = $statusQuery->fetchAll();


    }else if ($method === "POST") {

        //Verificando tipo de POST
        $type = $_POST["type"];

        //Deletar pedido
        if ($type === "delete") {

            $pizzaID = $_POST["id"];

            //Criar query
            $deleteQuery = $conn->prepare("DELETE FROM pedidos WHERE pizza_id = :pizza_id;");

            // Filtrar dados do clinte
            $deleteQuery->bindParam(":pizza_id", $pizzaId, PDO::PARAM_INT);

            $deleteQuery->execute();

            // Exibir  Mensagem 
            $_SESSION["msg"] = "Pedido removido com sucesso!";
            $_SESSION["status"] = "success";

            // Atualizar status do pedido
        }else if($type === "update") {

            $pizzaID = $_POST["id"];
            $statusId = $_POST["status"];

            $updateQuery = $conn->prepare("UPDATE pedidos SET status_id = :status_id WHERE pizza_id = :pizza_id; ");

            $updateQuery->bindParam(":pizza_id", $pizzaId, PDO::PARAM_INT);
            $updateQuery->bindParam(":status_id", $statusId, PDO::PARAM_INT);

            //Executar query
            $updateQuery->execute();

            // Exibir  Mensagem 
            $_SESSION["msg"] = "Pedido atualizado com sucesso!";
            $_SESSION["status"] = "success";


        }

        // Retorna usuario para dashboard
        header("Location: ../dashboard.php");

    }
    
?>