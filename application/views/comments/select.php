<?php 
$comments = $viewParams['users'];
?>
<a href="/users/insert">Insert Usuario</a>
<table border=1>
<tr>
<th>Id</th> <th>Fecha</th>
<th>Comentario</th> <th>Valoración</th>
<th>User</th> <th>Space</th>
<th>Submit</th>
<th>Options</th>
</tr>
<?php foreach($comments as $line => $comment): ?>
	<tr>
		<?php foreach($comment as $key => $value):?>
			<td><?=(is_array($value))?implode('|',$value):$value;?></td>
		<?php endforeach; ?>
		<td>
			<a href="/comments/update/id/<?=$line;?>">update</a>
			&nbsp;&nbsp;
		  	<a href="/comments/delete/id/<?=$line;?>">delete</a>
		</td>
	</tr>
<?php endforeach;?>
</table>


		