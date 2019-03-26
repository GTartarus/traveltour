<?php

namespace frontend\controllers;

use Yii;
use frontend\models\DangKyTour\CTDK;
use frontend\models\DangKyTour\CTDKSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CTDangKyTourController implements the CRUD actions for CTDK model.
 */
class CTDangKyTourController extends Controller
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
     * Lists all CTDK models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CTDKSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CTDK model.
     * @param integer $MSDK
     * @param integer $SDT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($MSDK, $SDT)
    {
        return $this->render('view', [
            'model' => $this->findModel($MSDK, $SDT),
        ]);
    }

    /**
     * Creates a new CTDK model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CTDK();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSDK' => $model->MSDK, 'SDT' => $model->SDT]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CTDK model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MSDK
     * @param integer $SDT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($MSDK, $SDT)
    {
        $model = $this->findModel($MSDK, $SDT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSDK' => $model->MSDK, 'SDT' => $model->SDT]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CTDK model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MSDK
     * @param integer $SDT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($MSDK, $SDT)
    {
        $this->findModel($MSDK, $SDT)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CTDK model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MSDK
     * @param integer $SDT
     * @return CTDK the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MSDK, $SDT)
    {
        if (($model = CTDK::findOne(['MSDK' => $MSDK, 'SDT' => $SDT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
