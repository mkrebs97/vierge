<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP FORM VALIDATION</title>
</head>

<body>
<?php

//--------------------------------------------------
// Return the required values for this script

$fastingsugar_input = isset($_POST['fastingsugar_input'] ? : '');
$postmealsugar_input = isset($_POST['postmealsugar_input'] ? : '');

//--------------------------------------------------
// By default there are no errors

$htmlErrors = array();

//--------------------------------------------------
// If the user has submitted the form

if ($fastingsugar_input != '') {

//--------------------------------------------------
// Validation

if (trim($fastingsugar_input) == '') {
$htmlErrors['fastingsugar_input'] = 'A number is required';
}

if (strlen($fastingsugar_input) > 3) {
$htmlErrors['fastingsugar_input'] = 'Your reading cannot be longer than 3 numbers';
}

//--------------------------------------------------
// If the data is valid

if (count($htmlErrors) == 0) {

//--------------------------------------------------
// Do something...

//--------------------------------------------------
// Send the user onto the thank-you page

header('Location: ./thankyou/');
exit('<p>Goto <a href="./thankyou/">next page</a></p>');

}

}

?>

<?php
if (count($htmlErrors) > 0) {
echo '<ul class="error">';
foreach ($htmlErrors as $err) echo '<li>' . $err . '</li>';
echo '</ul>';
}
?>

<?= (isset($htmlErrors['fastingsugar_input']) ? ' error' : '') ?>">
<?= htmlentities($fastingsugar_input) ?>

</body>
</html>
