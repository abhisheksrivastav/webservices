<?php
class WebservicesController extends AppController{

public function beforeFilter(){
$this->autoRender = false;

}

function index(){
$input = $GLOBAL['HTTP_RAW_POST_DATA'];
if($input){
$inputArr = json_decode($input,true);
// do some processing and return 

return json_encode($messagearr);
}
}
}
?>
