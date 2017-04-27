<?php $ip = $_SERVER["REMOTE_ADDR"]; ?>
<!DOCTYPE html>
<html lang="pt-BR" class="ls-theme-gray">
<head>
    <title>Painel Administrativo // Zero Grau</title>
    <?= $this->Html->meta('icon', '/img/favicon.png', ['type'=>'image/png']) ?>
    <!--[if IE]>
    <link rel="shortcut icon" href="favicon.ico">
    <![endif]-->
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Painel 1">
    <?PHP echo $this->Html->css('admin/locastyle.css') ?>
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">

</head>
<body
    class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_clients documentacao_exemplos_painel1_clients_index">
<div class="ls-topbar">

    <!-- Barra de Notificações -->
    <div class="ls-notification-topbar">

        <!-- Links de apoio -->
        <div class="ls-alerts-list">
            <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain"
               data-target="#ls-notification-curtain"><span>Notificações</span></a>
            <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
            <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
        </div>

        <!-- Dropdown com detalhes da conta de usuário -->
        <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
            <a href="#" class="ls-ico-user">
                <span class="ls-name">
                    <?= $this->request->session()->read('Auth.User.username'); ?>
                </span> <!--<span class="ls-name">João</span> (fmolina) -->
            </a>
            <nav class="ls-dropdown-nav ls-user-menu">
                <ul>
                    <li><?= $this->Html->link('Meus dados', ['controller' => 'users', 'action' => 'view', $this->request->session()->read('Auth.User.id')]); ?></li>
                    <!-- <li><?php /*echo $this->Html->link('Faturas', '#'); */?></li>
               <li><?php /*echo $this->Html->link('Planos', '#'); */?></li>-->
                    <li><?= $this->Html->link('Sair do sistema', ['controller' => 'Users', 'action' => 'logout']); ?></li>
                </ul>
            </nav>
        </div>
    </div>
    <span class="ls-show-sidebar ls-ico-menu"></span>
    <?= $this->Html->link($this->Html->tag('span', 'Voltar ao website', ['class' => 'ls-text']), '/', ['class' => 'ls-go-next', 'escapeTitle' => false]); ?>

    <!-- Nome do produto/marca -->
    <h1 class="ls-brand-name">
        <?= $this->Html->link('<small>Painel administrativo web site</small> Zero Grau', '/admin/administrativo', ['class' => 'ls-ico-earth', 'escapeTitle' => false]); ?>
    </h1>
</div>
<aside class="ls-sidebar">
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account ls-active"><a href="#" class="ls-ico-user"> <span
                class="ls-name"><?= $this->request->session()->read('Auth.User.nome') ?></span>
            <!--<span class="ls-name">João</span> <small>(fmolina)</small> --> </a>
        <nav class="ls-dropdown-nav ls-user-menu">
            <ul>
                <li><?= $this->Html->link('Meus dados', ['controller' => 'Users', 'action' => 'view', $this->request->session()->read('Auth.User.id')]); ?></li>
                <li><?= $this->Html->link('Faturas', '#'); ?></li>
                <li><?= $this->Html->link('Planos', '#'); ?></li>
            </ul>
            <?= $this->Html->link('Logout', '/users/logout', ['class' => 'ls-btn-logout']); ?> </nav>
    </div>
    <div class="ls-sidebar-inner">
        <a href="/" class="ls-go-prev">
            <span class="ls-text">Voltar ao website</span>
        </a>
        <nav class="ls-menu">
            <ul>
                <li><?= $this->Html->link('Dashboard', '/admin/painel', ['class' => 'ls-ico-dashboard']); ?></li>

                <li class="ls-submenu"> <?= $this->Html->link('Empresa', '#', ['class' => 'ls-ico-home']); ?>
                    <ul>
                        <li><?= $this->Html->link('Editar texto', ['controller' => 'Empresas', 'action' => 'edit/1'], ['class' => 'ls-ico-images']); ?></li>
                    </ul>
                </li>

                <li class="ls-submenu"> <?= $this->Html->link('Representantes', '#', ['class' => 'ls-ico-origins']); ?>
                    <ul>
                        <li><?= $this->Html->link('Listar', ['controller' => 'Representantes', 'action' => 'index'], ['class' => 'ls-ico-list3']); ?></li>
                        <li><?= $this->Html->link('Adicionar', ['controller' => 'Representantes', 'action' => 'add'], ['class' => 'ls-ico-list3']); ?></li>
                        <li><?= $this->Html->link('Adicionar Email', ['controller' => 'Emails', 'action' => 'add'], ['class' => 'ls-ico-list3']); ?></li>
                        <li><?= $this->Html->link('Adicionar Telefone', ['controller' => 'Celulars', 'action' => 'add'], ['class' => 'ls-ico-list3']); ?></li>
                    </ul>
                </li>
                <li class="ls-submenu"> <?= $this->Html->link('Produtos', '#', ['class' => 'ls-ico-origins']); ?>
                    <ul>
                        <li><?= $this->Html->link('Listar', ['controller' => 'Produtos', 'action' => 'index'], ['class' => 'ls-ico-list3']); ?></li>
                        <li><?= $this->Html->link('Adicionar', ['controller' => 'Produtos', 'action' => 'add'], ['class' => 'ls-ico-list3']); ?></li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<main class="ls-main">

    <?= $this->fetch('content'); ?>

    <footer class="ls-footer" role="contentinfo">
        <nav class="ls-footer-menu">
            <h2 class="ls-title-footer">suporte e ajuda</h2>
            <ul class="ls-footer-list">
                <li>
                    <a href="http://blancolima.com.br" target="_blank" class="bg-customer-support">
                        <span class="visible-lg">Atendimento</span>
                    </a>
                </li>

            </ul>
        </nav>
        <div class="ls-footer-info">
         <span class="last-access ls-ico-screen">
            <strong>Acesso: </strong>
             <?php
             date_default_timezone_set('America/Sao_Paulo');
             $date = date('d/m/Y H:i');
             echo $date; ?>
         </span>

            <div class="set-ip"><strong>IP:</strong> <?= $ip; ?></div>
            <p class="ls-copy-right">Copyright © 2016 BlancoLima.</p>
        </div>
    </footer>
