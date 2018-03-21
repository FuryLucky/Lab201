<?php

function get_result() {
	$val_1 = $_POST['question_1'];
	$val_2 = $_POST['question_2'];
	$val_3 = $_POST['question_3'];
	echo $resultat = $val_1+$val_2+$val_3;

}