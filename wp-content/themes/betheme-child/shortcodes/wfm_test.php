<?php
function wfm_test() {

// Things that you want to do.
    $message = '<form class="wpuf-form-add wpuf-form-layout1 wpuf-theme-style" action="" method="post">

<div class="wpuf-fields">
                <input class="textfield wpuf_text_106" id="text_106" type="text" data-required="no" data-type="text" name="text" placeholder="" value="23" size="40">

                <span class="wpuf-wordlimit-message wpuf-help"></span>
                            </div>
                            </form>';

// Output needs to be return
    return $message;
}
// register shortcode
add_shortcode('wfm-test', 'wfm_test');