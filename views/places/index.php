<? if (count($model)): ?>
<? foreach ($model as $item): ?>
        <div class="well">
            <h3><?=$item->places_header?></h3>
            <p><?=$item->places_body?></p>
        </div>
<? endforeach ?>
<? endif ?>
