<article class="newsList list">
    <?php if(count($list) > 0) { ?>
        <table>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
            <?php for($i=0;$i<count($list);$i++) { ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><a href="?page=news&id=<?= $list[$i][0] ?>"><?= $list[$i][2] ?></a></td>
                    <td class="descr"><?= $list[$i][4] ?></td>
                    <td class="date"><?= $list[$i][3] ?></td>
                    <td>
                        <a class="action" href="?page=news&id=<?= $list[$i][0] ?>" title="Редактировать">
                            <img src="style/img/edit.png" alt="Редактировать">
                        </a>
                        <a class="action" href="?page=newslist&clone=<?= $list[$i][0] ?>" title="Копировать">
                            <img src="style/img/copy.png" alt="Копировать">
                        </a>
                        <a class="action" href="?page=newslist&killnews=<?= $list[$i][0] ?>" onclick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;" title="Удалить">
                            <img src="style/img/kill.png" alt="Удалить">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else
        print '<p class="materialsNotFound">Материалы отсутствуют</p>'; ?>
    <a class="button" href="?page=news&new">Добавить материал</a>
</article>

