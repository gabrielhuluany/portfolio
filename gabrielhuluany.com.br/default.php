<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content=""/>
  <meta name="robots" content="noindex, nofollow"/>
  <base href="https://www.hostmidia.com.br/paginas/">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="https://www.hostmidia.com.br/favicon.ico"/>
  <link rel="image_src" href="https://www.hostmidia.com.br/img/thumb-hostmidia.jpg"/>
  <link href="_bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="_css/fonts.css" rel="stylesheet"/>
  <link href="_css/style.css" rel="stylesheet"/>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script language="JavaScript">
window.onload = function()
{
  var domain = window.location.hostname.replace('www.','');  
  var elemts = document.getElementsByClassName('domain');
  
  document.title = domain + ' - Bem-vindo!';  
  
  for (var i=0;i<elemts.length;i++) {
    elemts[i].innerHTML = domain;
  }
  
  var d = new Date();
  var n = d.getFullYear();

  document.getElementById('year').innerHTML = n;
}
</script>
</head>
<body>
  <?php 

  ?>
<div id="geral">
    <div class="bar"></div>
    <div class="topo">
        <div class="container">
           <div class="row">
                <div class="col-xs-4 col-sm-6">
                    <div class="logo">
                        <a href="https://www.hostmidia.com.br/?utm_source=hm_hospedagem&utm_medium=link&utm_content=logo&utm_campaign=clientes" rel="nofollow">
                            <svg class="icone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115 100">
                              <path d="M102.1 0H12.5C5.4 0 0 6.4 0 14.3v71.3c0 8 5.4 14.4 12.5 14.4h102.1V14.6c0-8.2-5.4-14.6-12.5-14.6zM26.7 75.6h-9.6V24.4h9.6v51.2zM50 54.8H30.8v-9.6H50v9.6zm13.7 20.8h-9.6V24.4h9.6v51.2zm16.9-26.2H71v-25h9.6v25zm16.9 26.2h-9.6V24.4h9.6v51.2z"/>
                            </svg>
                            <svg class="hostmidia hidden-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336 100">
                              <path d="M228.3 19.1l6.9-7.8 2.8 2.8c0.7 0.5 0.8 1.5 0.3 2.1 -0.1 0.1-0.2 0.2-0.3 0.3l-6.7 6L228.3 19.1z"/>
                              <path d="M113.3 47.6H95.6c-1.5 0-2.8-1.3-2.8-2.8v-9.7c0-1.5 1.3-2.8 2.8-2.8h25.2v-2.6c0-1.9-1.5-3.4-3.4-3.4H95.6c-4.9-0.1-8.9 3.7-9 8.6 0 0 0 0 0 0v9.7c0.1 4.9 4.2 8.7 9 8.6 0 0 0 0 0 0h17.7c1.5 0 2.8 1.3 2.8 2.8v9.3c-0.1 1.5-1.3 2.6-2.8 2.6H86.6v5.8h26.7c4.9 0.1 8.9-3.7 9-8.6 0 0 0 0 0 0v-9.5C122.4 51.3 118 47.6 113.3 47.6z"/>
                              <path d="M28.7 53H6v20.7H0V26.3h6v20.9h22.6V26.3h6.2v47.4h-6.2V53z"/>
                              <path d="M52.1 73.7c-4.9 0.1-8.9-3.7-9-8.6 0 0 0 0 0 0v-30c0-4.9 4-8.8 8.8-8.8 0.1 0 0.1 0 0.2 0h16.8c4.9-0.1 8.9 3.7 9 8.6 0 0.1 0 0.1 0 0.2v30c-0.1 4.9-4.2 8.7-9 8.6 0 0 0 0 0 0H52.1zM68.7 32.3H52.6c-1.9 0-3.4 1.5-3.4 3.4l0 0v28.9c0.1 1.8 1.6 3.1 3.4 3 0.1 0 0.2 0 0.3 0h16.2c1.8 0.1 3.3-1.2 3.4-3 0 0 0 0 0 0V35.7C72.2 33.9 70.6 32.4 68.7 32.3z"/>
                              <path d="M213.9 73.7V35.4c0-1.9-1.5-3.5-3.4-3.5h-10.6v21.2h-6v-21h-14.2v41.5h-6V26.3c0 0 32.4 0 37.5 0 5.1 0 9 3.4 9 8.2 0 0.2 0 39.2 0 39.2H213.9z"/>
                              <path d="M243.2 26.3h25.9c4.9 0 8.9 4 9 8.9v29.6c0 4.9-4 8.9-8.8 8.9 -0.1 0-0.1 0-0.2 0h-25.9V26.3zM249.2 32v35.9h19.6c1.9 0.1 3.5-1.3 3.7-3.3 0-0.1 0-0.1 0-0.2V35.4c-0.1-2-1.7-3.5-3.7-3.5H249.2z"/>
                              <path d="M301.2 73.7V26.3H327c4.9-0.1 8.9 3.8 9 8.7 0 0.1 0 0.1 0 0.2v38.5h-6V53.1h-23v20.6L301.2 73.7zM307.2 31.9v15.1h23V35.2c-0.1-1.9-1.7-3.5-3.7-3.5h-19.4V31.9z"/>
                              <path d="M165 32.4v-2.6c0-1.9-1.5-3.5-3.4-3.5h-31v6.1h14.2v41.3h6V32.4H165z"/>
                              <path d="M234.6 29.8c0 0.3 0 43.9 0 43.9h-6.3V26.3h2.8c2 0 3.2 0.9 3.4 2.5C234.6 29 234.6 29.6 234.6 29.8z"/>
                              <path d="M292.5 29.8c0 0.3 0 43.9 0 43.9h-6.3V26.3h2.8c2 0 3.2 0.9 3.4 2.5C292.5 29 292.5 29.6 292.5 29.8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-6">
                    <form action="https://www.hostmidia.com.br/registro-de-dominio/" rel="nofollow" id="whois" method="get" class="pesquisar">
                        <input type="hidden" name="utm_source" value="hm_hospedagem">
                        <input type="hidden" name="utm_medium" value="link">
                        <input type="hidden" name="utm_content" value="frm_pesquisa">
                        <input type="hidden" name="utm_campaign" value="clientes">
                        <div class="input-group">
                            <input name="dominio" id="dominio" type="text" class="texto form-control input-lg" autocomplete="Off" placeholder="Informe seu domínio...">
                            <span class="input-group-btn">
                                <button class="btn btn-lg" type="submit"><img src="_img/ico-lupa.png"></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="area">
        <div class="container">
            <div class="row eq">
                <div class="col-sm-6">
                    <div class="titulo">
                        <h1><span class="destaque domain"></span></h1>
                    </div>
                    <h2>
                        <span class="faixa laranja">
                            <span class="parabens">
                                <svg xmlns="http://www.w3.org/2000/svg" width="133" height="25" viewBox="0 0 133 25"><path id="parabens-2" data-name="parabens" d="M132.3,7.8q-0.6,2.5-1.1,4.5a15.3,15.3,0,0,0-.6,3.4,3.5,3.5,0,0,1-.5,1.7,3.5,3.5,0,0,1-2.1-.6,18.8,18.8,0,0,1,.4-5.5,23.5,23.5,0,0,0,.7-4.6q0-.1.1-1.1a2.1,2.1,0,0,1,.9-1.5,2.3,2.3,0,0,1,1.2-.5,1.6,1.6,0,0,1,1,.4,1.1,1.1,0,0,1,.5.9A24.4,24.4,0,0,1,132.3,7.8Zm-3.7,12a2.3,2.3,0,0,1,1.2.5,1.2,1.2,0,0,1,.7.8v0.8a1.9,1.9,0,0,1-.9,1.4,2.6,2.6,0,0,1-1.3.5,1.4,1.4,0,0,1-1.5-1.7,2.5,2.5,0,0,1,.6-1.4A1.7,1.7,0,0,1,128.7,19.8Zm-5.3-8.2-0.5-.2-0.6-.2a5.6,5.6,0,0,0-2.7.8,2.3,2.3,0,0,0-1.5,1.9,1.4,1.4,0,0,0,.5,1,8.7,8.7,0,0,0,2.1,1.3,9.6,9.6,0,0,1,3.1,2,3,3,0,0,1,.8,2q0,2-2.7,3.3a13.5,13.5,0,0,1-6.1,1.3q-2.5,0-2.5-1.8a1.5,1.5,0,0,1,.5-1.1,1.7,1.7,0,0,1,1.2-.5l0.8,0.2,1,0.2a9.6,9.6,0,0,0,2.7-.4,3.5,3.5,0,0,0,1.9-1q-0.1-.7-2.4-1.8a11.1,11.1,0,0,1-3.6-2.3,3.3,3.3,0,0,1-.8-2.1q0-2.4,2.7-4.2a9.3,9.3,0,0,1,5.1-1.8q2.3,0,2.3,2a1.2,1.2,0,0,1-.5,1A1.6,1.6,0,0,1,123.3,11.6ZM110.2,23.4a2.3,2.3,0,0,1-2.3-1.4h0a13.5,13.5,0,0,1-1-4.6q-0.3-3.5-1.3-3.5t-3.4,3.6a25.8,25.8,0,0,0-3,5.4,1.8,1.8,0,0,1-.5.9,1,1,0,0,1-.7.3q-2.1,0-2.1-1.9a22.6,22.6,0,0,1,.4-2.9,41.5,41.5,0,0,0,.5-7.2,2.3,2.3,0,0,1,.6-1.4,1.5,1.5,0,0,1,1.2-.7,1.7,1.7,0,0,1,1.2.4,3.3,3.3,0,0,1,.4,2.1,30.7,30.7,0,0,1-.8,5q3-6.9,6.6-6.9t3.7,5q0.5,5.1,1.3,5.1h0.7l0.8-.2a0.6,0.6,0,0,1,.7.8,2.1,2.1,0,0,1-.9,1.5A3.3,3.3,0,0,1,110.2,23.4ZM86.3,24.7a4.7,4.7,0,0,1-3.6-1.5,5.8,5.8,0,0,1-1.3-4.1A11.2,11.2,0,0,1,84.1,12q2.7-3.3,5.8-3.4a3.3,3.3,0,0,1,3.4,3.3A6.2,6.2,0,0,1,91,16.5a12.4,12.4,0,0,1-5.9,3,0.5,0.5,0,0,0-.4.5,1.8,1.8,0,0,0,.6,1.3,2.1,2.1,0,0,0,1.6.6q2.7,0,5.5-2.8a1.5,1.5,0,0,1,1-.5,0.8,0.8,0,0,1,.8.9q0,1.4-2.4,3.4A8.3,8.3,0,0,1,86.3,24.7Zm2.4-9.6a3.8,3.8,0,0,0,1.6-2.6,1.2,1.2,0,0,0-.3-0.8,0.8,0.8,0,0,0-.6-0.3q-1.2,0-2.6,1.8A9.1,9.1,0,0,0,85,16.9,8.3,8.3,0,0,0,88.8,15.1ZM92.3,3.9L90.1,5.4h0L87.9,7,87,7.6H86.7a1.1,1.1,0,0,1-.8-0.3,1.2,1.2,0,0,1-.3-0.8q0-.8,2-2.3h0l1-.8,3-2.3,0.9-.4a1.2,1.2,0,0,1,.8.7,2.2,2.2,0,0,1,.4,1,1.3,1.3,0,0,1-.4.8A2.8,2.8,0,0,1,92.3,3.9ZM69.7,24.2a3.7,3.7,0,0,1-2-.6,2.1,2.1,0,0,1-1.1-1.5,1.3,1.3,0,0,0-.2-0.7l-0.3-.4a1.6,1.6,0,0,1-.4-1.1,29.1,29.1,0,0,1,.4-3.5L67,10.8a71.7,71.7,0,0,1,1.9-9.3A2.1,2.1,0,0,1,71,0q1.1,0,1.1,2A28.9,28.9,0,0,1,71,7.6Q70.4,9.7,69.6,14a16.4,16.4,0,0,1,3.7-3.7,6.5,6.5,0,0,1,3.6-1.4A2.6,2.6,0,0,1,79,10a4.1,4.1,0,0,1,.9,2.6,11.9,11.9,0,0,1-3.2,7.9Q73.4,24.2,69.7,24.2ZM76.2,12q-2.2,0-4.9,3.2t-2.7,5.3a1.6,1.6,0,0,0,1.3,1,4.9,4.9,0,0,0,2.8-1.2,10,10,0,0,0,2.7-3.3,8,8,0,0,0,1.2-3.6Q76.7,12,76.2,12ZM61,24.6q-2.6,0-2.3-5.2-3.6,4.7-6.9,4.7a2.8,2.8,0,0,1-2.1-1,3.5,3.5,0,0,1-.9-2.5q0-3.6,3.2-7.7t6.5-4.1a2.1,2.1,0,0,1,2.2,1.7q1.6,0,1.6,1.2a12.8,12.8,0,0,1-.3,2.1,24.9,24.9,0,0,0-.5,4.5,8.7,8.7,0,0,0,.2,2.5l0.3,0.9,0.7,0.5a0.8,0.8,0,0,1,.5.7,1.4,1.4,0,0,1-.7,1.2A2.6,2.6,0,0,1,61,24.6ZM58.5,12.3a0.9,0.9,0,0,0-.7-0.4q-1.4,0-3.6,3.1T52,20.1t0.5,1.1q1.6,0,4-2.9t2.4-5A1.8,1.8,0,0,0,58.5,12.3ZM48,13.5a2.1,2.1,0,0,1-1.5-.7,1.4,1.4,0,0,0-.8-0.5q-1,0-3.4,3.2a14.7,14.7,0,0,0-2.9,7.2,2.5,2.5,0,0,1-.7,1.6,2.1,2.1,0,0,1-1.4.5A1.4,1.4,0,0,1,36,23.7a11.1,11.1,0,0,1-.4-3.5q0-1,.1-2.7T36,13.6V12.7a10.2,10.2,0,0,1,.3-1.8,2,2,0,0,1,.7-0.9,2.1,2.1,0,0,1,1.3-.4,1.4,1.4,0,0,1,1.1.4,1.4,1.4,0,0,1,.4.9,12,12,0,0,1-.6,2.7,11.5,11.5,0,0,0-.4,1.7l-0.3,2.1,0.2-.4a23.2,23.2,0,0,1,3.6-5.4A5.3,5.3,0,0,1,46,9.3a3.3,3.3,0,0,1,2.3.8,2.3,2.3,0,0,1,.9,1.8,2,2,0,0,1-.3,1.1A0.9,0.9,0,0,1,48,13.5ZM30.4,24.6q-2.6,0-2.3-5.2-3.6,4.7-6.9,4.7a2.8,2.8,0,0,1-2.1-1,3.5,3.5,0,0,1-.9-2.5q0-3.6,3.2-7.7t6.5-4.1A2.1,2.1,0,0,1,30,10.6q1.6,0,1.6,1.2a12.8,12.8,0,0,1-.3,2.1,24.9,24.9,0,0,0-.5,4.5,8.7,8.7,0,0,0,.2,2.5l0.3,0.9L32,22.2a0.8,0.8,0,0,1,.5.7,1.4,1.4,0,0,1-.7,1.2A2.6,2.6,0,0,1,30.4,24.6ZM27.9,12.3a0.9,0.9,0,0,0-.7-0.4q-1.4,0-3.6,3.1t-2.2,5.2,0.5,1.1q1.6,0,4-2.9t2.4-5A1.8,1.8,0,0,0,27.9,12.3ZM5.7,17.4l-2,.5a49.8,49.8,0,0,0-.3,5.1,2.1,2.1,0,0,1-.5,1.3,1.5,1.5,0,0,1-1.2.6q-1.7,0-1.7-2t0.8-7.3q0.6-5,.6-6a4.1,4.1,0,0,0-.1-1.3A1.7,1.7,0,0,1,.4,6.7q0-1.1,3.7-2a28.9,28.9,0,0,1,6.3-.9,8.5,8.5,0,0,1,4.9,1.3,4,4,0,0,1,1.8,3.4q0,3.1-3.4,5.5A21.6,21.6,0,0,1,5.7,17.4ZM10.4,6.6a17.2,17.2,0,0,0-5.5,1L4.1,14.8A21.1,21.1,0,0,0,11,12.4q3-1.7,3-3.6T10.4,6.6Z" fill="#fff"/></svg>
                            </span>
                        </span>
                    </h2>
                    <h3>Seu ambiente <span class="destaque">está pronto</span> para publicar o site.</h3>
                    <div class="lista">
                        <h3>Como começar?</h3>
                        <ul>
                            <li><img src="_img/ico-painel.png"> <a href="https://www.hostmidia.com.br/suporte/como-acessar-o-painel-de-controle-cpanel/?utm_source=hm_hospedagem&utm_medium=link&utm_content=comecar&utm_campaign=clientes" rel="nofollow">Acessar o painel de controle cPanel</a></li>
                            <li><img src="_img/ico-publicar.png"> <a href="https://www.hostmidia.com.br/suporte/como-publicar-um-site/?utm_source=hm_hospedagem&utm_medium=link&utm_content=comecar&utm_campaign=clientes" rel="nofollow">Publicar meu site na internet</a></li>
                            <li><img src="_img/ico-email-facil.png"> <a href="https://www.hostmidia.com.br/suporte/como-criar-ou-alterar-uma-conta-de-email-no-cpanel/?utm_source=hm_hospedagem&utm_medium=link&utm_content=comecar&utm_campaign=clientes" rel="nofollow">Criar uma conta de e-mail</a></li>
                            <li><img src="_img/ico-banco.png"> <a href="https://www.hostmidia.com.br/suporte/como-criar-um-banco-de-dados-mysql/?utm_source=hm_hospedagem&utm_medium=link&utm_content=comecar&utm_campaign=clientes" rel="nofollow">Criar um banco de dados MySQL</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ilustracao">
                        <img src="_img/ilustracao-ativacao.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="area cinza">
        <div class="container">
            <div class="titulo">
                <h2>Conheça os produtos da <strong>HostMídia</strong></h2>
            </div>
            <div class="row eq itens">
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/registro-de-dominio/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Registro de Domínio</a></h4>
                    <p>Pesquise e registre o domínio ideal para seu negócio.</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/hospedagem-de-sites/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Hospedagem de Sites</a></a></h4>
                    <p>Hospedagem de sites com recursos ilimitados.</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/servidor-vps/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Servidor VPS</a></h4>
                    <p>VPS Linux com cPanel e gerenciamento básico GRÁTIS.</p>
                </div>
                
                
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/transferencia-de-dominio/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Transferência de Domínio</a></h4>
                    <p>Transfira seu domínio para quem se preocupa com você!</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/revenda-de-hospedagem/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Revenda de Hospedagem</a></h4>
                    <p>Inicie hoje mesmo sua empresa de hospedagem de sites!</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/servidor-dedicado/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Servidor Dedicado</a></h4>
                    <p>Simples. Poderoso. Confiável. Servidores customizados!</p>
                </div>
                
                
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/certificado-ssl/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Certificado SSL</a></h4>
                    <p>Proteja seu site e aumente suas vendas.</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4><a href="https://www.hostmidia.com.br/construtor-de-sites/?utm_source=hm_hospedagem&utm_medium=link&utm_content=links&utm_campaign=clientes" rel="nofollow"><img src="_img/ico-seta-direita.png">Construtor de Sites</a></h4>
                    <p>Crie seu site exatamente do jeito que imagina em apenas 3 passos.</p>
                </div>
                
            </div>            
        </div>
    </div>    
    <div class="rodape">
        <div class="container">
            <div class="col-sm-6">
                <div class="icone">
                    <svg class="icone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115 100">
                        <path d="M102.1 0H12.5C5.4 0 0 6.4 0 14.3v71.3c0 8 5.4 14.4 12.5 14.4h102.1V14.6c0-8.2-5.4-14.6-12.5-14.6zM26.7 75.6h-9.6V24.4h9.6v51.2zM50 54.8H30.8v-9.6H50v9.6zm13.7 20.8h-9.6V24.4h9.6v51.2zm16.9-26.2H71v-25h9.6v25zm16.9 26.2h-9.6V24.4h9.6v51.2z" fill="#d9d9d9"/>
                    </svg>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    &copy; 2002-<span id="year"></span> HostMídia - Todos os direitos reservados.
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var $_site = 'https://www.hostmidia.com.br/paginas/';
</script>
<script src="_js/libraries/jquery-1.12.3.min.js"></script>
<script src="_bootstrap/js/bootstrap.min.js"></script>
<script src="_js/script.js"></script>
</body>
</html>