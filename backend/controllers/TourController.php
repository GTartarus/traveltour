<?php

namespace backend\controllers;

use Yii;
use backend\models\TOUR\Tour;
use backend\models\TOUR\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use backend\models\TOUR\Loaitour;
use backend\models\DDDL\Khachsan;
/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tour model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
     public function actionView($id)
     {
         return $this->render('view', [
             'model' => $this->findModel($id),
         ]);
     }
    public function actionView1($MSTOUR)
    {
        $model=Tour::findone(['MSTOUR'=>$MSTOUR]);
        return $this->render('view1', [
            'model' => $model,
        ]);
    }


    /**
     * Creates a new Tour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tour();
        $items = ArrayHelper::map(Loaitour::find()->all(), 'MALOAI', 'TENLOAI');
        $items1 = ArrayHelper::map(Khachsan::find()->all(), 'MSKS', 'TENKS');
        if ($model->load(Yii::$app->request->post() )) {

            $imageName = $model->TENTOUR;

            $model->file = \yii\web\UploadedFile::getInstance($model, 'file');
            $model->file->saveAs( '../../uploads/'.$model->file->name.'.'.$model->file->extension);

            $model->HINHANH= '../../uploads/'.$model->file->name. '.' .$model->file->extension;


            $model->save();
              return $this->redirect(['view', 'id' => $model->MSTOUR]);
        }
        else{
            return $this->render('create', [
                'model' => $model,
                'items' => $items,
                'items1' => $items1,
            ]);
        }

    }

    /**
     * Updates an existing Tour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $items = ArrayHelper::map(Loaitour::find()->all(), 'MALOAI', 'TENLOAI');
        $items1 = ArrayHelper::map(Khachsan::find()->all(), 'MSKS', 'TENKS');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MSTOUR]);
        }

        return $this->render('update', [
            'model' => $model,
            'items' => $items,
            'items1' => $items1,
        ]);
    }

    /**
     * Deletes an existing Tour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
