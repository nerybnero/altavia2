<?php
function display_button_services($button_text = 'Связаться с нами') {
    echo '<button class="button-services"><span>' . esc_html($button_text) . '</span></button>';
}
?>