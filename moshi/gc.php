<?php

interface  LoginObserver{
    public function onChange();
}

interface LoginObservable{
    public function addObserver($observer);
}

class Login implements LoginObservable{
    public  $_Observer = null;
    public function notify(){
        foreach($this->_Observer as $obs){
            $obs->onChange();
        }
    }
    public function addObserver($observer){
        $this->_Observer [] =  $observer;
    }
}

class Record implements LoginObserver{
    public function onChange()
    {
        // TODO: Implement onChange() method.
        echo "登录记录";
    }
}
class Integer implements LoginObserver{
    public function onChange()
    {
        // TODO: Implement onChange() method.
        echo "增加积分";
    }
}


$user =  new Login();
$user->addObserver(new Record());
$user->addObserver(new Integer());
$user->notify();