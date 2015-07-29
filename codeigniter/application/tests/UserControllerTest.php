<?php

class UserControllerTest extends CIUnit_Framework_TestCase
{
    private $data;
    protected function setUp()
    {
        // Set the tested controller
        $this->data = $this->get_instance('Welcome');
        // var_dump($this->data);

        // Set up the get and post values
        $_GET['get_all_studnets'] = array(
            array("id"=>"1","user_name"=>"one","password"=>"secret"),
            array("id"=>"2","user_name"=>"two","password"=>"secret"),
            array("id"=>"3","user_name"=>"three","password"=>"secret"),
            array("id"=>"4","user_name"=>"four","password"=>"secret")
        );
        $_POST['update_studnets'] = array(
            array("id"=>"1","user_name"=>"five","password"=>"unknown"),
            array("id"=>"2","user_name"=>"six","password"=>"unknown"),
            array("id"=>"3","user_name"=>"seven","password"=>"unknown"),
            array("id"=>"4","user_name"=>"eight","password"=>"unknown")
        );
    }

    public function testIndex() {
        $data = array (
            "students" => $_GET['get_all_studnets']
        );
        var_dump($data);
        $this->assertEquals(4, count($data['students']));
    }

    public function testUpdate() {
        $data = array(
            "students" => "students"
        );
    }

}

?>