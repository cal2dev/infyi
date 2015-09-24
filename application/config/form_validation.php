<?php
$config = array(
        'signup' => array(
               			 array(
								'field' => 'password',
								'label' => 'Password',
								'rules' => 'trim|required|min_length[5]',//|maxlength[15]
               			 		'messages'=>array('min_length' => 'Error Message on rule2 for this field_name')
               			 		
               			 ),
						array(
								'field' => 'email',
								'label' => 'Email Address',
								'rules' => 'trim|required|is_unique['.USER_REG.'.'.USER_REG_EMAIL.']|valid_email'
								
							)
       					 ),
        'login' => array(
               			 array(
								'field' => 'password',
								'label' => 'Password',
								'rules' => 'trim|required|min_length[5]',//|maxlength[15]
               			 		'messages'=>array('min_length' => 'Error Message on rule2 for this field_name')
               			 		
               			 ),
						array(
								'field' => 'email',
								'label' => 'Email Address'
							)
       					 ),
        'email' => array(
                array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                )
        )
);