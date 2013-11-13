<?php
$comment = $viewParams['comment'];
?>

<form method="POST" enctype="multipart/form-data">
<ul>
	<li>
		Id: <input type="hidden" name="id" value="1"/>
	</li>
	<li>
		Fecha: <input type="text" name="date" value="<?=(isset($comment['date']))?$comment['date']:'';?>"/>
	</li>
	<li>
		Comentario: <input type="text" name="comment" value="<?=(isset($comment['comment']))?$comment['comment']:'';?>"/>
	</li>
	<li>
		Valoración: <input type="text" name="valoration" value="<?=(isset($comment['valoration']))?$comment['valoration']:'';?>"/>
	</li>
	<li>
		id_user: <input type="text" name="id_user" value="<?=(isset($comment['id_user']))?$comment['id_user']:'';?>"/>
	</li>
	<li>
		id_spaces: <input type="text" name="id_spaces" value="<?=(isset($comment['id_spaces']))?$comment['id_spaces']:'';?>"/>
	</li>
	<li>
		Submit: <input type="submit" name="submit" value="Enviar"/>
	</li>
	<li>
		Reset: <input type="reset" name="reset"/>
	</li>
	<li>
		Boton: <input type="button" name="button" value="Boton"/>
	</li>

</ul>



</form>
