<?php

if ( function_exists('calanthalite_require_file') )
{
    # Load Classes
    calanthalite_require_file( CALANTHALITE_CORE_CLASSES . 'class-tgm-plugin-activation.php' );
    
    # Load Functions
    calanthalite_require_file( CALANTHALITE_CORE_FUNCTIONS . 'customizer/azr_customizer_settings.php' );
    calanthalite_require_file( CALANTHALITE_CORE_FUNCTIONS . 'customizer/azr_customizer_style.php' );
    calanthalite_require_file( CALANTHALITE_CORE_FUNCTIONS . 'azr_resize_image.php' );    
    
}
