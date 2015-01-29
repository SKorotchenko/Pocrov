<article class="galleryList">
	<h1>Список альбомов</h1>
    <table>
    	<tr>
        	<th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Действие</th>
        </tr>
        <? for($i=0; $i<count($galleryMass); $i++) { ?>
        <tr>
        	<td><?= $i+1 ?></td>
            <td><a href="?page=gallery&id=<?= $galleryMass[$i][0] ?>"><?= $galleryMass[$i][1] ?></a></td>
            <td><?= $galleryMass[$i][2] ?></td>
            <td><a href="?page=gallerylist&killitem=gallery&id=<?= $galleryMass[$i][0] ?>" onClick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;">Удалить</a></td>
        </tr>
		<? } ?>
    </table>
    <p class="addMaterialBlock"><a class="button" href="?page=gallery&new=true">Добавить материал</a></p>
</article>

