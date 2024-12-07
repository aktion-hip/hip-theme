<?php
/**
 * Title: Tag Title
 * Slug: hip/tag-title
 * Inserter: no
 */
?>
<div class="hip-spec-title">
<?php
if (is_tag()) {
    $tag = single_tag_title( '', false );
    echo "<span>Tag <i>{$tag}</i></span>";
} elseif (isset($_GET['tag'])) {
    $tag = sanitize_text_field($_GET['tag']);
    $sanTag = esc_html($tag);
    echo "<span>Tag <i>{$sanTag}</i></span>";
} else {
    _e( 'No tag specified', 'hip' );
}
?>
</div>
