<?php
/**
 * Created by PhpStorm.
 * User: lazhcm10343
 * Date: 3/8/15
 * Time: 6:13 PM
 */

namespace frontend\controllers;


use app\models\Profile;
use common\models\User;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionProfile()
    {
        $userModel   = User::findOne(\Yii::$app->user->id);
        $profile     = $userModel->profile;
        return $this->render('profile',
                                [
                                    'user' => $userModel,
                                    'profile' => $profile,
                                ]);
    }

    public function actionProfileForm()
    {
        $profile =  new Profile();
        return $this->render('profile-form', ['profile' => $profile]);
    }


}