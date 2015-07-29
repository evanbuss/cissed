<?php

class UserModelTest extends CIUnit_Framework_TestCase
{
    private $user;

    protected function setUp()
    {
        $this->get_instance()->load->model('User_model', 'user');
        $this->user = $this->get_instance()->user;
        // var_dump($this->user);
    }

    public function testGetUserById()
    {
        $expectedUser = array(
                'id' => 11,
                "name" => "John",
                "surname" => "Doe",
                "age" => 41
        );

        $this->assertEquals($expectedUser, $this->user->getUserById(12));
    }
    public function testGet_allstudents()
    {
        $model = $this->user->get_all_students();
        $this->assertEquals(4, count($model));
    }
    public function testUpdate_students()
    {
        $expectedData = array(
            array("id"=>"1","user_name"=>"one","password"=>"secret"),
            array("id"=>"2","user_name"=>"two","password"=>"secret"),
            array("id"=>"3","user_name"=>"three","password"=>"secret"),
            array("id"=>"4","user_name"=>"four","password"=>"secret")
        );
        $bool = $this->user->update_students($expectedData);
        $this->assertEquals(true, $bool);
    }
}

?>