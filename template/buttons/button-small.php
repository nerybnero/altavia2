<?php
function display_button_small($button_text = 'Получить консультацию') {
    echo '<button class="button-small"><span>' . esc_html($button_text) . '</span></button>';
}
?>