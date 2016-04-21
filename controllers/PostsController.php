<?php

namespace app\controllers;

use app\models\City;
use app\models\Country;
use Yii;
use yii\filters\AccessControl;
use app\models\Posts;
use app\models\search\PostsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Photos;
use yii\web\UploadedFile;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class PostsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index','create','update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Posts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Posts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Posts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSelectcity($country)
    {
        //$model = new Posts();
        //$country = $_POST;
        $results = new \app\models\Country();
        $result = $results->find()->select('ID')->where(['Name'=>$country]);
        $cityes = new \app\models\City();
        $city = $cityes->find()->select('Name')->where(['Country'=>$result])->asArray()->all();
        //$messages = array();
        return $this->renderAjax('selectcity', [
        'city' => $city,
        ]);
    }
    
    public function actionCreate()
    {
        $model = new Posts();
        $model->author = Yii::$app->user->id;
        $model->date_post = date("Y-m-d");
        $model->time_post = date("H:i ", strtotime("+3 hours"));
        $mod = new Country();
        $e = $mod::find()
            ->select(['Name as value', 'Name as label', 'id'])
            ->asArray()
            ->all();
        $modelCity = new City();        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/'.$model->file->baseName . '.' .$model->file->extension);
            $model2 = new Photos;
            $model2->url_photo = 'uploads/' .$model->file->baseName . '.' . $model->file->extension;
            $model2->id_users = $model->author;
            $model2->save();

            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'mod' => $mod,
                'e'=> $e,
                'modelCity' => $modelCity,
                
            ]);
        }
    }

    /**
     * Updates an existing Posts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/'.$model->file->baseName . '.' .$model->file->extension);
            $model2 = new Photos;
            $model2->url_photo = 'uploads/' .$model->file->baseName . '.' . $model->file->extension;
            $model2->id_users = $model->author;
            $model2->save();
            
            return $this->redirect(['view', 'id' => $model->id_post]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Posts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Posts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Posts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Posts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
