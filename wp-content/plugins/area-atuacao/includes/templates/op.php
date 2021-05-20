<?php
$aa_opcoes = get_option('aa_op_areas');
?>

<div class="wrap">
    <form action="options.php" method="post">

        <?php settings_fields('aa_op'); ?>

        <p><label for="">Título</label><br>
        <input type="text" name="aa_op_areas[titulo1]" id="aa_op_areas[titulo1]" value="<?php echo $aa_opcoes['titulo1'] ?>"></p>

        <p><label for="">Cor</label><br>
        <input type="color" name="aa_op_areas[cor1]" id="aa_op_areas[cor1]" value="<?php echo $aa_opcoes['cor1'] ?>"></p>

        <p><label for="">Descrição</label><br>
        <textarea name="aa_op_areas[descricao1]" id="" cols="60" rows="3"><?php echo $aa_opcoes['descricao1'] ?></textarea>

        <hr>

        <p><label for="">Título</label><br>
        <input type="text" name="aa_op_areas[titulo2]" id="aa_op_areas[titulo2]" value="<?php echo $aa_opcoes['titulo2'] ?>"></p>

        <p><label for="">Cor</label><br>
        <input type="color" name="aa_op_areas[cor2]" id="aa_op_areas[cor2]" value="<?php echo $aa_opcoes['cor2'] ?>"></p>

        <p><label for="">Descrição</label><br>
        <textarea name="aa_op_areas[descricao2]" id="" cols="60" rows="3"><?php echo $aa_opcoes['descricao2'] ?></textarea>

        <hr>

        <p><label for="">Título</label><br>
        <input type="text" name="aa_op_areas[titulo3]" id="aa_op_areas[titulo3]" value="<?php echo $aa_opcoes['titulo3'] ?>"></p>

        <p><label for="">Cor</label><br>
        <input type="color" name="aa_op_areas[cor3]" id="aa_op_areas[cor3]" value="<?php echo $aa_opcoes['cor3'] ?>"></p>

        <p><label for="">Descrição</label><br>
        <textarea name="aa_op_areas[descricao3]" id="" cols="60" rows="3"><?php echo $aa_opcoes['descricao3'] ?></textarea>

        <hr>

        <p><label for="">Título</label><br>
        <input type="text" name="aa_op_areas[titulo4]" id="aa_op_areas[titulo4]" value="<?php echo $aa_opcoes['titulo4'] ?>"></p>

        <p><label for="">Cor</label><br>
        <input type="color" name="aa_op_areas[cor4]" id="aa_op_areas[cor4]" value="<?php echo $aa_opcoes['cor4'] ?>"></p>

        <p><label for="">Descrição</label><br>
        <textarea name="aa_op_areas[descricao4]" id="" cols="60" rows="3"><?php echo $aa_opcoes['descricao4'] ?></textarea>

        <hr>

        <input type="submit" name="submit" class="button button-primary" value="Salvar Alterações">
    </form>
</div>