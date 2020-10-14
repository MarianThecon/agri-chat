<?php


function categorii_fermieri_inregistrare()
{

    $categorii_principale = get_terms('cat_fermieri', array("hide_empty" => false));
    $categoryHierarchy = array();
    sort_terms_hierarchically($categorii_principale, $categoryHierarchy);

    ?>


    <div class="categorii-fermieri-container">
        <ul class="categorii-fermieri">
            <?php echo display_termshierarchically($categoryHierarchy); ?>
        </ul>

    </div>

<?php }

add_shortcode('categorii-fermieri-inregistrare', 'categorii_fermieri_inregistrare');