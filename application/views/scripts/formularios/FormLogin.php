<?php

class Application_Formularios_FormLogin extends Zend_Form{
    
    public function init(){
        $this->addElement('text','username',
        array('label'=>'Usuario:',
            'required'=> true));
        
        $this->addElement('password','pass',
                array('label'=>'Contraseña:',
                    'required'=> true));
        
        $this->addElement('submit','Ingresar',array());
        
    }
        
}

