<?PHP
class Notification{
    private $mail;
    private $msg;

    function __construct($mail,$msgg){
        $this->nom=$id_user;
        $this->msg=$msgg;

    }

    function getMessage(){
        return $this->msg;
    }
    function getMail(){
        return $this->mail;
    }



}

?>
