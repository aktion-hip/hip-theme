<?php
/**
 * Title: HIP Footer
 * Slug: hip/hip-footer
 * Inserter: no
 */
$root = get_option( 'hip_settings_site_path', '' );
$icons = get_template_directory_uri() . '/assets/icons';
?>
<footer id="footer" >
    <div class="hip-footer">
        <div class="inner">
            <ul class="icons">
                <li>
                    <a href="https://x.com/el2be" class="social-icon">
                        <img src="<?php echo esc_url( $icons ); ?>/x-white.svg" alt="Aktion HIP auf X">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/aktion-hip/" class="social-icon">
                        <img src="<?php echo esc_url( $icons ); ?>/github-white.svg" alt="Aktion HIP auf GitHub">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/benno-luthiger-6750346" class="social-icon">
                        <img src="<?php echo esc_url( $icons ); ?>/linkedin-white.svg" alt="Aktion HIP auf LinkedIn">
                    </a>
                </li>
            </ul>
            <ul class="copyright">
                <li>© Aktion HIP</li>
                <li><a href="<?php echo $root; ?>/hip/person.html">Disclaimer</a></li>
                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>
</footer>