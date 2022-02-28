<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="CSS/all.css">

    <title>Feed de publicações</title>
</head>

<body>
    <!--Modal Realizar Publicação var = .container-modal  -->
    <div class="container-modal active-modal">
        <div class="modal-screen">
            <div id="title-modal">
                <div>
                    <span class="tag-title">#</span>
                    <span>Publicando sua tarefa</span>
                </div>
                <span id="x" close>X</span>
            </div>
            <div>
                
                <form method="post" action="PHP/modal.php" id="form-publiq">
                    <div class="container-ipt">
                        <label for="">Whatsapp</label>
                        <div class="input-group1">
                            <input class="ipt-1 ipts" type="text" name="prefix" value="55" placeholder="+55">
                            <input class="ipt-2" type="text" name="contact" placeholder="(99) 9999-9999" value="">
                        </div>

                        <label for="">Menssagem personalizada</label>
                        <div class="input-group1">
                            <input class="ipt-3 ipts" type="text" name="message" placeholder="Ex: Tenho interesse de fazer a atarefa">
                        </div>

                        <label for="">Diga sua terefa</label>
                        <div class="input-group1">
                            <input class="ipt-4 ipts" type="text" name="task" placeholder="Ex: Me seguir no instagram">
                        </div>

                        <label for="">Defina a sua recompensa</label>
                        <div class="input-group1">
                            <input class="ipt-5 ipts" type="text" name="reward" placeholder="Ex: Seguir de volta ou 2 reais via PIX">
                        </div>

                        <div class="ctn-button">
                            <input name="publish" id="publicar" type="submit" value="Publicar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav id="navbar">
        <div>
            <ul>
                <li><a href="#feed" class="active">FEED</a></li>
                <li><a href="#saiba">COMO FUNCIONA?</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div id="container-pub">
            <div id="description-alert"><span>Diga a eles qual sua recompensa por uma tarefa....</span></div>
            <div>
                <button publisher="#" class="btn-create"><span publisher="#">Criar Publicação</span><span publisher="#" class="mais">+</span></button>
            </div>
        </div>
    </section>
    
    <!-- Feed de Publicações -->
    <main id="container-main">
        <div class="title-public">Publicações</div>
        <div class="container-feed">
            <?php
            include("PHP/modal.php");
            connect_db();
            consult_db()
            ?>

            <!--  
                <div id="container-item">
                <div class="ctn-itens">
                    <div>
                        Tarefa: 
                        <span class="text-pub">Se cadastar com meu link de indicação do tiktok</span>
                    </div>
                    <div>
                        Recompensa:
                        <span class="text-pub">5 reais no Pix</span>
                    </div>
                </div>
                <div class="ctn-btn">
                    <a href="#">
                        <span>Tenho interesse</span>
                        <span class="material-icons-outlined">arrow_forward</span>
                    </a>
                </div>
            </div> 
        -->
        </div>
    </main>

    <script src="./JS/modalController.js"></script>
    <script src="./JS/index.js"></script>
</body>

</html>