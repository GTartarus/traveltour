<?php

namespace backend\controllers;

use Yii;
use backend\models\DangKyTour\DangkyTour;
use backend\models\DangKyTour\DangkyTourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ArrayHelper;
use backend\Components\DKT;
use backend\models\TOUR\Tour;
/**
 * DangKyTourController implements the CRUD actions for DangkyTour model.
 */
class DangKyTourController extends Controller
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
     * Lists all DangkyTour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DangkyTourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DangkyTour model.
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

    /**
     * Creates a new DangkyTour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new DangkyTour();
    //
    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->MSDK]);
    //     }
    //
    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

      public function actionCreate($MSTOUR){
        $model= new DangKyTour();

        $model->MSTOUR = $MSTOUR;
        $item = Tour::findOne(['MSTOUR' =>$MSTOUR]);
        $model->THANHTOAN = 0;
        $model->GIA= $item->GIA;
        // var_dump(Yii::$app->session['dang-ky-tour']);
        if ($model->load(Yii::$app->request->post()) ) {

            $model->TONGTIEN= ($model->GIA * $model->SLNL)+($model->GIA*$model->SLTE*0.6);
            $model->save();
            return $this->redirect(['view', 'id' => $model->MSDK]);
        }

        return $this->render('create', [
            'model' => $model,
            'item'=> $item,
        ]);
      }
    /**
     * Updates an existing DangkyTour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        // $item1 = ArrayHelper::map(Tour::find()->all(), 'MSTOUR', 'TENTOUR');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MSDK]);
        }

        return $this->render('update', [
            'model' => $model,
            // 'item1' => $item1,
        ]);
    }

    /**
     * Deletes an existing DangkyTour model.
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
     * Finds the DangkyTour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DangkyTour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DangkyTour::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
