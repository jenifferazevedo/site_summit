<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>SUMMIT 1.0</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
</head>

<body>
  <header class="container-fluid sticky-top">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="./img/svg/logonav.svg" alt="Logo evento">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#oevento">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#noticias">Notícias</a>
            <a class="nav-item nav-link" href="#conferencia">Conferência</a>
            <a class="nav-item nav-link" href="#exposicao">Exposição</a>
            <a class="nav-item nav-link" href="#speedrecruitment">Speed Recruitment</a>
            <a class="nav-item nav-link" href="#preInscricao"><button class="chamada">Pré-inscrição</button></a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section id="oevento" class="">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-12 bgfoto1">
          <img class="img-fluid" src="./img/header/Mainpage.jpg" alt="Foto que remete a palestras com a logo do evento">
          <img src="./img/svg/logogrande.svg" alt="Logo do evento Summit">
        </div>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-12">
          <h1 class="titulo">SUMMIT 1.0</h1>
          <p>
        
            Dia 11 e 12 de fevereiro de 2020 realiza-se a primeira edição do Summit 1.0 – Serviço
            de Formação de Vila Nova de Gaia.
            <br><br>
            O evento foi pensado para satisfazer a necessidade de conhecer melhor o mundo da inovação tecnológica, pela
            perspetiva de recrutadores e empresas dessas áreas.
           
          </p>
            <p id="sobreevento" class="collapse">

            Pretende-se criar um espaço de participação de empresas a propósito do seu contributo para o mercado de
            trabalho onde se inserem e em que se destaque as competências relevantes nessas áreas.
            <br>
            Criar-se-á, também, uma oportunidade de speed recruitment e um espaço de exposição onde os visitantes
            poderão ver e experimentar o contacto com as várias áreas profissionais / formação.
            <br>
            <br>
            Áreas representadas:
            Audiovisual / Marketing Digital & Redes Sociais / Design Gráfico / Robótica & Domótica / Programação Mobile
            / Reparação de Hardware / Programação / Desenvolvimento de Videojogos / Animação 2D & 3D / Impressão 3D
          </p>
          <button id="btncollapse" type="button" class="btn vermais" data-toggle="collapse" data-target="#sobreevento"
            aria-expanded="false" aria-controls="sobreevento">Ver mais</button>
            <div id="videoSummit" class="margin0">
                <div class="video">
                  <iframe width="760" height="415" src="https://www.youtube.com/embed/T-2x3g71s8I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section> 

  <section id="noticias">
    <div class="container-fluid cont">
      <div class="row">
        <div class="col-12 bgfoto2 ">
          <img src="./img/header/Noticias.jpg" alt="Foto sobre as Noticias">
          <h2 class="subtitle">Notícias</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row noticias">
        <div id="noticiasshow" class="row justify-content-center">
            <div class="col-lg-4 col-md-5 col-sm-8">
              <a href="./pages/Acreditaportugal.html"> 
              <div class="card noticias">
                <div class="cardimg">
                  <img src="./img/noticias/acreditaportugal.png" alt="Notícias Acredita Portugal!">
                </div>
                <div class="cardContent">
                <h3>Acredita Portugal</h3>
                <p>Acredita Portugal e Centro de Emprego e Formação Profissional de Vila Nova de Gaia apostam no empreendedorismo.
                </p>
                </div>
              </div>
              </a> 
            </div>
            <div class="col-lg-4 col-md-5 col-sm-8">
              <a href="./pages/altran.html"> 
              <div class="card noticias">
                <div class="cardimg">
                    <img src="./img/noticias/Altran.jpg" alt="Altran no evento SUMMIT 1.0">
                </div>
                <div class="cardContent">
                <h3>Altran no SUMMIT 1.0</h3>
                <p>Academia IEFP Altran no Centro de Emprego e Formação Profissional de Vila Nova de Gaia.
                </p>
                </div>
              </div>
              </a> 
            </div>
            <div class="col-lg-4 col-md-5 col-sm-8">
              <a href="./pages/Lovemondays.html"> 
              <div class="card noticias">
                <div class="cardimg">
                  <img src="./img/noticias/LoveMondaysClubsmall.jpg" alt="Love Mondays no SUMMIT 1.0">
                </div>
                <div class="cardContent">
                <h3>Love Mondays Club</h3>
                <p> A Love Mondays Club é uma plataforma de apoio vocacional e de gestão de carreira, através de serviços de mentoria online.
                </p>
                </div>
              </div>
              </a> 
            </div>
            <!--Ultimo card deve ser do nome x-->
            <div class="cardshow col-lg-4 col-md-5 col-sm-8">
              <a href="./pages/videojogos.html"> 
              <div class="card noticias">
                <div class="cardimg">
                  <img src="./img/noticias/jogos.jpg" alt="Desenvolvimento de Jogos">
                </div>
                <div class="cardContent">
                <h3>Desenvolvimento de Videojogos</h3>
                <p>Será possível ver e jogar as diferentes produções desenvolvidas pelos grupos de formação.
                </p>
                </div>
              </div>
              </a> 
            </div>
        </div>
        <div id="noticias2" class="row collapse justify-content-center">
          <!--O primeiro card deve ser do mesmo nome do x-->
          <div class="cardhidden col-lg-4 col-md-5 col-sm-8">
            <a href="./pages/videojogos.html"> 
              <div class="card noticias">
                <div class="cardimg">
                  <img src="./img/noticias/jogos.jpg" alt="Desenvolvimento de Jogos">
                </div>
                <div class="cardContent">
                <h3>Desenvolvimento de Videojogos</h3>
                <p> Será possível ver e jogar as diferentes produções desenvolvidas pelos grupos de formação.
                </p>
                </div>
              </div>
              </a> 
          </div>
      </div>
      <button id="btncollapse2" type="button" class="btn vermais " data-toggle="collapse" data-target="#noticias2"
      aria-expanded="false" aria-controls="collapseExample">Ver mais</button>
      </div>
    </div>
  </section>
  <section id="conferencia">
    <div class="container-fluid cont">
      <div class="row">
        <div class="col-12 bgfoto2 ">
          <img src="./img/header/conferencia.jpg" alt="Foto sobre a Conferência">
          <h2 class="subtitle">Conferência</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 conteudo">
          <h4 style="text-align: center;">Dia 11 e 12 de Fevereiro poderá assistir às conferências que preparamos para si.
          Veja a seguir a informação sobre os temas,horários e oradores.</h4>
        </div>
      </div>
      <div>
        <div class="row oradores">
          <h2 class="headoradores">Conheça os Oradores</h2>
          <div id="oradores3" class="row justify-content-center">
            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Gisela Oliveira - Blip.png" alt="Oradora do Summit - Blip - Gisele Oliveira">
                </div>
                <h3>Gisela Oliveira</h3>
                <h4>Blip</h4>
                <p>Licenciada em Ciências da Educação e Mestre em Psicologia.
                  Training&Development, Talent Development e Talent Acqusition.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/José Pedro Soares - Financiamento bancario.jpg" alt="Orador do Summit -Montepio- José Pedro Soares">
                </div>
                <h3>José Pedro Soares</h3>
                <h4>Montepio</h4><!--Isso é uma empresa?-->
                <p>Gestor de Clientes Empresas no Departamento Microcrédito com 
                  foco exclusivo nos projetos de investimentos.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img class="fotop" src="./img/oradores/sandra_oliveira People _ International Brand - fabmaq.jpg" alt="Oradora do Summit - FABAMAQ - Sandra Oliveira">
                </div>
                <h3>Sandra Oliveira</h3>
                <h4>FABAMAQ</h4>
                <p>People & International Brand.
                <br>
                People Partner na empresa Fabamaq.
                </p>
              </div>
            </div>
            
            <!--Ultimo card deve ser do nome x-->
            <div class="cardshow col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Luís Ferreira - Birds _ Trees.jpg" alt="Orador Summit - Birds & Trees- Luís Ferreira">
                </div>
                <h3>Luís Ferreira</h3>
                <h4>Birds & Trees</h4>
                <p>Co-founder e CEO na Birds & Trees. MBA com especialização em Marketing. Consultor Especialista em Estratégia e em Marketing, Empreendedor, Marketer.</p>
              </div>
            </div>
          </div>


          
          <div id="todosoradores" class="row collapse justify-content-center">
            <!--O primeiro card deve ser do mesmo nome do x-->
            <div class="cardhidden col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Luís Ferreira - Birds _ Trees.jpg" alt="Orador Summit - Birds & Trees- Luís Ferreira">
                </div>
                <h3>Luís Ferreira</h3>
                <h4>Birds & Trees</h4>
                <p>Co-founder e CEO na Birds & Trees. MBA com especialização em Marketing. Consultor Especialista em Estratégia e em Marketing, Empreendedor, Marketer.</p>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Hugo Matos - ibermagem.jpg" alt="Orador Summit - Ibermagem - Hugo Matos">
                </div>
                <h3>Hugo Matos</h3>
                <h4>Ibermagem</h4>
                <p>Licenciado em Relações Internacionais (Universidade Lusiada-Porto) e 
                  Pós-Graduado Marketing (IPAM-Porto) e Pós Graduado Gestão (Universidade Católica)
                </p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Manuel Teixeira - fotografo.png" alt="Orador Summit - Manuel Texeira">
                </div>
                <h3>Manuel Teixeira</h3>
                <h4 style="font-size: 1em;">ManuelTeixeiraFotografia</h4>
                <p style="margin-top: 10px;">Professor de Fotografia no IPF - Instituto Português de Fotografia | Fotógrafo Certificado Phase One
                </p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img class="fotop" src="./img/oradores/Luis caixinhas - Engenheiro de patentes.jpg" alt="Orador Summit - Luís Caixinhas">
                </div>
                <h3>Luís Caixinhas</h3>
                <h4>Engenheiro de Patentes</h4>
                <p>Luís Caixinhas é Mestre em Engenharia de Produção Industrial pela F.C.T de Lisboa. e Membro da Efetivo da Ordem dos Engenheiros no Colégio de Mecânica</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Gisela Oliveira - Doce segredo.jpg" alt="Oradora Summit - Gisela Oliveira">
                </div>
                <h3>Gisela Oliveira</h3>
                <h4>Fundadora Doce Segredo</h4> 
                <p>Gisela Oliveira, licenciada em Ciências da Nutrição, paixão pela arte dos bolos e dos doces personalizados, abriu uma loja dedicada ao cake design, produtos biológicos e formação</p>
              </div> 
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Ricardo Machado - Diretor Recursos Humanos Altran.jpg" alt="Orador Summit - Ricardo Machado">
                </div>
                <h3>Ricardo Machado</h3>
                <h4>Diretor de Recursos Humanos na Altran.</h4> 
                <p>Está desde 2006 na Altran, começando como System Architect. Está actualmente na direção de Recursos Humanos.</p>
              </div> 
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg">
                  <img src="./img/oradores/Virgilio campos - cozinha do sogro.jpg" alt="Orador Summit - Virgílio Campos">
                </div>
                <h3>Virgílio Campos</h3>
                <h4>Fundador "Cozinha do Sogro"</h4> 
                <p>Depois de trabalhar em diferentes áreas, Virgílio Campos abre em 2019 com o seu sogro o projeto "Cozinha do Sogro".</p>
              </div> 
            </div>


            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg ">
                  <img src="./img/oradores/fernando-fraga.jpg" alt="Orador Summit - Fernando Fraga">
                </div>
                <h3>Fernando Fraga</h3>
                <h4> Empreendedor em série </h4>
                <p> Começou pela abertura de uma papelaria para pagar as propinas. Desde há 4 anos que faz parte da Acredita Portugal.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-8">
              <div class="card orador">
                <div class="cardimg ">
                  <img src="./img/oradores/filipe-cordeiro.png" alt="Orador Summit - Filipe Cordeiro">
                </div>
                <h3>Filipe Cordeiro</h3>
                <h4> Graduado em Economia Internacional </h4>
                <p>Desempenhou várias funções, incluindo consultadoria. Integra a equipa da Acredita Portugal como Diretor de Startups.</p>
              </div>
            </div>

                <div class="col-lg-4 col-md-5 col-sm-8">
                  <div class="card orador">
                    <div class="cardimg ">
                      <img class="" src="./img/oradores/raul-ralha.png" alt="Orador Summit - Raul Ralha">
                    </div>
                    <h3>Raul Ralha</h3>
                    <h4> Membro fundador da Associação Grow uP Gaming </h4>
                    <p> Membro fundador da Associação Grow uP Gaming e tem uma vasta experiência no mundo dos esports
                    </p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-8">
                  <div class="card orador">
                    <div class="cardimg">
                      <img src="./img/oradores/Samuel Soares - Samsys.jpg" alt="Orador SUMMIT - Samuel Soares">
                    </div>
                    <h3>Samuel Soares</h3>
                    <h4>Co-fundador da Samsys</h4>
                    <p> Engenharia Mecânica no ISEP e realizou uma Pós-Graduação em Direção Comercial e Vendas pelo IPAM, autor do livro “O Caminho do Sonhador”, coautor no livro AMA o Marketing, CEO e co-fundador da Samsys</p>
                  </div>
                </div>
          </div>
          <div class="row veroradores">
            <button id="btncollapse3" type="button" class="btn vermais " data-toggle="collapse" data-target="#todosoradores"
              aria-expanded="false" aria-controls="collapseExample">Ver mais</button>
          </div>
        </div>
        <div id="cronograma" class="row">
          <h2>Cronograma</h2>
          <div class="row horarios">
           
            <div id="dia11" class="col-lg-6 col-sm-12">
               
                <div class="row cardHorario">
                   
                    <div class="col-md-3 offset-md-1 col-4">
                       
                        <div class="horas">
                            <p>9:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>10:00</p>
                        </div>
                       
                        <div class="horas">
                            <p>10:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>11:00</p>
                        </div>
                       
                        <div class="horas">
                            <p>11:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>12:00</p>
                        </div>
                       
                        <div class="horasVazio">
                            <p><br/></p>
                        </div>
                       
                        <div class="horas">
                            <p>14:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>15:00</p>
                        </div>
                       
                        <div class="horas">
                            <p>15:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>16:00</p>
                        </div>
                       
                        <div class="horasVazio">
                            <p><br/></p>
                        </div>
                   
                    </div><!-- fim da coluna das horas 11-02 -->
                    <div class="col-md-8 col-8">
                       
                        <h3>Dia 11</h3>
                       
                        <div class="cardAssunto">
                            <h4>IT LOGIC</h4>
                            <h5>Ana Sousa</h5>
                            <p>O papel da informática na indústria moderna.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>We Create You</h4>
                            <h5>Orlanda Barbosa</h5>
                            <p>A importância da consultoria nas empresas.</p>
                        </div>
                       
                        <div class="cardAssuntoCinza">
                            <h4>Coffee Break</h4>
                            <p>Pausa para café.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Pixel</h4>
                            <h5>João Santos</h5>
                            <p>Demonstração – Audiovisual (Drone).</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Ibermagem</h4>
                            <h5>Hugo Matos</h5>
                            <p>A inovação tecnológica na área audiovisual.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Phase One</h4>
                            <h5>Manuel Teixeira</h5>
                            <p>Workshop de fotografia de Alta Joalharia com Phase One.</p>
                        </div>
                       
                        <div class="cardAssuntoCinza">
                            <h4>Moderador</h4>
                            <h5>Pedro Cabral</h5>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Samsys</h4>
                            <h5>Samuel Soares</h5>
                            <p>Hardskills/Softskills – O modelo Samsys.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Altran</h4>
                            <h5>Ricardo Machado</h5>
                            <p>Requalificação profissional - Academia Altran.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Blip</h4>
                            <h5>Gisela Oliveira</h5>
                            <p>O recrutamento - Dificuldades e Oportunidades.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>FABAMAQ</h4>
                            <h5>Sandra Oliveira</h5>
                            <p>A experiência FABAMAQ - Requalificação profissional.</p>
                        </div>
                       
                        <div class="cardAssuntoCinza">
                            <h4>Moderador</h4>
                            <h5>Nuno Sá</h5>
                        </div>
                       
                        <!-- <div class="cardAssunto">
                        <h4>A importância da consultoria nas empresas</h4>
                        <h6>Wecreateyou</h6>
                        </div>

                        <div class="cardAssunto">
                        <h4>Apresentação Ibermagem</h4>
                        <h5>Ibermagem - <span>Hugo Matos</span></h5>
                        <p>27 anos de História, Know-how e Proximidade com Cliente, Destaque no mercado pelas marcas
                        representadas, Inovação e Qualidade</p>
                        </div> -->
                   
                    </div><!-- fim da coluna dos oradores 11-02 -->
               
                </div><!-- /.row .cardHorario -->
           
            </div><!-- /#dia11 -->
            <div id="dia12" class="col-lg-6 col-sm-12">
               
                <div class="row cardHorario">
                   
                    <div class="col-md-3 offset-md-1 col-4">
                       
                        <div class="horas">
                            <p>10:00</p>
                        </div>
                       
                        <div class="horas" style="margin-top: 9rem;">
                            <p>10:30</p>
                        </div>
                       
                        <div class="horasVazio">
                            <p><br/></p>
                        </div>
                       
                        <div class="horas" style="margin-top: 7rem;">
                            <p>14:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>15:00</p>
                        </div>
                       
                        <div class="horas">
                            <p>15:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>16:30</p>
                        </div>
                       
                        <div class="horas">
                            <p>17:00</p>
                        </div>
                       
                        <div class="horasVazio">
                            <p>?</p>
                        </div>
                   
                    </div><!-- fim da coluna das horas 12-02 -->
                   
                    <div class="col-md-8 col-8">
                       
                        <h3>Dia 12</h3>
                       
                        <div class="cardAssunto">
                            <h4>Grow uP eSports</h4>
                            <h5>Raul Ralha</h5>
                            <p>As oportunidades e dificuldades atuais nos eSports.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Ground Control</h4>
                            <h5>Rui Guedes</h5>
                            <p>A evolução e os desafios da Indústria dos Videojogos.</p>
                        </div>
                       
                        <div class="cardAssuntoCinza">
                            <h4>Moderador</h4>
                            <h5>Nuno Sá</h5>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Acredita Portugal</h4>
                            <h5>Fernando Fraga</h5><h5>Filipe Cordeiro</h5>
                            <p>A Acredita Portugal.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Empreendedores</h4>
                            <h5>Gisela Oliveira e Virgílio Campos</h5>
                            <p>Casos práticos de criação do próprio Negócio.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Inventa International</h4>
                            <h5>Luís Caixinhas</h5>
                            <p>Propriedade Intelectual.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Montepio</h4>
                            <h5>José Soares</h5>
                            <p>Projeto Montepio – financiamento e microcrédito.</p>
                        </div>
                       
                        <div class="cardAssunto">
                            <h4>Birds &amp; Trees</h4>
                            <h5>Luís Ferreira</h5>
                            <p>Consultoria na área do empreendedorismo.</p>
                        </div>
                       
                        <div class="cardAssuntoCinza">
                            <h4>Moderadora</h4>
                            <h5>Fernanda Aguiar</h5>
                        </div>
                   
                    </div><!-- fim da coluna dos oradores 12-02 -->
               
                </div><!-- /.cardHorario -->
           
            </div><!-- /.dia12 -->
       
          </div><!-- /.row .horarios -->     
        </div><!-- /#cronograma /.row -->
       
        </div><!-- /#cronograma /.row -->
        <div id="logosempresas">

        </div>
      </div>
  </section>
  <section id="exposicao">
    <div class="container-fluid cont">
      <div class="row">
        <div class="col-12 bgfoto2">
          <img src="./img/header/exposicao.jpg" alt="Foto sobre a Conferência">
          <h2 class="subtitle">Exposição</h2>
        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="row margin0">
        <div class="col-12 conteudo">
          <h4 style="text-align: center;">Onde poderá conhecer e experienciar o contacto com áreas ligadas à tecnologia e inovação. </h4>
        </div>
      </div>
      
      <div class="exposicao_mapa">
        <h2 class="headstands">Salas de Exposição</h2>
      
      <div class="exposicao_stand">
             <!--1o lado-->

          <div class="stand-1 stand pop" data-toggle="popover" title="ANIMAÇÃO 2D & 3D" data-content="Modelação Projetos de animação" >
            <i class="fas fa-cubes"></i>  ANIMAÇÃO 2D & 3D
          </div>

          <div class="stand-2 stand pop" data-toggle="popover" title="VIDEOJOGOS" data-content="Desenvolvimento de videojogos;
          Experiências com Jogos 2D & 3D
          Jogos PS4
          Arcade
          ">
            <i class="fas fa-gamepad"></i>
            VIDEOJOGOS      
          </div>

          <div class="stand-3 stand pop" data-toggle="popover" title="IMPRESSÃO 3D" data-content="Experiência com impressoras 3D – preparação e impressão">
            <i class="fas fa-print"></i> IMPRESSÃO 3D

          </div>

          <div class="stand-4 stand pop" data-toggle="popover" title="AUDIOVISUAL" data-content="Experiência de captura de imagem em studio e edição de fotografia/vídeo">
            <i class="fas fa-video"></i>  AUDIOVISUAL          
          </div>

          <div class="stand-5 stand pop" data-toggle="popover" title="REPARAÇÃO DE HARDWARE" data-content="Reparação de hardware em contexto real">
            <i class="fas fa-laptop-medical"></i> REPARAÇÃO DE HARDWARE 
          </div>

          <div class="stand-6 stand pop"data-toggle="popover" title="ARDUINO" data-content="Programação em Arduino Demonstrações de domótica e robótica">
            ARDUINO   
          </div>

          <div class="stand-7 stand pop"data-toggle="popover" title="FRONT / BACK END DEVELOPER " data-content="Desenvolvimento de website(programação e design)" >
            </i>FRONT END DEVELOPER - 
            MKT - DESIGN
          </div>

            <!--2o lado-->

          <div class="stand-8 stand pop" data-toggle="popover" title="PROGRAMAÇAO MOBILE" data-content="Aplicações para Android desenvolvidas ">
            <i class="fas fa-mobile-alt"></i>  PROGRAMAÇÃO MOBILE 
            </div>

          <div class="stand-9 stand pop" data-toggle="popover" title="LOVE MONDAYS" data-content="Apoio na realização de Currículos criativos utilizando a ferramenta Canva">
            LOVE MONDAYS 
            CV’S CRIATIVOS
          </div>

          <div class="stand-10 stand pop"data-toggle="popover" title="ALTRAN" data-content="Desenvolvimento de produtos e soluções tecnológicas inovadoras">
            ALTRAN
          </div>

          <div class="stand-11 stand">
            <i class="fas fa-sign-out-alt"></i> ENTRADA
          </div>

          <div class="stand-12 stand pop"data-toggle="popover" title="GOTYKAGE - FABAMAQ" data-content="Marketing Digital - Desenvolvimento de jogos de casino">
              GOTYKAGE - FABAMAQ
          </div>

          <div class="stand-13 stand">
              <i class="fas fa-restroom"></i> &nbsp;&nbsp;  WC
          </div>

          <div class="stand-14 stand">
            <i class="fas fa-coffee"></i>  COFFEE BREAK
          </div>

               <!--SPEED RECRUITMENT-->
          
        
      </div>
      <!-- <img src="./img/exposicao_mapa.png" alt="Mapa da Exposição do evento"> -->
      
      <div class="row justify-content-center mt-3">
      <div class="speed_mapa col-8">
          <div class="col-12 speed">
            <i class="fas fa-comments"></i> SPEED RECRUITMENT        
          </div>
        </div>
      </div>
    
     
    </div> 

    </div>
  </section>
  <section id="speedrecruitment">
    <div class="container-fluid cont">
      <div class="row">
        <div class="col-12 bgfoto2">
          <img src="./img/header/speedrecruitment.jpg" alt="Foto sobre o Speed Recruitment">
          <h2 class="subtitle">Speed Recruitment</h2>
        </div>
      </div>
    </div>
    <div id="recruitment" class="container">
      <div class="row">
        <div class="col-12 conteudo">
          <h3>Venha preparado/a..</h3>
          <br>
          <h6>O Speed Recruitment vai decorrer no dia 11 de fevereiro, traga o seu curriculum vitae e faça uma candidatura espontânea junto de algumas empresas da área
          tecnológica.</h6>
          <br>
        </div>
      </div>
      <div id="faq" class="row">
        <div class="col-12">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header faq" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                <div class="mb-0">
                  <div class="titulo_pergunta">
                    <h5>Como deve ser o meu currículo?</h5>
                    <img src="./img/svg/downArrow.svg" alt="Click e veja a resposta">
                  </div>
                </div>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <a href="https://www.economias.pt/6-modelos-de-curriculo-que-lhe-podem-ser-uteis/"><em>"Ter um
                      currículo bem escrito é determinante para conseguir a atenção dos recrutadores e para ser chamado
                      a uma entrevista de emprego. Além de bem escrito, o CV deve ser visualmente atrativo."</em></a>
                  <br>
                  <br>
                  <ul>
                    <li><a href="https://europass.cedefop.europa.eu/editors/pt/cv/compose">Europass</a></li>
                    <li><a href="https://templates.office.com/pt-pt/curr%c3%adculo-tm00002021">Currículo básico do
                        Office</a></li>
                    <li><a href="https://templates.office.com/pt-pt/curr%c3%adculo-design-funcional-tm00002023">Modelo
                        design do Office</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="preInscricao">
    <div class="container-fluid cont">
      <div class="row">
        <div class="col-12 bgfoto2">
          <img src="./img/header/register.jpg" alt="Foto sobre a Pré Inscrição">
          <h2 class="subtitle">Pré-inscrição</h2>
        </div>
      </div>
    </div>
    <div id="inscricao" class="container">
      <div class="row margin0">
        <div class="col-12">
          <h2>Faça a sua Pré-inscrição!</h2>
        </div>
      </div>
      <div class="row margin0">
        <div class="col-md-4 col-sm-12 textoForm">
        <p class="descricao_formulario">Faça o pré-registo para assistir às conferências do dia 11 e 12 de fevereiro – VAGAS LIMITADAS
            Vai receber um email de confirmação da sua inscrição com um QR Code que deve apresentar no dia do evento para validação da entrada.<br><br>
            Duvídas e informações:<br><a style="color: blue;" href="mailto:sfgaiasummit@gmail.com" target="_blank">sfgaiasummit@gmail.com</a><br></p>
        </div>
        <div class="col-md-8 col-sm-12">
                                   
          <form class="needs-validation form-group" method="post" action="./api/registo/create.php" target="registo_msg" novalidate>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="nome" id="nome" value="" required placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="apelido" id="apelido" value="" required placeholder="Apelido">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="email" class="form-control" name="email" id="email" value="" required placeholder="@E-mail">
                <div class="invalid-feedback">
                  É necessário colocar um e-mail válido.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" class="form-control" name="telefone" id="telefone" value="" required placeholder="Telefone/Telemóvel">
                <div class="invalid-feedback">
                  É necessário colocar um número de telefone válido, ex: 930899911.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <select class="custom-select" name="categoria[]" id="categoria" multiple="multiple" required>
                  <option selected disabled value="">Escolhe a tua area de interesse </option>
                    <?php 
                        include_once './api/config/database.php';
                        $db = New Database();

                        // get database connection
                        $con = mysqli_connect($db->host,$db->username,$db->password,$db->db_name);

                        if (mysqli_connect_errno()) {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          exit();
                        }
                        $sql = mysqli_query($con, "SELECT id, name FROM interest");

                        while ($row = $sql->fetch_assoc()){
                            $id_categoria=  $row["id"] ;
                            $nome_categoria =  $row["name"] ;

                            echo '<option value="' . $id_categoria  . '">' . $nome_categoria . '</option>';
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                  Por favor, selecione uma area de interesse.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-9 col-md-8 col-sm-7">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" value="1" name="consentimento" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Li e aceito o Regulamento Geral de Proteção de Dados <a href="https://iefponline.iefp.pt/IEFP/navegacao/privacidade2.jsp" style="color: blue;">(RGPD)</a>
                  </label>
                  <div class="invalid-feedback">
                    Deve aceitar o Regulamento Geral de Proteção de Dados (RGPD).
                  </div>
                </div>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-5">
                <button class="btn btn-block chamada" type="submit">Pré-Registo</button>
              </div>
            </div>
          </form>
      
          <iframe class="margin0" style="width: 100%;" src="" frameborder="0" name="registo_msg" style="height:100px; width:680px;">
                
          </iframe>

        </div>

      </div>
      <div class="row mapa">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.9686603240402!2d-8.623155543538708!3d41.132580638467864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246526a80a8afb%3A0x35d24fbad9e4881b!2sR.%20Valente%20Perfeito%20322%2C%204400-123%20Vila%20Nova%20de%20Gaia!5e0!3m2!1sen!2spt!4v1579967065772!5m2!1sen!2spt"
          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
  <section id="footer" class="pgfinal">
    <div class="container-fluid">

      <div class="row">
        <div id="mapaDoSite" class="col-md-3 col-sm-6 col-6">
          <h5>Mapa do site</h5>
          <ul>
            <li><a href="#oevento">Home</a></li>
            <li><a href="#noticias">Notícias</a></li>
            <li><a href="#conferencia">Conferência</a></li>
            <li><a href="#exposicao">Exposição</a></li>
            <li><a href="#speedrecruitment">Speed Recruitment</a></li>
            <li><a href="#preInscricao">Pré-inscrição</a></li>
          </ul>
        </div>
        <div id="info" class="col-md-4 col-sm-6 col-6">
          <h5>Serviço de Formação Profissional de Vila Nova de Gaia</h5>
          <p>Rua Valente Perfeito, 322<br>
            VILA NOVA DE GAIA<br>
            4400-330 Santa Marinha<br>
            +351 22 0989540</p>
        </div>

        <div id="redesSociais" class="col-md-2 col-sm-6 col-4">
            <h5>Rede Social</h5>
          <a href="https://m.facebook.com/events/812408069181947"><img src="./img/svg/footer/facebookFooter.svg" alt="Facebook do evento" style="max-width: 50px"></a>
        </div>


      </div>
<hr style="border-color: white"; >

<div id="logosFooter" class="row">
  <div class="col-lg-12">
    <a href="http://www.pofc.qren.pt/" target="_blank" ><img src="./img/svg/footer/footer1.svg" alt="COMPETE"></a>
    <a href="https://europa.eu/" target="_blank"><img class="logop" src="./img/svg/footer/footer2.svg" alt="Uniaao Europeia"></a>
    <a href="https://ec.europa.eu/eures/public/pt/homepage" target="_blank"><img class="logop" src="./img/svg/footer/footer3.svg" alt="EURES"></a>
    <a href="https://www.portugal.gov.pt/"target="_blank"><img src="./img/svg/footer/footer4.svg" alt="República Portuguesa"></a>
    <a href="https://eportugal.gov.pt/"target="_blank"><img src="./img/svg/footer/footer5.svg" alt="E-Portugal"></a>
    <a href="https://worldskillsportugal.iefp.pt/"target="_blank"><img src="./img/svg/footer/footer6.svg" alt="World Skills"></a>
    <a href="https://www.portugal2020.pt/"target="_blank"><img src="./img/svg/footer/footer7.svg" alt="Portugal 2020"></a>
    <a href="https://www.garantiajovem.pt/"target="_blank"><img src="./img/svg/footer/footer8.svg" alt="Garantia Jovem"></a>
    <a href="http://www.qren.pt/np4/home"target="_blank"><img src="./img/svg/footer/footer9.svg" alt="QREN"></a>
  </div>
</div>
    </div>
  </section>

  <div class="container-fluid">
    <div class="row contador">
      <div class="container">
        <div class="row">
          <div class="contadorDiv col-lg-3 col-md-3 col-sm-3">
            <p id="resultado">O evento começa em: </p>
          </div>
          <div class="contadorDiv col-lg-6 col-md-6 col-sm-6">
            <div class="relogio d-flex justify-content-center">
              <div class="bgnum">
                <p>Dias</p>
                <p id="dias" class="num"></p>
              </div>
              <div class="bgnum">
                <p>Horas</p>
                <p id="horas" class="num"></p>
              </div>
              <div class="bgnum">
                <p>Minutos</p>
                <p id="minutos" class="num"></p>
              </div>
              <div class="bgnum">
                <p>Segundos</p>
                <p id="segundos" class="num"></p>
              </div>
            </div>
          </div>
          <div class="contadorDiv col-lg-3 col-md-3 col-sm-3 ">
            <a href="#"><button class="chamada">Pré-inscrição</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="./js/sitejs.js"></script>
</body>
</html>