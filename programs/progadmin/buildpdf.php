<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php"); 
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PDF Building</title>
</head>
<body>
<div class="printpdf"></div>
<script type="text/javascript" src="include/loadfirst.js"></script>
<script type="text/javascript" src="include/lang/<?php echo getLangFileName(mlang_getcurrentlang()); ?>.js"></script>
<script type='text/javascript' src="include/pdfnewwindow.js"></script>
</body>
</html>