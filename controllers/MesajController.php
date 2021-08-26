<?php
namespace app\controllers;

use yii\web\Controller;

class MesajController extends Controller{
public function actionSoyle($kelime="Merhaba"){
return $this->render('soyle',['kelime'=>$kelime]);
}    
}
?>
