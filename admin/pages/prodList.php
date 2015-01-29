<article class="prod">
	<h1>Категории продуктов</h1>
    <ul class="catList">
    	<li><a href="?page=prodlist&cat=1"<? if($_GET['cat'] == 1){ ?> class="active"<? } ?>>Музыка и вещание</a></li>
        <li><a href="?page=prodlist&cat=2"<? if($_GET['cat'] == 2){ ?> class="active"<? } ?>>Hi-Fi & Hi-End</a></li>
        <li><a href="?page=prodlist&cat=3"<? if($_GET['cat'] == 3){ ?> class="active"<? } ?>>Промышленное направление</a></li>
        <li><a href="?page=prodlist&cat=4"<? if($_GET['cat'] == 4){ ?> class="active"<? } ?>>Звукоизоляционные материалы</a></li>
    </ul>
    <? if(isset($prodMass)) { ?>
    <table>
    	<tr>
        	<th>№</th>
            <th>Наименование</th>
            <th>Подкатегория</th>
            <th>Действия</th>
        </tr>
        <? for($i=0;$i<count($prodMass);$i++) {?>
        <tr>
        	<td><?= $i+1 ?></td>
            <td><a href="?page=prod&cat=<?= $_GET['cat'] ?>&id=<?= $prodMass[$i][0] ?>"><?= $prodMass[$i][4] ?></a></td>
            <td><?= $prodMass[$i][2] ?></td>
            <td><a href="?page=prodlist&killitem=prod&cat=<?= $_GET['cat'] ?>&id=<?= $prodMass[$i][0] ?>" onClick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;">Удалить</a></td>
        </tr>
        <? } ?>
    </table>
    <? } else 
    	print '<p style="text-align: center">Материалы отсутствуют</p>';  ?>
       <p class="addMaterialBlock"><a class="button" href="?page=prod&cat=<?= $_GET['cat'] ?>&new=true">Добавить материал</a></p>
</article>

