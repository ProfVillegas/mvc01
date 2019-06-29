<?php

class Evento extends Model{
    public function getEventos(){
        $sql="select * from evento where estatus=1 ";
        return $this->db->query($sql);
    }
}