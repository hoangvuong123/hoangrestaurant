<?php
require_once dirname(dirname(dirname(__DIR__))) . '/wp-load.php';
$input = rnp_default_settings();
try {
    $clean = rnp_sanitize_settings($input);
    echo "SUCCESS: Saved correctly.";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
} catch (Error $e) {
    echo "FATAL: " . $e->getMessage();
}
