<?php 
// <!-- Auth user -->
include 'config/auth_user.php';

// <!-- Load Route -->
include 'config/routes.php';

// <!-- Load Header -->
 include 'halaman/header.php';


// <!-- Load Content -->
foreach ($req as $key => $value) {
	require_once $value;
}
foreach ($include as $key => $value) {
	require_once $value;
}

// <!-- Load Footer -->
include 'halaman/footer.php'; 

?>