<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Compra</title>
    </head>
    <body>
        <h1>https://www.youtube.com/watch?v=-hAtoNWOE04</h1>
        <hr>
        <?php
        echo '<a href="https://www.php-fig.org/" target="_blank">Pagina Oficial Boas Praticas</a>';
        echo '<br>';
        echo '<br>';
        
            /* O Autoload Substitui o includ e requeri
            include_once 'Vendas/Compra.php';
            include_once 'Vendas/Produto.php';
            include_once __DIR__.'/Vendas/Usuario.php';  */
            /* Este Autoload é manualmente.
            require_once 'autoload.php';  */
        
           require_once __DIR__.'/vendor/autoload.php';

            $u = new \App\Vendas\Usuario();
            $u->cadastrar('Andre da Silva', 37);
            
            $p1 = new \App\Vendas\Produto();
            $p1->cadastrar(1, 'Coca Cola');
            $p2 = new \App\Vendas\Produto();
            $p2->cadastrar(2, 'Pizza Grande');
            
            $c = new \App\Vendas\Compra();
            $c->cadastrar(
                    array(
                        'p1' => $p1,
                        'p2' => $p2
                    )
                    ,$u
                    );
            echo $c->imprimir();
            
            $e = new \Estoque\Estoque();
            echo 'Estoque:'.$e->getTotal();
        
        ?>
        <hr>
    </body>
</html>
