<?php

namespace app\controllers;

use app\models\Calculation;
use app\models\CalculationHasMaterial;
use app\models\Color;
use app\models\Material;
use app\models\SearchCalculationHasMaterial;
use Yii;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CalculationHasMaterialController implements the CRUD actions for CalculationHasMaterial model.
 */
class CalculationHasMaterialController extends Controller
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
     * Lists all CalculationHasMaterial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchCalculationHasMaterial();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CalculationHasMaterial model.
     * @param int $id Номер
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView(int $id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function CalculationDropdown(): array
    {
        $calculation = Calculation::find()->all();
        $calculation_itmes = ArrayHelper::map($calculation, 'id', 'calculationcol');
        $calculation_params = [
            'prompt' => 'Выберите расчет'
        ];
        return ['calculation_itmes' => $calculation_itmes, 'calculation_params' => $calculation_params];
    }

    public function MaterialDropdown(): array
    {
        $material = Material::find()->all();
        $material_itmes = ArrayHelper::map($material, 'id', 'materialtitle');
        $material_params = [
            'prompt' => 'Выберите материал'
        ];
        return ['material_itmes' => $material_itmes, 'material_params' => $material_params];
    }

    public function ColorDropdown(): array
    {
        $color = Color::find()->all();
        $color_itmes = ArrayHelper::map($color, 'id', 'color');
        $color_params = [
            'prompt' => 'Выберите цвет'
        ];
        return ['color_itmes' => $color_itmes, 'color_params' => $color_params];
    }

    public function CalculationHasMaterialDropdown(): array
    {
        return [
            'calculationdropdown' => $this->CalculationDropdown(),
            'materialdropdown' => $this->MaterialDropdown(),
            'colordropdown' => $this->ColorDropdown()
        ];
    }

    /**
     * Creates a new CalculationHasMaterial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CalculationHasMaterial();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'dropdowndata' => $this->CalculationHasMaterialDropdown()
        ]);
    }

    /**
     * Updates an existing CalculationHasMaterial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id Номер
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
            'dropdowndata' => $this->CalculationHasMaterialDropdown()
        ]);
    }

    /**
     * Deletes an existing CalculationHasMaterial model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id Номер
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
     * Finds the CalculationHasMaterial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id Номер
     * @return CalculationHasMaterial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel(int $id): CalculationHasMaterial
    {
        if (($model = CalculationHasMaterial::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('messages', 'The requested page does not exist.'));
    }

}
