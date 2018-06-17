<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systemManage = new Menu();
        $systemManage->name = '系统';
        $systemManage->url = 'admin/menus';
        $systemManage->slug = 'system.manage';
        $systemManage->icon = 'fa fa-cogs';
        $systemManage->parent_id = 0;
        $systemManage->save();

        $menusManage = new Menu();
        $menusManage->name = '后台目录管理';
        $menusManage->url = 'admin/menus';
        $menusManage->slug = 'menus.list';
        $menusManage->parent_id = $systemManage->id;
        $menusManage->save();

        $adminUserManage = new Menu();
        $adminUserManage->name = '后台用户管理';
        $adminUserManage->url = 'admin/adminuser';
        $adminUserManage->slug = 'adminuser.list';
        $adminUserManage->parent_id = $systemManage->id;
        $adminUserManage->save();

        $permissionManage = new Menu();
        $permissionManage->name = '权限管理';
        $permissionManage->url = 'admin/permission';
        $permissionManage->slug = 'permission.list';
        $permissionManage->parent_id = $systemManage->id;
        $permissionManage->save();

        $roleManage = new Menu();
        $roleManage->name = '角色管理';
        $roleManage->url = 'admin/role';
        $roleManage->slug = 'role.list';
        $roleManage->parent_id = $systemManage->id;
        $roleManage->save();

        $registerManage = new Menu();
        $registerManage->name = '注册配置';
        $registerManage->url = 'admin/system/regist';
        $registerManage->slug = 'system.manage';
        $registerManage->parent_id = $systemManage->id;
        $registerManage->save();

        $websiteManage = new Menu();
        $websiteManage->name = '网站设置';
        $websiteManage->url = 'admin/system/website';
        $websiteManage->slug = 'system.manage';
        $websiteManage->parent_id = $systemManage->id;
        $websiteManage->save();

        $emailManage = new Menu();
        $emailManage->name = '邮件设置';
        $emailManage->url = 'admin/system/email_config';
        $emailManage->slug = 'system.manage';
        $emailManage->parent_id = $systemManage->id;
        $emailManage->save();

        $reportManage = new Menu();
        $reportManage->name = '监控报告';
        $reportManage->url = 'admin/report';
        $reportManage->slug = 'system.manage';
        $reportManage->parent_id = $systemManage->id;
        $reportManage->save();

        $scoreManage = new Menu();
        $scoreManage->name = '积分规则';
        $scoreManage->url = 'admin/setting/score';
        $scoreManage->slug = 'system.manage';
        $scoreManage->parent_id = $systemManage->id;
        $scoreManage->save();

        $levelManage = new Menu();
        $levelManage->name = '等级设置';
        $levelManage->url = 'admin/setting/level';
        $levelManage->slug = 'system.manage';
        $levelManage->parent_id = $systemManage->id;
        $levelManage->save();


        $this->userManage();

        $this->fileManage();
        $this->videoManage();

        $this->bbsManage();
        $this->paymentManage();
        $this->otherManage();
    }

    private function userManage()
    {
        $userManage = new Menu();
        $userManage->name = '用户管理';
        $userManage->url = 'admin/user/manage';
        $userManage->slug = 'system.manage';
        $userManage->icon = 'fa fa-user';
        $userManage->parent_id = 0;
        $userManage->save();


        Menu::insert([
            ['name' => '用户列表' , 'url' => 'admin/users' , 'slug' => 'users.list' , 'parent_id' => $userManage->id],
            ['name' => '数据分析' , 'url' => 'admin/users/data' , 'slug' => 'users.data' , 'parent_id' => $userManage->id],
            ['name' => 'vip' , 'url' => 'admin/users/vip' , 'slug' => 'users.vip' , 'parent_id' => $userManage->id],
            ['name' => '黑名单' , 'url' => 'admin/users/black' , 'slug' => 'users.black' , 'parent_id' => $userManage->id],
        ]);
    }

    private function fileManage()
    {
        $manage = new Menu();
        $manage->name = '文件管理';
        $manage->url = 'admin/file/manage';
        $manage->slug = 'system.manage';
        $manage->icon = 'fa fa-cogs';
        $manage->parent_id = 0;
        $manage->save();


        Menu::insert([
            ['name' => '数据分析' , 'url' => 'admin/file/data' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
            ['name' => '模型管理' , 'url' => 'admin/models' , 'slug' => 'models.list' , 'parent_id' => $manage->id],
            ['name' => '工程管理' , 'url' => 'admin/projects' , 'slug' => 'projects.list' , 'parent_id' => $manage->id],
            ['name' => '预设管理' , 'url' => 'admin/defaults' , 'slug' => 'defaults.list' , 'parent_id' => $manage->id],
            ['name' => '材质管理' , 'url' => 'admin/materials' , 'slug' => 'materials.list' , 'parent_id' => $manage->id],
            ['name' => '贴图管理' , 'url' => 'admin/decals' , 'slug' => 'decals.list' , 'parent_id' => $manage->id],
            ['name' => '插件/软件管理' , 'url' => 'admin/plugins' , 'slug' => 'plugins.list' , 'parent_id' => $manage->id],
        ]);
    }

    private function videoManage()
    {
        $manage = new Menu();
        $manage->name = '视频管理';
        $manage->url = 'admin/video/manage';
        $manage->slug = 'system.manage';
        $manage->icon = 'fa fa-cogs';
        $manage->parent_id = 0;
        $manage->save();


        Menu::insert([
            ['name' => '分类管理' , 'url' => 'admin/video/category' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
            ['name' => '视频列表' , 'url' => 'admin/video/list' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
        ]);
    }

    private function bbsManage()
    {
        $manage = new Menu();
        $manage->name = '论坛管理';
        $manage->url = 'admin/bbs';
        $manage->slug = 'system.manage';
        $manage->icon = 'fa fa-cogs';
        $manage->parent_id = 0;
        $manage->save();


        Menu::insert([
            ['name' => '板块管理' , 'url' => 'admin/bbs/module' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
        ]);
    }

    private function otherManage()
    {
        $manage = new Menu();
        $manage->name = '其他功能';
        $manage->url = 'admin/other/silder';
        $manage->slug = 'system.manage';
        $manage->icon = 'fa fa-cogs';
        $manage->parent_id = 0;
        $manage->save();


        Menu::insert([
            ['name' => '一级轮播' , 'url' => 'admin/silder/first' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
            ['name' => '二级轮播' , 'url' => 'admin/silder/second' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
            ['name' => '主题活动' , 'url' => 'admin/silder/active' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
        ]);
    }

    private function paymentManage()
    {
        $manage = new Menu();
        $manage->name = '交易记录';
        $manage->url = 'admin/payment';
        $manage->slug = 'system.manage';
        $manage->icon = 'fa fa-cogs';
        $manage->parent_id = 0;
        $manage->save();


        Menu::insert([
            ['name' => '购买记录' , 'url' => 'admin/payment/buy' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
            ['name' => '充值记录' , 'url' => 'admin/payment/recharge' , 'slug' => 'system.manage' , 'parent_id' => $manage->id],
        ]);
    }
}
