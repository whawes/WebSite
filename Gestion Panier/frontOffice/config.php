<?php

class config {
    private static $instance = NULL;

    public static function getConnexion() {
        if (!isset(self::$instance)) {
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=Web', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        return self::$instance;
    }

    /*public function query($sql){
        $req=$this->db->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }*/
  }
?>