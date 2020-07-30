<?php

namespace app\controllers;

use app\service\RowsAndPagesShowService;
use yii\db\Exception;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionTable1()
    {
        return $this->render('table1',
            (new RowsAndPagesShowService)->getRenderData1()
        );
    }

    /**
     * @return string
     */
    public function actionTable2()
    {
        return $this->render('table2',
            (new RowsAndPagesShowService)->getRenderData2()
        );
    }

    /**
     * @return string
     * @throws Exception
     */
    public function actionQuery()
    {
        return $this->render('query',
            (new RowsAndPagesShowService)->getTestTaskQueryRenderData()
        );
    }
}
