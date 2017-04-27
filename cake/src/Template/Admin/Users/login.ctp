<?= $this->Flash->render() ?>
    <!--<form role="form" class="ls-form ls-login-form" action="login" id="UserLoginForm" method="post" accept-charset="utf-8">-->
<?= $this->Form->create(null, array('class' => 'ls-form ls-login-form')); ?>
    <fieldset>
        <label class="ls-label">
            <b class="ls-label-text ls-hidden-accessible">Usuário</b>
            <?php //echo $this->Form->input("User.username", array('label' => '', 'id'=>'login', 'type' => 'text', 'class' => 'ls-login-bg-user ls-field-lg', 'placeholder' => 'Usuário', 'required', 'autofocus')); ?>
            <!--<input class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" required autofocus> -->
            <?= $this->Form->input('username', array('div' => false, 'label' => false, 'class' => 'ls-login-bg-user ls-field-lg', 'placeholder' => 'Usuário', 'required', 'autofocus')) ?>
        </label>
        <label class="ls-label">
            <b class="ls-label-text ls-hidden-accessible">Senha</b>
            <div class="ls-prefix-group">
                <?php //echo $this->Form->input("User.password",array('label'=>'', 'id'=>'password', 'type' => 'password', 'class' => 'ls-login-bg-password ls-field-lg', 'placeholder' => 'Senha', 'required')); ?>
                <?= $this->Form->input('password', array('div' => false, 'label' => false, 'class' => 'ls-login-bg-password ls-field-lg', 'placeholder' => 'Senha', 'required')) ?>
                <!--<input id="password_field" class="ls-login-bg-password ls-field-lg" type="password" placeholder="Senha" required> -->
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
            </div>
        </label>
        <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p>
        <?php echo $this->Form->button('Entrar no sistema', array('class'=>'ls-btn-primary ls-btn-block ls-btn-lg')); ?>
        <!--<input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg"> -->
        <p class="ls-txt-center ls-login-signup">Não possui um usuário no sistema? <a href="#">Cadastre-se</a></p>
    </fieldset>

    <!--</form> -->
<?php echo $this->Form->end() ?>