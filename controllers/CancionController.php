<?php

namespace app\controllers;

use app\models\Cancion;
use app\models\CancionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CancionController implements the CRUD actions for Cancion model.
 */
class CancionController extends Controller
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
     * Lists all Cancion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CancionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cancion model.
     * @param int $id_canc Id Canc
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_canc)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_canc),
        ]);
    }

    /**
     * Creates a new Cancion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Cancion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_canc' => $model->id_canc]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cancion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_canc Id Canc
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_canc)
    {
        $model = $this->findModel($id_canc);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_canc' => $model->id_canc]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cancion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_canc Id Canc
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_canc)
    {
        $this->findModel($id_canc)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cancion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_canc Id Canc
     * @return Cancion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_canc)
    {
        if (($model = Cancion::findOne(['id_canc' => $id_canc])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
