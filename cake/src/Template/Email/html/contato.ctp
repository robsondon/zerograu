
<style type="text/css">
    p{
        color: #000;
        border-bottom: 1px solid #ff5959;
        margin: 5px 0;
        padding: 5px 0;
        display: block;
    }
    span{
        font-weight: bold;
        color: #be4343;
    }
</style>
<div class="tudo">
    <?php
    $content = explode("\n", $content);
    echo "<p>"."<span class='titulo'>Nome: </span>".$this->request->data['nome']."</p><br>";
    echo "<p>"."<span class='titulo'>Sobre Nome: </span>".$this->request->data['sobrenome']."</p><br>";
    echo "<p>"."<span class='titulo'>Empresa: </span>".$this->request->data['empresa']."</p><br>";
    echo "<p>"."<span class='titulo'>E-mail: </span>".$this->request->data['email']."</p><br>";
    echo "<p>"."<span class='titulo'>Telefone: </span>".$this->request->data['telefone']."</p><br>";
    echo "<p>"."<span class='titulo'>Estado: </span>".$this->request->data['estado']."</p><br>";
    echo "<p>"."<span class='titulo'>Endereço: </span>".$this->request->data['endereco']."</p><br>";
    echo "<p>"."<span class='titulo'>Complemento: </span>".$this->request->data['complemento']."</p><br>";
    echo "<p>"."<span class='titulo'>Cidade: </span>".$this->request->data['cidade']."</p><br>";
    echo "<p>"."<span class='titulo'>Como conheceu: </span>".$this->request->data['howmeet']."</p><br>";
    echo "<p><span class='titulo'>Observações: </span><br> ".$this->request->data['observacoes']."</p><br>";
    echo "<h3>Produtos</h3>";
    foreach ($this->request->data['carrinho'] as $carrinho){
        echo "<p><span class='titulo'>Nome: </span><br> ".$carrinho['nome']."</p><br>";
        echo "<p><span class='titulo'>Quantidade: </span><br> ".$carrinho['quantidade']."</p><br>";
        echo "<hr>";
    }
    foreach ($content as $line):
        echo '<p> ' . $line . "</p>\n";
    endforeach;
    ?>
</div>
