<?php 


class Router {
     public function __construct() {
         
     }
     
    public function handleRequest(array $get) : void {
        $controller = new UserController();
        
        if (!isset($get["route"])) {
               //$controller->home();
        }
        
        if (isset($get["route"])) {
    
            if ($get["route"] === "show_user") {
                        
                //$controller->show();
        
        
            } elseif ($get["route"] === "create_user") {
                        
                //$controller->create();
        
        
            } elseif ($get["route"] === "check_create_user") {
                      
                //$controller->checkCreate();
        
        
            } elseif ($get["route"] === "update_user") {
                        
                //$controller->update();
        
        
            } elseif ($get["route"] === "check_update_user") {
                       
                //$controller->checkUpdate();
        
        
            } elseif ($get["route"] === "delete_user") {
                     
                //$controller->delete();
        
            } else {
                       
                //$controller->list();
            }
        }
    }
}

?>