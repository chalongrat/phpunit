<?php

namespace tests\unit\model;

use app\models\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        verify($user = User::findIdentity(1));
        verify($user)->notEmpty();
        verify($user->username)->equals('admin');
    }
}
