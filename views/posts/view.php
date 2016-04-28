<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($model->title) ?></h1>

    <p class="post-but">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <div id="post-cont">
        <h1><?= Html::encode($this->title) ?></h1>
        <div id="post-text"><img src="../<?= $image ?>" width="800px" alt="" style="background: gray; width: 800px; height: 400px;"><p><?= Html::encode($model->text) ?></p></div>
        <div id="spans"><span><h5>mne nravitsya <?= Html::encode($model->likes) ?></h5></span>
            <span>  date: <?= Html::encode($model->date_post) ?></span>
            <span> time: <?= Html::encode($model->time_post) ?></span>
            <span> views: <?= Html::encode($model->counts) ?></span>
            <span> author: <?= Html::encode($user->name . ' ' . $user->surname) ?></span>
        </div>
    </div>
</div>
<div id="post-comment"><h3>Комментарии:</h3>

        <textarea name="text" id="text_comment" cols="15" rows="3"></textarea>        
        <input type="hidden" id="post_id" name="post_id" value="<?=Yii::$app->request->get('id')?>" />
        <input type="submit" id="comment" name="knopka" value="submit">
    <div id="messenge">
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
            <div class="one-comment">
                <p><span> автор: <?= Html::encode($user->name); ?></span>
                    <span style="float: right"> <?= Html::encode($comments[$i]['date_comment']); ?></span>
                </p>
                <p><?= Html::encode($comments[$i]['text_comment']); ?></p>
            </div>
            <?php
        }
        ?>
    </div>




<!--  <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        //'id',
        'title',
        'text:ntext',
        //'author',
        // 'likes',
        // 'counts',
        'date_post',
        'time_post',
    ],
]) ?>
    -->

</div>