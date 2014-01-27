<?php
 
class LoginForm extends CFormModel
{ 
    public $username;
    public $password;
    public $rememberMe;

    public function rules()
    {
        return array( 
array('username, password',
'required','message'=>'{attribute} harus diisi'), 
 array('rememberMe', 'boolean'),
            array('password', 'authenticate'), 
        );
    }

    public function attributeLabels()
    {
        return array(
            'username'=>'Username',
            'password'=>'Password',
            'rememberMe'=>'Ingat Saya',
			  );
    }
} 