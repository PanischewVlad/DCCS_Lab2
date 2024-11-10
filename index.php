
<?php
    get_header ();
?>
<div id="content">
    <div id="content_top" <?php if (is_front_page())
        echo 'class="home"' ?>>
        <div id="content_top_center" <?php if (is_front_page()) 
        echo'class="home"'?>>
            <?php
                if (!is_front_page()) {
                    echo '<div id="page_title">'; 
                    the_title();
                    echo '</div>';
                } else {
                    $top_page = get_page_by_title('Home (top) ');
                    echo $top_page->post_content;
                }
                    ?>
        </div>
    </div>
    <div id="content_bottom" <?php if (is_front_page())
        echo 'class="home" '?>>
        <div id="content_bottom_center">
            <?php
                if (have_posts()) : while (have_posts()): the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>