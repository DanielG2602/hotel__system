<?php

class Controller_sair{


    function logout(){
        session_destroy();
    }
}