<div class="newsc">
</div>
<div class="newscont">
    <h1>News</h1>
<ul>

        <?php foreach($posts as $x => $post): ?>

            <li><?php echo $post -> title ?></li>
                <?php echo $post -> content ?>
                <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy",$post -> created_time) ?>

        <?php endforeach; ?>

    </ul>
    <div class="pag">
        <?php $this->widget('PagNews',array('pages'=>$pages, "cssFile" => Yii::app()->theme->baseUrl . '/css/pager.css')); ?>
    </div>

</div>

