<p>※以下のレコードを削除しますか？</p>
<div>id: <?=$entity['id'] ?></div>
<div>name: <?=$entity['name'] ?></div>
<div>mail: <?=$entity['mail'] ?></div>
<div>age: <?=$entity['age'] ?></div>
<hr>
<?=$this->From->create($entity,
['type'=>'post',
'url'=>['controller'=>'People',
    'action'=>'destroy']]) ?>
<?=$this->From->hidden('People.id') ?>
<div><?=$this->Form->submit('削除する') ?></div>
<?=$this->Form->end() ?>
