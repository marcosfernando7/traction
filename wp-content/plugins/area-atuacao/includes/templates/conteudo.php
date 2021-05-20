<div class="aa-conteudo">
    <div class="aa-titulo">

       <?php $aa_options = get_option('aa_op_areas'); ?>

    <div class="radio-item">
        <input type="radio" id="consultores" name="area_atuacao" value="consultores">
        <label for="consultores"><span class="titulo_radio" style="color: <?php echo $aa_options['cor1'] ?>">&nbsp;<?php echo $aa_options['titulo1'] ?></span><br>
        [<?php echo $aa_options['descricao1'] ?></label>
    </div>

    <div class="radio-item">
        <input type="radio" id="lideres" name="area_atuacao" value="lideres">
        <label for="lideres"><span class="titulo_radio" style="color: <?php echo $aa_options['cor2'] ?>">&nbsp;<?php echo $aa_options['titulo2'] ?></span><br>
        <?php echo $aa_options['descricao2'] ?>
        </label>
    </div>

    <div class="radio-item">
        <input type="radio" id="analistas" name="area_atuacao" value="analistas">
        <label for="analistas"><span class="titulo_radio" style="color: <?php echo $aa_options['cor3'] ?>">&nbsp;<?php echo $aa_options['titulo3'] ?></span><br>
        <?php echo $aa_options['descricao3'] ?>
        </label>
    </div>

    <div class="radio-item">
        <input type="radio" id="redatores" name="area_atuacao" value="redatores">
        <label for="redatores"><span class="titulo_radio" style="color: <?php echo $aa_options['cor4'] ?>">&nbsp;<?php echo $aa_options['titulo4'] ?></span><br>
        <?php echo $aa_options['descricao4'] ?>
        </label>
    </div>
    </div>
</div>

