
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
    echo "<p>"."<span class='titulo'>E-mail: </span>".$this->request->data['email']."</p><br>";
    echo "<p>"."<span class='titulo'>Telefone: </span>".$this->request->data['telefone']."</p><br>";

    echo "<p><span class='titulo'>Mensagem: </span><br> ".$this->request->data['mensagem']."</p><br>";
   ?>
</div>
