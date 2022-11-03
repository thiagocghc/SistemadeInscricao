<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="../Components/Styles/resets.css" />
    <link rel="stylesheet" href="../Components/NavBar/navBarStyle.css" />
    <link rel="stylesheet" href="../Components/CampoAzul/campoAzul.css" />
    <link rel="stylesheet" href="../Components/Styles/waveStyle.css" />
    <link rel="stylesheet" href="../Components/Cubo3D/cubo3DStyle.css" />
    <link rel="stylesheet" href="../Components/Card/cardStyle.css" />
    <link rel="stylesheet" href="../Components/Modal/modalStyle.css">
    <link rel="stylesheet" href="../Components/CardGrande/cardGrandeStyle.css">
    <link rel="stylesheet" href="../Components/ModalUnico/avisoStyle.css">
    <link rel="stylesheet" href="../Components/CardDosDias/CardsDosDias.css">
    <link rel="stylesheet" href="../Components/CardDosDias/media.css">



    <!-- Scrips -->
    <script src="./script.js" defer></script>

    <script src="../Components/Modal/modalScript.js" defer></script>
    <script src="./Javascript/loadData.js" defer type="module"></script>
    <script src="./onPageLoad.js" defer></script>

    <title>HUB INNOVATION</title>
</head>

<body>
    <div id="containnerTeste">

        <section id="containnerModal"></section>


        <header id="header">
            <nav class="navigationBar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list iconeMenu" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
                <div class="menu">
                    <button class="btnNav" type="button" id="btnHome" onClick="document.getElementById('campoAzul').scrollIntoView();">HOME</button>
                    <button class="btnNav" type="button" id="btnSobreEvento" onClick="document.getElementById('sessaoDosCards').scrollIntoView();">PROGRAMAÇÃO</button>
                    <button class="btnNav" type="button" id="btnPalestrantes" onClick="document.getElementById('apoiadores').scrollIntoView();">APOIADORES</button>
                </div>
            </nav>
        </header>



        <section id="campoAzul">
            <div id="campoDo3D">
                <div class="containnerCubo">
                    <div class="box l1c1">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l1c2">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l1c3">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l1c4">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l1c5">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <!-- </div> -->


                    <!-- <div class="linha l2"> -->
                    <div class="box l2c1">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l2c2">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l2c3">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l2c4">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l2c5">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <!-- </div> -->


                    <!-- <div class="linha l3" > -->
                    <div class="box l3c1">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l3c2">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l3c3">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l3c4">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l3c5">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <!-- </div> -->


                    <!-- <div class="linha l4"> -->
                    <div class="box l4c1">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l4c2">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l4c3">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l4c4">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right"></div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l4c5">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right"></div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="linha l5"> -->
                    <div class="box l5c1">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right">Direita</div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l5c2">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right">Direita</div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l5c3">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right">Direita</div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                    <div class="box l5c4">
                        <div class="card mais50 esconde" id="front"></div>
                        <div class="card menos50 esconde" id="back"></div>
                        <div class="card menos90 esconde" id="left"></div>
                        <div class="card mais90 esconde" id="right">Direita</div>
                        <div class="card mais90 esconde" id="top"></div>
                        <div class="card menos90 esconde" id="bottom"></div>
                    </div>
                    <div class="box l5c5">
                        <div class="card mais50" id="front"></div>
                        <div class="card menos50" id="back"></div>
                        <div class="card menos90" id="left"></div>
                        <div class="card mais90" id="right">Direita</div>
                        <div class="card mais90" id="top"></div>
                        <div class="card menos90" id="bottom"></div>
                    </div>
                </div>

            </div>

            <div class="text">
                <div class="textImpact">
                    <img src="../Assets/Imgs/logo.png" alt="Logo">
                </div>

                <div class="textDatePlace">

                    <div class="textDisplayRow">
                        <h5>DE&#160;</h5>
                        <h4 id="textBlue">25&#160;</h4>
                        <h5>À&#160;</h5>
                        <h4 id="textBlue">26&#160;</h4>
                        <h5>DE&#160;</h5>
                        <h4 id="textBlue">OUTUBRO&#160;</h4>
                        <h5>DE&#160;</h5>
                        <h4 id="textBlue">2022&#160;</h4>
                    </div>
                    <div class="textDisplayRow">
                        <h5>CONFIRA NOSSA&#160;</h5>
                        <a href="#sessaoDosCards">
                            <h4 id="textBlue">PROGRAMAÇÃO</h4>
                        </a>
                    </div>

                    <h6>R. DO PARQUE N°75 - CAMPO GRANDE, MS</h6> <br> <br>
                    <h6 id="gratis">EVENTO PRESENCIAL E GRATUITO</h5>
                </div>
            </div>

        </section>



        <!-- Cubinhos de efeitos no site -->
        <div class="cubinhosEfeitos kf1 orange" id="ce1"></div>
        <div class="cubinhosEfeitos kf2" id="ce2"></div>
        <div class="cubinhosEfeitos kf3" id="ce3"></div>
        <div class="cubinhosEfeitos kf2" id="ce4"></div>
        <div class="cubinhosEfeitos kf1" id="ce5"></div>
        <div class="cubinhosEfeitos kf3 orange" id="ce6"></div>
        <div class="cubinhosEfeitos kf2" id="ce7"></div>
        <div class="cubinhosEfeitos kf3" id="ce8"></div>
        <div class="cubinhosEfeitos kf1" id="ce9"></div>
        <div class="cubinhosEfeitos kf2" id="ce10"></div>
        <div class="cubinhosEfeitos kf3 orange" id="ce11"></div>
        <div class="cubinhosEfeitos kf3" id="ce12"></div>
        <div class="cubinhosEfeitos kf1 orange" id="ce13"></div>
        <div class="cubinhosEfeitos kf3" id="ce14"></div>
        <div class="cubinhosEfeitos kf2" id="ce15"></div>
        <div class="cubinhosEfeitos kf1 orange" id="ce16"></div>
        <!-- Cubinhos de efeitos no site -->



        <!-- Setinha lateral de scroll -->
        <div class="setinhaContainner">
            <div class="linhaCima"></div>
            <i class="material-symbols-outlined" id="setinha">
          keyboard_double_arrow_down
        </i>
        </div>
        <!-- Setinha lateral de scroll -->



        <!-- Sessao dos cards -->
        <div id="sessaoDosCards">
            <div id="estiloTitulo">
                <div></div>
                <h2 id="tituloInsCon">Programação e Conexões</h2>
                <div></div>
            </div>
            <!-- <p class="subTitulo">Veja a Programação e não perca tempo. <strong>Clique no Dia e Horário Desejado e Saiba Mais</strong>.</p>
        <p class="textoAzul">Inscreva-se!</p> -->

            <section class="containenerDeCardsDias">
                <div class="containerCard">
                    <div class="boxCard">
                        <div class="contentCard">
                            <h2>25</h2>
                            <br><br>
                            <h3>19:00 HRS</h3>
                            <p>PALESTRAS
                            </p>
                            <a href="../Components/Pages/Programacao25_1.php">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="boxCard">
                        <div class="contentCard">
                            <h2>25</h2>
                            <br><br>
                            <h3>20:30 HRS</h3>
                            <p>PALESTRAS
                            </p>
                            <a href="../Components/Pages/Programacao25_2.php">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="boxCard">
                        <div class="contentCard">
                            <h2>26</h2>
                            <br><br>
                            <h3>13:00 HRS</h3>
                            <p>WORKSHOPS
                            </p>
                            <a href="../Components/Pages/Programacao26_1.php">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="boxCard">
                        <div class="contentCard">
                            <h2>26</h2>
                            <br><br>
                            <h3>19:00 HRS</h3>
                            <p>WORKSHOPS
                            </p>
                            <a href="../Components/Pages/Programacao26_2.php">Saiba Mais</a>
                        </div>
                    </div>


                </div>

            </section>

        </div>
        <!-- Sessao dos cards -->

        <!-- Organizacao -->
        <section id="organizacao">
            <div id="seguraTitulo">
                <div class="linhaTitulo"></div>
                <h2 id="tituloOrganizacao">Organização</h2>
                <div class="linhaTitulo"></div>
            </div>

            <div id="seguraIMG">
                <img src="../Assets/Imgs/LogosOrganizacao/Logo Branca Fábrica de Software.png" alt=" " class="organizacao " />
                <img src="../Assets/Imgs/LogosOrganizacao/Logo Hub Negativo.png" alt=" " class="organizacao " />
                <img src="../Assets/Imgs/LogosOrganizacao/logoFecomercionegativo.png" alt=" " class="organizacao " />
            </div>
        </section>
        <!-- Organizacao -->






        <!-- Apoiadores -->
        <section id="apoiadores">
            <div id="seguraTitulo">
                <div id="linhaTitulo"></div>
                <h2 id="tituloApoiadores">Apoiadores</h2>
                <div id="linhaTitulo"></div>
            </div>

            <div id="seguraApoiadores">
                <!-- 2 -->
                <div class="ApoiadoresLogos">
                    <img src="../Assets/Imgs/LogoApoiadores/velozes.png" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/logo01.svg " alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/logo04.png " alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/hard_engage.svg" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/ambiental.png" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/BDM-DIGITAL-LIVRE-PRETO.png" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/holistic.png" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/Ro Barros.jpg" alt=" " class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/unisaude.png" alt=" " class="imgApoiador">
		    <img src="../Assets/Imgs/LogoApoiadores/wizzard.jpg" alt=" " class="imgApoiador">
		    <img src="../Assets/Imgs/LogoApoiadores/AZ.jfif" alt=" "  class="imgApoiador">
		    <img src="../Assets/Imgs/LogoApoiadores/max.jpg" alt=" "  class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/ufms.jpg" alt=" "  class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/ifms.jpg" alt=" "  class="imgApoiador">
                    <img src="../Assets/Imgs/LogoApoiadores/ucdb.jpg" alt=" "  class="imgApoiador">
		 <img src="../Assets/Imgs/LogoApoiadores/djan.jpeg" alt=" "  class="imgApoiador">


                </div>
            </div>




        </section>
        <!-- Apoiadores -->





        <!-- Footer -->
        <footer id="footer ">
            <div class="seguraCampos ">
                <div class="camposFooter ">
                    <img src="../Assets/Imgs/LogosOrganizacao/Logo Hub Negativo.png " alt=" " class="organizacao ">
                </div>

                <div class="camposFooter ">
                    <legend>Siga-nos</legend>
                    <div>
                        <a href="https://instagram.com/senachubacademy?igshid=YmMyMTA2M2Y=" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg>
                        </a>


                    </div>
                </div>

                <div class="camposFooter ">
                    <legend>Contate-nos</legend>
                    <a href="https://api.whatsapp.com/send?phone=556799492638" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                        </svg>
                    </a>

                </div>
            </div>


            <legend class="legendaFooter ">Fábrica de Software | <strong id="cComercial ">&#169;</strong> 2022 - HUB INNOVATION</legend>
        </footer>
        <!-- Footer -->


        <!-- sec do TETRIS -->
        <section id="seguraTetris ">
            <div class="separaCubinhos " id="separacaoEsq ">
                <div class="cubTetris ce1 ce l4 a1 "></div>
                <div class="cubTetris ce2 ce a7 "></div>
                <div class="cubTetris ce3 ce a3 "></div>
                <div class="cubTetris ce4 ce a1 "></div>
                <div class="cubTetris ce5 ce a9 "></div>
                <div class="cubTetris ce6 ce a5 "></div>
                <div class="cubTetris ce7 ce a10 "></div>
                <div class="cubTetris ce8 ce a2 "></div>
                <div class="cubTetris ce9 ce a6 "></div>
                <div class="cubTetris ce10 ce a4 "></div>
                <div class="cubTetris ce11 ce l2 a1 "></div>
                <div class="cubTetris ce12 ce l2 a7 "></div>
                <div class="cubTetris ce13 ce l3 a5 "></div>
                <div class="cubTetris ce14 ce l1 a10 "></div>
                <div class="cubTetris ce15 ce l2 a3 "></div>
                <div class="cubTetris ce16 ce l2 a9 "></div>
                <div class="cubTetris ce17 ce l5 a6 "></div>
                <div class="cubTetris ce18 ce l6 a1 "></div>
                <div class="cubTetris ce19 ce l6 a8 "></div>
                <div class="cubTetris ce20 ce l4 a4 "></div>
                <div class="cubTetris ce21 ce l3 a7 "></div>
                <div class="cubTetris ce22 ce l5 a2 "></div>
                <div class="cubTetris ce23 ce l3 a5 "></div>
                <div class="cubTetris ce24 ce l4 a3 "></div>
                <div class="cubTetris ce25 ce l5 a10 "></div>
                <div class="cubTetris ce26 ce l3 a8 "></div>
                <div class="cubTetris ce27 ce l2 a6 "></div>
                <div class="cubTetris ce28 ce l1 a1 "></div>

            </div>

            <div class="separaCubinhos " id="separacaoMeio ">
                <div class="cubTetris cm1 cm a5 "></div>
                <div class="cubTetris cm2 cm a7 "></div>
                <div class="cubTetris cm3 cm a1 "></div>
                <div class="cubTetris cm4 cm a10 "></div>
                <div class="cubTetris cm5 cm a4 "></div>
                <div class="cubTetris cm6 cm a8 "></div>
                <div class="cubTetris cm7 cm a2 "></div>
                <div class="cubTetris cm8 cm a3 "></div>
                <div class="cubTetris cm9 cm a10 "></div>
                <div class="cubTetris cm10 cm a1 "></div>
            </div>

            <div class="separaCubinhos " id="separacaoDir ">
                <div class="cubTetris cd1 cd l8 a7 "></div>
                <div class="cubTetris cd2 cd l5 a1 "></div>
                <div class="cubTetris cd3 cd a9 "></div>
                <div class="cubTetris cd4 cd a4 "></div>
                <div class="cubTetris cd5 cd a5 "></div>
                <div class="cubTetris cd6 cd l1 a8 "></div>
                <div class="cubTetris cd7 cd l1 a1 "></div>
                <div class="cubTetris cd8 cd a10 "></div>
                <div class="cubTetris cd9 cd a5 "></div>
                <div class="cubTetris cd10 cd a2 "></div>
                <div class="cubTetris cd11 cd a7 "></div>
                <div class="cubTetris cd12 cd a10 "></div>
                <div class="cubTetris cd13 cd a4 "></div>
                <div class="cubTetris cd14 cd l3 a6 "></div>
                <div class="cubTetris cd15 cd l3 a2 "></div>
                <div class="cubTetris cd16 cd l2 a5 "></div>
                <div class="cubTetris cd17 cd l4 a9 "></div>
                <div class="cubTetris cd18 cd l7 a1 "></div>
                <div class="cubTetris cd19 cd l4 a10 "></div>
                <div class="cubTetris cd20 cd l2 a8 "></div>
                <div class="cubTetris cd21 cd l5 a2 "></div>
                <div class="cubTetris cd22 cd l2 a4 "></div>
                <div class="cubTetris cd23 cd l6 a7 "></div>
                <div class="cubTetris cd24 cd l4 a1 "></div>
                <div class="cubTetris cd25 cd l3 a10 "></div>
                <div class="cubTetris cd26 cd l2 a8 "></div>
                <div class="cubTetris cd27 cd l1 a5 "></div>
                <div class="cubTetris cd28 cd l6 a1 "></div>
                <div class="cubTetris cd29 cd l2 a4 "></div>
                <div class="cubTetris cd30 cd l9 a9 "></div>
                <div class="cubTetris cd31 cd l5 a6 "></div>

            </div>
        </section>
        <!-- sec do TETRIS -->
        <div id="linhaBase "></div>
    </div>
</body>

</html>
