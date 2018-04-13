<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionInformation()
    {
        return $this->render('information');
    }
    
    public function actionAerial_photo()
    {
        return $this->render('aerial_photo');
    }

    public function actionKupit()
    {
        return $this->render('kupit');
    }

    public function actionPhoto()
    {
        return $this->render('photo');
    }

    public function actionRaspolojenie()
    {
        return $this->render('raspolojenie');
    }

    public function actionSrochnaya_prodazha()
    {
        return $this->render('srochnaya-prodazha');
    }

    public function actionSrochnyi_vykup()
    {
        return $this->render('srochnyi-vykup');
    }

    public function actionUchastok_91()
    {
        return $this->render('uchastok-91');
    }

    public function actionUchastok_116()
    {
        return $this->render('uchastok-116');
    }

    public function actionUchastok_172()
    {
        return $this->render('uchastok-172');
    }

    public function actionUchastok_200()
    {
        return $this->render('uchastok-200');
    }

    public function actionUchastok_301()
    {
        return $this->render('uchastok-301');
    }

    public function actionUchastok_408()
    {
        return $this->render('uchastok-408');
    }

    public function actionUchastok_481()
    {
        return $this->render('uchastok-481');
    }

    public function actionUchastok_482()
    {
        return $this->render('uchastok-482');
    }

    public function actionUchastok_500()
    {
        return $this->render('uchastok-500');
    }

    public function actionUchastok_505()
    {
        return $this->render('uchastok-505');
    }

    public function actionUchastok_522()
    {
        return $this->render('uchastok-522');
    }

    public function actionUchastok_533()
    {
        return $this->render('uchastok-533');
    }

    public function actionUchastok_533_2()
    {
        return $this->render('uchastok-533-2');
    }

    public function actionUchastok_558()
    {
        return $this->render('uchastok-558');
    }

    public function actionUchastok_615()
    {
        return $this->render('uchastok-615');
    }

    public function actionUchastok_619()
    {
        return $this->render('uchastok-619');
    }

    public function actionUchastok_625()
    {
        return $this->render('uchastok-625');
    }

    public function actionUchastok_629()
    {
        return $this->render('uchastok-629');
    }

    public function actionUchastok_630()
    {
        return $this->render('uchastok-630');
    }

    public function actionUchastok_632()
    {
        return $this->render('uchastok-632');
    }

    public function actionUchastok_644()
    {
        return $this->render('uchastok-644');
    }

    public function actionUchastok_685()
    {
        return $this->render('uchastok-685');
    }

    public function actionUchastok_764()
    {
        return $this->render('uchastok-764');
    }
	
	 public function actionUchastok_436()
    {
        return $this->render('uchastok-436');
    }
	
	 public function actionUchastok_611()
    {
        return $this->render('uchastok-611');
    }
	
	 public function actionUchastok_512()
    {
        return $this->render('uchastok-512');
    }
	
	 public function actionUchastok_537()
    {
        return $this->render('uchastok-537');
    }
	
	 public function actionUchastok_627()
    {
        return $this->render('uchastok-627');
    }
	
	
	 public function actionUchastok_175()
    {
        return $this->render('uchastok-175');
    }
	
	 public function actionUchastok_217()
    {
        return $this->render('uchastok-217');
    }
	
	 public function actionUchastok_618()
    {
        return $this->render('uchastok-618');
    }
	
	
	 public function actionReklama()
    {
        return $this->render('reklama');
    }

    public function actionPhoto_1()
    {
        return $this->render('photo1');
    }

    public function actionPhoto_2()
    {
        return $this->render('photo2');
    }

    public function actionPhoto_3()
    {
        return $this->render('photo3');
    }

    public function actionPhoto_4()
    {
        return $this->render('photo4');
    }

    public function actionPhoto_5()
    {
        return $this->render('photo5');
    }

    public function actionPhoto_6()
    {
        return $this->render('photo6');
    }

    public function actionPhoto_7()
    {
        return $this->render('photo7');
    }

    public function actionPhoto_8()
    {
        return $this->render('photo8');
    }

















}
