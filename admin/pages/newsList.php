<article class="newsList">
	<h1>Список новостей</h1>
    <table>
    	<tr>
        	<th>№</th>
            <th>Название</th>
            <th>Дата</th>
            <th>Действие</th>
        </tr>
        <? for($i=0; $i<count($newsMass); $i++) { ?>
        <tr>
        	<td><?= $i+1 ?></td>
            <td><a href="?page=news&id=<?= $newsMass[$i][0] ?>"><?= $newsMass[$i][2] ?></a></td>
            <td><?= $newsMass[$i][3] ?></td>
            <td><a href="?page=newslist&killitem=news&id=<?= $newsMass[$i][0] ?>" onClick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;">Удалить</a></td>
        </tr>
		<? } ?>
    </table>
    <p class="addMaterialBlock"><a class="button" href="?page=news&new=true">Добавить материал</a></p>
</article>

