<?php
function my_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    $block['slug'] = $slug;
    $block['classes'] = implode(' ', [$block['slug'], $block['className'], $block['align']]);

    $template_url = get_theme_file_path("/views/blocks/{$slug}");

    if(file_exists( $template_url )):

      echo \App\template("blocks/${slug}", ['block' => $block]);

    else:

      echo $template_url;

    endif;

}
