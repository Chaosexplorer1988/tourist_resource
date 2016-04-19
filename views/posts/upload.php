<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php




/* @var $this yii\web\View */
/* @var $model app\models\Posts */


?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>
    <div class="posts-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>

