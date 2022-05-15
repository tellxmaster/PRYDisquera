<?php

namespace app\controllers;

use app\models\Banda;
use app\models\BandaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BandaController implements the CRUD actions for Banda model.
 */
class BandaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Banda models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BandaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banda model.
     * @param int $id_band Id Band
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_band)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_band),
        ]);
    }

    /**
     * Creates a new Banda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Banda();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_band' => $model->id_band]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Banda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_band Id Band
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_band)
    {
        $model = $this->findModel($id_band);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_band' => $model->id_band]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Banda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_band Id Band
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_band)
    {
        $this->findModel($id_band)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Banda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_band Id Band
     * @return Banda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_band)
    {
        if (($model = Banda::findOne(['id_band' => $id_band])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