</main>
<aside class="ls-notification">
    <nav class="ls-notification-list" id="ls-notification-curtain">
        <h3 class="ls-title-2">Notificações</h3>
        <ul>
            <li class="ls-dismissable"> <?= $this->Html->link('Quisquam vitae sit unde in quia autem rerum molestias iusto dolorem omnis numquam', '#'); ?>
                <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a></li>
            <li class="ls-dismissable"> <?= $this->Html->link('Facilis illum pariatur dolores rerum non aut temporibus id qui numquam temporibus nostrum', '#'); ?>
                <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a></li>
            <li class="ls-dismissable"> <?= $this->Html->link('Nulla consequatur consequatur qui iste et sint libero voluptatem quis ex nisi sed sapiente', '#'); ?>
                <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a></li>
            <li class="ls-dismissable"> <?= $this->Html->link('Ex cumque similique et ut ut reiciendis molestiae quod sit molestiae est sed sunt', '#'); ?>
                <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a></li>
            <li class="ls-dismissable"> <?= $this->Html->link('Dolores dignissimos aut amet perferendis ut rerum id perferendis eos facilis quod architecto earum quibusdam', '#'); ?>
                <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a></li>
        </ul>
        <p class="ls-no-notification-message">Não há notificações.</p>
    </nav>
    <nav class="ls-notification-list" id="ls-help-curtain">
        <h3 class="ls-title-2">Feedback</h3>
        <ul>
            <li><?= $this->Html->link('> aut dignissimos autem aut unde cum', '#'); ?></li>
            <li><?= $this->Html->link('> sit ut qui voluptatem ipsum molestiae', '#'); ?></li>
        </ul>
    </nav>
    <nav class="ls-notification-list" id="ls-feedback-curtain">
        <h3 class="ls-title-2">Ajuda</h3>
        <ul>
            <li class="ls-txt-center hidden-xs"> <?= $this->Html->link('Fazer um Tour', '#', ['class' => 'ls-btn-dark ls-btn-tour']); ?> </li>
            <li><?= $this->Html->link('> Guia', '#'); ?></li>
            <li><?= $this->Html->link('> Wiki', '#'); ?></li>
        </ul>
    </nav>
</aside>
<!-- -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://locaweb.github.io/locawebstyle/assets/javascripts/example.js" type="text/javascript"></script>
<script src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
<script src="//code.highcharts.com/highcharts.js" type="text/javascript"></script>
<script src="http://locaweb.github.io/locawebstyle/assets/javascripts/docs/panel-charts.js"
        type="text/javascript"></script>

<!-- -->
<script type="text/javascript">
    $(window).load(function () {
        locastyle.browserUnsupportedBar.init();
    });
</script>
</body>
</html>