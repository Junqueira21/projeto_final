    <!-- Conteúdo da Página -->
    <hr>
    <div class="container mt-2">
        <div class="row">
            <div class="col-6">
        <img src="<?= $produto['foto']?>">
</div>
<div class="col-6">
    <h4><?= $produto['nome']?></h4>
    <p>Marca: <?= $produto['nome']?></p>
    <h5>R$ <?= $produto['preco']?></h5>

    </div>
</div>

    <div>
        <h4 class="mt-5">Detalhes</h4>
        <hr>
    <?= $produto['descricao']?></p>
    </div>
<hr>

</div>

    