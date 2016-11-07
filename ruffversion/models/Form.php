<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Form extends Model
{
    //Basic Info variables
    public $fullname;
    public $gender;
    public $dob;
    public $yoe;
    public $industry;
    public $location;
    public $aboutme;
    //Skills vairables
    public $title;
    public $carlevel;
    public $comlevel;
    public $orglevel;
    public $joblevel;
    //contacts contacts variable
    public $address;
    public $phone;
    public $website;
    public $email;
     

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fullname', 'email','gender','yoe','dob','industry','location','industry','aboutme','title','carlevel','comlevel','orglevel','joblevel','address','phone','website','email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],    
            //checks if vlues are integers and values inputted are betwenn 0 and 70
            ['yoe','integer','max'=>70,'min'=>0],
            //checks if values are betwenn 1 and 100 carerrlevel,orgnaizational level, communication level, job level
            ['carlevel','integer','max'=>100,'min'=>1],
            ['orglevel','integer','max'=>100,'min'=>1],
            ['comlevel','integer','max'=>100,'min'=>1],
            ['joblevel','integer','max'=>100,'min'=>1],
            ['phone','integer','max'=>99999999,'min'=>1],
            
        
            
            
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Full Name'
        ];
    }

    
}
