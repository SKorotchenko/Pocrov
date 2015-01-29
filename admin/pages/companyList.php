<article class="companyList">
	<h1>Список компаний</h1>
    <table>
    	<tr>
        	<th>№</th>
            <th>Название</th>
            <th>Раздел</th>
            <th>Действие</th>
        </tr>
        <? for($i=0; $i<count($buyMass); $i++) { ?>
        <tr>
        	<td><?= $i+1 ?></td>
            <td><a href="?page=company&id=<?= $buyMass[$i][0] ?>"><?= $buyMass[$i][3] ?></a></td>
            <td><?= $buyMass[$i][1] ?></td>
            <td><a href="?page=companylist&killitem=company&id=<?= $buyMass[$i][0] ?>" onClick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;">Удалить</a></td>
        </tr>
		<? } ?>
    </table>
    <p class="addMaterialBlock"><a class="button" href="?page=company&new=true">Добавить материал</a></p>
</article>

