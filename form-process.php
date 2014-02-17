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

$systolic_slider = isset($_POST['systolic_slider'] ? : '');
$diastolic_slider = isset($_POST['diastolic_slider'] ? : '');

//--------------------------------------------------
// By default there are no errors

$htmlErrors = array();

//--------------------------------------------------
// If the user has submitted the form

if ($systolic_slider != '') {

//--------------------------------------------------
// Validation

if (trim($systolic_slider) == '') {
$htmlErrors['systolic_slider'] = 'A number is required';
}

if (strlen($systolic_slider) > 3) {
$htmlErrors['systolic_slider'] = 'Your reading cannot be longer than 3 numbers';
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

<?= (isset($htmlErrors['systolic_slider']) ? ' error' : '') ?>">
<?= htmlentities($systolic_slider) ?>

</body>
</html>
