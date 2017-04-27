<!DOCTYPE html>
<html class="ls-theme-gray">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Login // Zero Grau</title>
    <?= $this->Html->meta('icon', '/img/favicon.png', ['type'=>'image/png']) ?>
    <?= $this->Html->css('admin/login.css'); ?>
</head>
<body
    class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">
<div class="ls-login-parent">
    <div class="ls-login-inner">
        <div class="ls-login-container">
            <div class="ls-login-box">
                <h1 class="ls-login-logo">
                    <?php echo $this->Html->image('login/logo.png', array('title' => 'Lolly Sex - Uma chupadinha só')); ?>
                </h1>

                <?= $this->fetch("content"); ?>

            </div>
            <div class="ls-login-adv">
                <?php echo $this->Html->image('login/uems.jpg', array('style' => 'border: 1px solid rgba(0,0,0, .5);width: 300px')); ?>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
</body>
</html>
