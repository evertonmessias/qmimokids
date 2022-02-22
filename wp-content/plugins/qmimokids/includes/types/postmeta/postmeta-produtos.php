<?php

// imagem 1 **********************************

function field_box_produtos_imagem()
{
    add_meta_box('produtos_imagem_id', 'Imagens', 'field_produtos_imagem', 'produtos');
}
add_action('add_meta_boxes', 'field_box_produtos_imagem');

function field_produtos_imagem($post)
{ ?> 
    <div class="imagens-produtos">
        <table>
            <tr>
                <td><a href="#" onclick="upload_image(2,1);" class="button button-secondary"><?php _e('Upload Image 1'); ?></a></td>
                <td><input type="text" name="produtos_imagem_1" id="produtos_imagem_1" value="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" /></td>
                <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" target="_blank"><img style="height:30px" id="preview_produtos_imagem_1" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" /></a></td>
            </tr>
            <tr>
                <td><a href="#" onclick="upload_image(2,2);" class="button button-secondary"><?php _e('Upload Image 2'); ?></a></td>
                <td><input type="text" name="produtos_imagem_2" id="produtos_imagem_2" value="<?php echo get_post_meta($post->ID, 'produtos_imagem_2', true); ?>" /></td>
                <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_2', true); ?>" target="_blank"><img style="height:30px" id="preview_produtos_imagem_2" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'produtos_imagem_2', true); ?>" /></a></td>
            </tr>
            <tr>
                <td><a href="#" onclick="upload_image(2,3);" class="button button-secondary"><?php _e('Upload Image 3'); ?></a></td>
                <td><input type="text" name="produtos_imagem_3" id="produtos_imagem_3" value="<?php echo get_post_meta($post->ID, 'produtos_imagem_3', true); ?>" /></td>
                <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_3', true); ?>" target="_blank"><img style="height:30px" id="preview_produtos_imagem_3" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'produtos_imagem_3', true); ?>" /></a></td>
            </tr>
            <tr>
                <td><a href="#" onclick="upload_image(2,4);" class="button button-secondary"><?php _e('Upload Image 4'); ?></a></td>
                <td><input type="text" name="produtos_imagem_4" id="produtos_imagem_4" value="<?php echo get_post_meta($post->ID, 'produtos_imagem_4', true); ?>" /></td>
                <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_4', true); ?>" target="_blank"><img style="height:30px" id="preview_produtos_imagem_4" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'produtos_imagem_4', true); ?>" /></a></td>
            </tr>
        </table>
    </div>            
<?php
    }

    // SAVE ALL **********************************

    function save_postmeta_produtos($post_id)
    {
        if (isset($_POST['produtos_imagem_1'])) {
            $produtos_imagem_1 = $_POST['produtos_imagem_1'];
            update_post_meta($post_id, 'produtos_imagem_1', $produtos_imagem_1);
        }
        if (isset($_POST['produtos_imagem_2'])) {
            $produtos_imagem_2 = $_POST['produtos_imagem_2'];
            update_post_meta($post_id, 'produtos_imagem_2', $produtos_imagem_2);
        }
        if (isset($_POST['produtos_imagem_3'])) {
            $produtos_imagem_3 = $_POST['produtos_imagem_3'];
            update_post_meta($post_id, 'produtos_imagem_3', $produtos_imagem_3);
        }
        if (isset($_POST['produtos_imagem_4'])) {
            $produtos_imagem_4 = $_POST['produtos_imagem_4'];
            update_post_meta($post_id, 'produtos_imagem_4', $produtos_imagem_4);
        }
    }
    add_action('save_post', 'save_postmeta_produtos');
