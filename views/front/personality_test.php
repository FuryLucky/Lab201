<?php ob_start(); ?>



<!-- ******************************************************** -->
<!-- ************************* Page ************************* -->
<!-- ******************************************************** -->
<div class="page">

	<form method="post" action="/result">
		<table>
			<tr>
				<td>Question</td>
				<td>--</td>
				<td>-</td>
				<td>O</td>
				<td>+</td>
				<td>++</td>
			</tr>
			<tr class="q_1">
				<td><p>Question: rouge?</p></td>
				<td><input type="radio" name="question_1" value="-2">-2</td>
				<td><input type="radio" name="question_1" value="-1">-1</td>
				<td><input type="radio" name="question_1" value="0" checked>0</td>
				<td><input type="radio" name="question_1" value="1">+1</td>
				<td><input type="radio" name="question_1" value="2">+2</td>
			</tr>
			<tr class="q_2">
				<td><p>Question: orange?</p></td>
				<td><input type="radio" name="question_2" value="-2">-2</td>
				<td><input type="radio" name="question_2" value="-1">-1</td>
				<td><input type="radio" name="question_2" value="0" checked>0</td>
				<td><input type="radio" name="question_2" value="1">+1</td>
				<td><input type="radio" name="question_2" value="2">+2</td>
			</tr>
			<tr class="q_3">
				<td><p>Question: jaune?</p></td>
				<td><input type="radio" name="question_3" value="-2">-2</td>
				<td><input type="radio" name="question_3" value="-1">-1</td>
				<td><input type="radio" name="question_3" value="0" checked>0</td>
				<td><input type="radio" name="question_3" value="1">+1</td>
				<td><input type="radio" name="question_3" value="2">+2</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Envoyer">
				</td>
			</tr>
		</table>
	</form>

</div>

<?php $content = ob_get_clean(); ?>

<?php include __DIR__ . '/../layouts/master.php' ; ?>