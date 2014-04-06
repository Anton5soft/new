<div class="tourc">
</div>
<div class="tourcont">
    <h1>Tours</h1>


    <?php foreach($posts as $x => $post): ?>

    <li><?php echo $post -> title ?></li>
    <?php echo $post -> content ?>
    <?php endforeach; ?>
    <div class="pag">
        <?php $this->widget('PagTour',array('pages'=>$pages, "cssFile" => Yii::app()->theme->baseUrl . '/css/pager.css')); ?>
    </div>

</div>