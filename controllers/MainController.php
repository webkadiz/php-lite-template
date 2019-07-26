<?php

use pl\core\Controller;

class MainController extends Controller {
    
    function indexAction() {
        
        $this->render('index', [
            'title' => 'Template for Lite PHP Framework'
        ]);

    }

}