<?php
namespace frontend\controllers;

use common\models\Contact;
use Yii;
use frontend\models\ContactForm;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\MainGallery;
use common\models\AboutUs;
use common\models\ProductGallery;
use yii\helpers\Json;
use common\models\Partner;
/**
 * Site controller
 */
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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    public function beforeAction($event)
    {
        if (!isset(Yii::$app->session['lang']))
        {
            Yii::$app->session->set('lang','sr');
            Yii::$app->language = Yii::$app->session->get('lang');
        }else{
            Yii::$app->language = Yii::$app->session->get('lang');
        }

        return parent::beforeAction($event);
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
        $mainGallery = MainGallery::find()->andWhere(['status'=>1])->one();
        $aboutUs = AboutUs::find()->one();
        $productGallery = ProductGallery::find()->andWhere(['status'=>1])->all();
        $contact = Contact::find()->one();
        $partners = Partner::find()->andWhere(['status'=>'1'])->all();

        return $this->render('index',[
            'mainGallery'=>$mainGallery,
            'aboutUs'=>$aboutUs,
            'productGallery'=>$productGallery,
            'contact'=>$contact,
            'partners'=>$partners,
        ]);
    }

    /*
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    */
   // public $enableCsrfValidation = false;

    public function actionContact()
    {
        $model = new ContactForm();
        if (Yii::$app->request->isPost) {
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->body = $_POST['body'];
            if($model->validate()){
                if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                    Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
                }
            }else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }
        }

        return $this->redirect('index#bottom');
    }

    public function actionChangeLanguage()
    {
        if(Yii::$app->request->isAjax){
            $language = Yii::$app->request->post('id');
            Yii::$app->session->set('lang',$language);
            Yii::$app->language = $language;

            echo Json::encode(['success'=>true,'message'=>$language]);
            Yii::$app->end();
        }
    }
    /*

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    */
}
