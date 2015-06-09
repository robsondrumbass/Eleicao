<!-- AGUARDE -->
<section id="aguarde">
    
        <header>
            <img src="<?= base_url("img/logos/logo_iap_big.png")?>" title="Logo IAP">
            <h1>Igreja Adventista da Promessal</h1>
            <h2>Eleição 2015</h2>
        </header>
	   
        <article>
            <h3>Aguarde...</h3>
        </article>
               
</section>

<!-- REGIAO -->
<section id="regiao">
    
    <header>
        <h1>Igreja Adventista da Promessal</h1>
        <h2>Eleição 2015</h2>
    </header>
    
    <article>
            <h3>Região:</h3>
            <h4 onclick="atual(2);">Paraná</h4>
    </article>
    
</section>

<!-- CANDIDATO -->
<section id="candidato">
    
    <header>
        <h1>Convenção Geral</h1>
        <h2>Presidente</h2>
    </header>
    
    <article>
        <div class="alerts">
            <p class="alert alert-info">Para votar, toque na foto</p>
        </div>

        <div class="candidatos">
            
            <div class="candidato" id="candidato-1" onclick="atual(20);" data-toggle="modal" data-target="#tela_confirmacao" data-whatever="@mdo">
                <img  src="<?= base_url("img/candidatos/foto_1.jpg")?>" alt="Joazir Nunes Fonseca"> 
                <h3>Joazir Nunes Fonseca</h3>
            </div>
            <div class="candidato" id="candidato-2" onclick="atual(20);" data-toggle="modal" data-target="#tela_confirmacao" data-whatever="@mdo">
                <img src="<?= base_url("img/candidatos/foto_2.jpg")?>" alt="Efraim Silvino Teixeira">
                <h3>Efraim Silvino Teixeira</h3>
            </div>
            <div class="candidato anularx" id="candidato-x" onclick="atual(20);" data-toggle="modal" data-target="#tela_confirmacao" data-whatever="@mdo">
                <img class="anular" src="<?= base_url("img/candidatos/anular.png")?>" alt="Anular Voto">
                <h3>Anular Voto</h3>    
            </div>
            
        </div>

        <div class="modal fade" id="tela_confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="candidato-content">
                        <img src="">
                        <h2></h2>
                    </div>

                    <button class="btn btn-success" onclick="atual(3);">Confirmar</button>
                    <button class="btn btn-danger" data-dismiss="modal" onclick="atual(2);">Cancelar</button>
                </div>
            </div>
        </div>
    </article>    

</section>

<!-- FINALIZACAO -->
<section id="finalizacao">OBRIGADO</section>

<script src="<?= base_url("js/script_urna.js")?>"></script>
<script src="<?= base_url("js/sync_urna.js")?>"></script>