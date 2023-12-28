<?php
function display_button_normal($button_text = 'Получить консультацию') {
    echo '<button class="button-normal"><span>' . esc_html($button_text) . '</span></button>';
}
?>