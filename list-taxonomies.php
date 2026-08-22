<?php
require 'wp-load.php';
echo "--- POST TYPES ---\n";
print_r(get_post_types(['_builtin' => false]));
echo "--- TAXONOMIES ---\n";
print_r(get_taxonomies(['_builtin' => false]));
