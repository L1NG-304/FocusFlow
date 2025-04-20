<?php
class Home extends Controller {
    function index(){
        $hello  = $this->model("Schedule");
    }
}
?>