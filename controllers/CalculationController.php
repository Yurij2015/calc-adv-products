<?php

namespace app\controllers;

use app\models\AdvProdType;
use app\models\Calculation;
use app\models\SearchCalculation;
use Yii;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CalculationController implements the CRUD actions for Calculation model.
 */
class CalculationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors(): array
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
     * Lists all Calculation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchCalculation();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Calculation model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function AdvTypeDropdown(): array
    {
        $advprodtype = AdvProdType::find()->all();
        $advprodtype_itmes = ArrayHelper::map($advprodtype, 'id', 'title');
        $advprodtype_params = [
            'prompt' => 'Выберите вид изделия'
        ];
        return ['advprodtype_itmes' => $advprodtype_itmes, 'advprodtype_params' => $advprodtype_params];
    }

    /**
     * Creates a new Calculation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Calculation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'advprodtype_itmes' => $this->AdvTypeDropdown()['advprodtype_itmes'],
            'advprodtype_params' => $this->AdvTypeDropdown()['advprodtype_params']
        ]);
    }

    /**
     * Updates an existing Calculation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate(int $id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'advprodtype_itmes' => $this->AdvTypeDropdown()['advprodtype_itmes'],
            'advprodtype_params' => $this->AdvTypeDropdown()['advprodtype_params']
        ]);
    }

    /**
     * Deletes an existing Calculation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws StaleObjectException
     */
    public function actionDelete(int $id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Calculation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Calculation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel(int $id): Calculation
    {
        if (($model = Calculation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('messages', 'The requested page does not exist.'));
    }
}
