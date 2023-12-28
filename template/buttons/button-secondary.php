<?php
function display_button_secondary($button_text = 'Читать подробнее') {
    echo '<button class="button-secondary"><span>' . esc_html($button_text) . '</span></button>';
}
?>