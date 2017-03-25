<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
 // Marat Paritov <qstatix@gmail.com>
 
 
namespace humhub\modules\user\authclient;



class MailRUOAuth extends \yii\authclient\clients\MailRUOAuth
{	



	
	protected function defaultViewOptions()
	    {
	            return [
	            'popupWidth' => 860,
	            'popupHeight' => 480,
	            'cssIcon' => 'fa fa-vkontakte',
	            'buttonBackgroundColor' => '#395697',
	        ];
    }
   
    /**
     * @inheritdoc
     */
    protected function defaultNormalizeUserAttributeMap()
    {
	       return [
            'id' => 'uid',
            'username' => 'nick',
            'firstname' => 'first_name',
            'lastname' => 'last_name',
            'birthday' => function ($attributes) {
                    return '';
                },
            
            
           ];
    }
}