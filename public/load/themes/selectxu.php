<?php
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'.config');

function user_dir() {
	return ".";
}
function is_multi() {
	return false;
}
function is_cde() {
	return Boscookie::getnodeid() != NULL;
}

$file = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR."lxde-cfg.tgz";

if ( is_cde() ) {
        if ( is_multi() ) {
		$file = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR.user_dir().DIRECTORY_SEPARATOR."lxde-cfg.tgz";
        }
        if (file_exists($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename='.basename($file));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));
                ob_clean();
                flush();
                readfile($file);
                exit;
        }
} else {
	header("Status: 404 Not Found", true, 404);
}

?>
