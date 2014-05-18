<?php

class UserController extends Zend_Controller_Action {
   


   public function init(){
       
}

    public function loginAction(){
         $this->view->layout()->disableLayout();
         if($this->getRequest()->isPost()){
          //AHORA SOLAMENTE NOS VA A PASAR DIRECTAMENTE AL INDEX, VER EL TEMA DE AUTENTICACION
          $this->redirect('/index/index');
          $usuario = $this->getParam("username");
          $pass = $this->getParam("password");
          //if($usuario)
       }
    }
}

