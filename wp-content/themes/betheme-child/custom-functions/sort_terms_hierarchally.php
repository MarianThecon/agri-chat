<?php
/**
 * Recursively sort an array of taxonomy terms hierarchically. Child categories will be
 * placed under a 'children' member of their parent term.
 * @param Array   $cats     taxonomy term objects to sort
 * @param Array   $into     result array to put them in
 * @param integer $parentId the current parent ID to put them in
 */
function sort_terms_hierarchically(Array &$cats, Array &$into, $parentId = 0)
{
    foreach ($cats as $i => $cat) {
        if ($cat->parent == $parentId) {
            $into[] = $cat;
            unset($cats[$i]);
        }
    }

    foreach ($into as $topCat) {
        $topCat->children = array();
        sort_terms_hierarchically($cats, $topCat->children, $topCat->term_id);
    }
}

function display_termshierarchically(Array &$array, $html = ''){

    foreach($array as $elem_array){

        if(count($elem_array->children) > 0){
            $html .= '<li class="category-with-child collapsible">' .$elem_array->name. '</li>';

            $html .= '<ul class="inner-list">';
            $html .= display_termshierarchically($elem_array->children);
            $html .= '</ul>';

        }else{
            $html .= '<li class="category-without-child"><input type="checkbox" id="vehicle1" name="vehicle1" value="'.$elem_array->term_id.'">' .$elem_array->name. '</li>';
        }
    }

    return $html;
}