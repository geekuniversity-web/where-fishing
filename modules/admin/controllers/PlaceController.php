<?php

namespace app\modules\admin\controllers;

use app\models\Fish;
use app\models\ImageUpload;
use app\models\Region;
use Yii;
use app\models\Place;
use app\models\PlaceSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PlaceController implements the CRUD actions for Place model.
 */
class PlaceController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Place models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlaceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Place model.
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
     * Creates a new Place model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Place();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Place model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Place model.
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
     * Finds the Place model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Place the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Place::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSetImage($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $article = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($article->saveImage($model->uploadFile($file, $article->image)))
            {
                return $this->redirect(['view', 'id'=>$article->id]);
            }
        }

        return $this->render('image', ['model'=>$model]);
    }

    public function actionSetRegion($id)
    {
        $place = $this->findModel($id);
        $selectedRegion = $place->region->id;
        $regions = ArrayHelper::map(Region::find()->all(), 'id', 'title');
        if(Yii::$app->request->isPost)
        {
            $region = Yii::$app->request->post('region');
            if($place->saveRegion($region))
            {
                return $this->redirect(['view', 'id'=>$place->id]);
            }
        }
        return $this->render('region', [
            'place'=>$place,
            'selectedRegion'=>$selectedRegion,
            'regions'=>$regions
        ]);
    }

    public function actionSetFishes($id)
    {
        $place = $this->findModel($id);
        $selectedFishes = $place->getSelectedFishes();
        $fishes = ArrayHelper::map(Fish::find()->all(), 'id', 'title');
        if(Yii::$app->request->isPost)
        {
            $fishes = Yii::$app->request->post('fishes');
            $place->saveFishes($fishes);
            return $this->redirect(['view', 'id'=>$place->id]);
        }

        return $this->render('fish', [
            'selectedFishes'=>$selectedFishes,
            'fishes'=>$fishes
        ]);
    }
}
