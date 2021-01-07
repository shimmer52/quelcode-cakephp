<p>TPeople table records.</p>
<table>
    <thead><tr>
        <th>id</th><th>name</th><th>mail</th><th>age</th><th>messages</th><th></th>
    </tr></thead>
    <tbody>
    <?php foreach($data->toArray() as $obj): ?>
    <tr>
        <td><?=h($obj->id) ?></td>
        <td><a href="<?=$this->Url->build(['controller'=>'People','action'=>'edit']); ?>?id=<?=$obj->id ?>"><?=h($obj->name) ?></a></td>
        <td><?=h($obj->name) ?></td>
        <td><?=h($obj->mail) ?></td>
        <td><?=h($obj->age) ?></td>
        <td><?php foreach($obj->messages as $item): ?>
            "<?=h($item->message) ?>"<br>
        <?php endforeach; ?>
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div class="paginator">
    <ul class="pagination">
        <?=$this->Paginator->first(' |<< '. ' 最初へ ') ?>
        <?=$this->Paginator->prev(' << '. ' 前へ ') ?>
        <?=$this->Paginator->first(' 次へ '. ' >> ') ?>
        <?=$this->Paginator->first(' 最後へ '. ' >>| ') ?>
    </ul>
</div>
