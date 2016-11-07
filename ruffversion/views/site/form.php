<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
//use yii\jui\DatePicker ;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
//use yii\jui;
//use yii\ruffversion\ju\yii2-jui-master
$this->registerCssFile("/path/to/your/file/in/web/folder/style2.css");
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>


<h1><?= Html::encode($this->title) ?></h1>

<p>
    Registration Form
</p>
<div id="bg2"  >
    <!--div formatting for form-->
    <div class="form-style-3">  
        <!--table -->
    <table id="bg2" align="center">
            
        <tr >
            <td>
                
                <!--Registration form-->
                <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>
                <!--basic info section of form-->
                <fieldset>
                    <Legend>Basic Information</Legend>
                    <table width="800" >
                        <tr><td><?= $form->field($model,'fullname')->textInput(['autofocus' => true]) ?></td></tr>
                    
                        <tr><td><?= $form->field($model,'dob')->label('Date of Birth')?></td></tr>
                    
                    
                    <tr><td><?= $form->field($model, 'gender')->radioList([
    
                    'Male' => 'Male',
                    'Female' =>'Female',
                    
                    ])->label('Gender') ?></td></tr>
                    <tr><td><?= $form->field($model, 'yoe')->label('Years of Experience')  ?></td></tr>
                        
                        <tr><td><?= $form->field($model, 'industry')->label('Industry') ?></td></tr>
                        <tr><td><?= $form->field($model, 'location')->label('Location') ?></td></tr>
                        <tr><td><?= $form->field($model, 'aboutme')->textarea(['rows' => 6])->label('About Me') ?></td></tr>
                        </table>
                </fieldset>
                    
                    
                    <!--Skills Section of Form-->
                    <fieldset>
                    <legend>Skills</legend>

                    <table width="800" >    
                        <tr><td>  <?= $form->field($model, 'title')->dropDownList(['MRS'=>'MRS','MISS'=>'MISS','DR' => 'DR', 'MR' => 'MR'],['prompt'=>'Select Title'])->label('Title');?>  </td></tr>  
                
                        <tr><td><?= $form->field($model, 'carlevel')->label('Career Level') ?></td></tr>
                        <tr><td><?= $form->field($model, 'comlevel')->label('Communication Level') ?></td></tr>
                        <tr><td><?= $form->field($model, 'orglevel') ->label('Organizational Level')?></td></tr>
                        <tr><td><?= $form->field($model, 'joblevel')->label('Job Level') ?></td></tr>
                        </table>
                    </fieldset>
                    <!-- Contact Section of Form -->
                        <fieldset>
                            <legend>Contact</legend>
                       <table width="800" > 
                           <tr><td>
                               <?= $form->field($model, 'address')->textarea(['rows' => 4,'class' => 'form-style-3'])->label('Address') ?></td></tr>
                           <tr><td>   <?= $form->field($model,'phone')->label('Phone Number')?></td></tr>
                           <tr><td><?= $form->field($model, 'website')->label('Website') ?></td></tr>
                           <tr><td><?= $form->field($model, 'email')->label('email')?></td></tr>
                        
                    
                    
                    
                           <tr><td><div class="form-group">
                        <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'profile-button']) ?>
                        <?= Html::resetButton('clear', ['class' => 'btn btn-primary', 'name' => 'reset-button']) ?>
                               </div></td></tr>
                        </table> 
                            </fieldset>
                <?php ActiveForm::end(); ?>
                    
                    
            </td>
        </tr>
            </table>
    </div>
            </div>
        
                    
    
    
    
    
    
    