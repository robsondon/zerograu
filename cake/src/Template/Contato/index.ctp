<div class="page-banner" style="background-repeat: no-repeat; background-position: center top; background-image: url('img/banner.jpg'); background-size: cover;">
    <div class="container fadeInLeft ">
        <h2 class="page-title">Contato</h2>
    </div>
</div>
<!-- start of page content -->
<div class="page-content container">

    <div class="row">
        <div class="main col-md-9" role="main">
            <section id="contact-form">
                <h2 class="form-heading">Enviar menssagem</h2>
                <form class="contact-form clearfix" action="contact_form_handler.php" method="post">
                    <div class="row">
                        <p class="group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="required" title="* Please provide your name" />
                        </p>
                        <p class="group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="email required" title="* Please provide a valid email address" />
                        </p>
                        <p class="group">
                            <label for="number">Telefone</label>
                            <input type="text" name="number" id="number" class="phone digits" title="* Please provide only digits as phone number" />
                        </p>
                    </div>
                    <p>
                        <label for="message">Mensagem</label>
                        <textarea name="message" id="message" class="required" cols="30" rows="5" title="* Please provide your message"></textarea>
                        <br/>
                    </p>
                    <p>
                        <input type="submit" value="ENVIAR" id="submit" name="submit">
                        <img src="images/ajax-loader.gif" id="contact-loader" alt="Loading...">
                    </p>
                </form>
                <div class="error-container"></div>
                <div id="message-sent"></div>
            </section>
        </div>
        <!-- start of sidebar -->
        <aside class="sidebar col-md-3" role="complementary">
            <section class="widget  contact-details-widget">
                <h3 class="title">Endereço</h3>
                <div class="wrapper">
                    <address><i class="fa fa-map-marker"></i>Rua Professor Evaldo Kissler, 213 - Parque Industrial </address>
                    <div class="phone-numbers">
                        <span><i class="fa fa-phone"></i>(45) 3253.8000</span><span><i class="fa fa-phone"></i>(45) 9846.0660</span><span><i class="fa fa-envelope"></i>sac@zerograu.ind.br</span>
                    </div><br class="clearfix">
                    <h4>Assistência Técnica</h4>
                    <p>Segunda a Sexta: 18h às 20h<br>
                        Sábado, Domingo e Feriado: 8h às 20h.<br><br>

                        Para facilitar o atendimento tenha em mãos o Número de Série ou a Nota Fiscal de compra</p>
                </div>
            </section>
        </aside>
        <!-- end of sidebar -->
    </div>

</div><!-- end of page content -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2287.528074232916!2d-53.94787078091938!3d-24.477676361284434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3785a6676c4ff%3A0x8bce966304c1c12e!2sR.+Prof.+Evaldo+Kissler%2C+213+-+Parque+Industrial%2C+Nova+Santa+Rosa+-+PR%2C+85930-000!5e0!3m2!1spt-BR!2sbr!4v1486583108684" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
