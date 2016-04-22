<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\AutoComplete;
use rico\yii2images\behaviors\ImageBehave;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?=
    $form->field($mod, 'Name')->widget(
        AutoComplete::className(),[
        'clientOptions' => [
            'source' => $e
        ],
        'options' =>[
            'class'=>'form-control']
    ]) ?>

    <?= $form->field($modelCity, 'Name')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

 <!--   <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <?
            $images = $model2->getImages();
            ?>
            <div class="row">
                <?php foreach ($images as $image): ?>
                    <div class="col-md-3">
                        <img src="<?=$image->getUrl('300x')?>" alt="">
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

-->
 <!--   <?= $form->field($model, 'date_post')->textInput() ?> -->

  <!--  <?= $form->field($model, 'time_post')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
