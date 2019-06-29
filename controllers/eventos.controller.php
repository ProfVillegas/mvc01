<?php

class EventosController extends Controller{
    public function __construct($data=array()){
        parent::__construct($data);
        $this->model=new Evento();
        
    }
    public function index(){
        $this->data['test_content'] = 'Aquí estará mi contenido';
        $this->data['listado']=$this->model->getEventos();
    }

    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            $this->data['content'] = "Here will be a page with '{$alias}' alias";
        }
    }

}