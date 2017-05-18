<?php


class IndexController extends AppBaseController
{

    // 默认Action
    public function indexAction()
    {

        $user = AdminModel::where('user_name', 'admin')->first()->toArray();
        var_dump($user);exit;

    }

}
