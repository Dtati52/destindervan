<?php
class Contact 
{
    public function __construct()
    {
        $this->send();
    }
    public function send(){
        if(isset($_POST['boutton_contact']))
        {
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])){              
            $to = "destintati18@gmail.com";
            $subject = "Mes contacts";
            $txt = $_POST['text'];
            $headers = "From: ".$_POST['email']; "\r\n" .
            "CC: ".$_POST['email'];      
            mail($to,$subject,$txt,$headers);
            header('location:index.php');
            }
            else{
            header('location:index.php');
        }
        } 
    }
}
?>