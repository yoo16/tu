<?php 
class ApiController extends Controller
{
    public function informations()
    {
        $path = DATA_DIR . 'information.txt';
        if (file_exists($path)) {
            $data = file($path);
            $json = json_encode($data);
            echo $json;
        }
    }
}
