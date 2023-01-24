<?php

?>
<!DOCTYPE html>
<html lang="pt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Forca</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="forca.css">
</head>
<body>
<div id="modalid" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Palavra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Indique a palavra</p>
        <input id="adivinhar" type="text" class="form-control" name="palavra">
      </div>
      <div class="modal-footer">
        <button type="button" onclick="enviarpalavra();" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>
    <div class="row">
        <div class="col-2 d-flex justify-content-center">
        <div class="pixHolder">
            <img id="enforcado" src="imagens/player.png">
            </div>
        </div>
        <div class="col-8">
         <div class="">
            <div class="container">
                <div class="letters-wrapper">
                    <ul id="letras" class="letters">
                        
                    </ul>
                </div>
                <div class="for-loader">
                    <div class="enable">
                            <div class="alphabet-wrapper ">
                                <ul class="alfabeto">
                                    <li id="a" class="listaletras">A</li>
                                    <li id="b" class="listaletras">B</li>
                                    <li id="c" class="listaletras">C</li>
                                    <li id="d" class="listaletras">D</li>
                                    <li id="e" class="listaletras">E</li>
                                    <li id="f" class="listaletras">F</li>
                                    <li id="g" class="listaletras">G</li>
                                    <li id="h" class="listaletras">H</li>
                                    <li id="i" class="listaletras">I</li>
                                    <li id="j" class="listaletras">J</li>
                                    <li id="k" class="listaletras">K</li>
                                    <li id="l" class="listaletras">L</li>
                                    <li id="m" class="listaletras">M</li>
                                    <li id="n" class="listaletras">N</li>
                                    <li id="o" class="listaletras">O</li>
                                    <li id="p" class="listaletras">P</li>
                                    <li id="q" class="listaletras">Q</li>
                                    <li id="r" class="listaletras">R</li>
                                    <li id="s" class="listaletras">S</li>
                                    <li id="t" class="listaletras">T</li>
                                    <li id="u" class="listaletras">U</li>
                                    <li id="v" class="listaletras">V</li>
                                    <li id="w" class="listaletras">W</li>
                                    <li id="x" class="listaletras">X</li>
                                    <li id="y" class="listaletras">Y</li>
                                    <li id="z" class="listaletras">Z</li>
                                </ul>
                            </div>
                        </div>
                        </div>
       </div>
       <button id="restart" disabled onclick="novapalavra()">Começar</button>
   </div>
</div> 
<div class="col-2 d-flex justify-content-center">
<div class="pixHolder">
            <img id="oponente" src="imagens/oponente.png">
            </div>
</div>

</div>  
    <!-- Script -->
    <script src="jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="js/notify.min.js"></script>
<script>

</script>
</body>
</html>