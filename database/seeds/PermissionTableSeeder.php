<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->systemManage();
        $this->menus();
        $this->adminUser();
        $this->permission();
        $this->role();

        $this->user();

        $this->document();
    }

    /**
     * create system permission
     */
    public function systemManage()
    {
        $systemManage = New Permission();
        $systemManage->name = 'system.manage';
        $systemManage->display_name = '系统管理';
        $systemManage->description = '系统管理';
        $systemManage->save();
    }

    /**
     * create menus permission
     */
    public function menus()
    {
        $menusList = New Permission();
        $menusList->name = 'menus.list';
        $menusList->display_name = '目录列表';
        $menusList->description = '目录列表';
        $menusList->save();

        $menusAdd = New Permission();
        $menusAdd->name = 'menus.add';
        $menusAdd->display_name = '添加目录';
        $menusAdd->description = '添加目录';
        $menusAdd->save();

        $menusEdit = New Permission();
        $menusEdit->name = 'menus.edit';
        $menusEdit->display_name = '修改目录';
        $menusEdit->description = '修改目录';
        $menusEdit->save();

        $menusDelete = New Permission();
        $menusDelete->name = 'menus.delete';
        $menusDelete->display_name = '删除目录';
        $menusDelete->description = '删除目录';
        $menusDelete->save();
    }

    /**
     * create admin user permission
     */
    public function adminUser()
    {
        $adminUserList = New Permission();
        $adminUserList->name = 'adminuser.list';
        $adminUserList->display_name = '后台用户列表';
        $adminUserList->description = '后台用户列表';
        $adminUserList->save();

        $adminUserAdd = New Permission();
        $adminUserAdd->name = 'adminuser.add';
        $adminUserAdd->display_name = '添加后台用户';
        $adminUserAdd->description = '添加后台用户';
        $adminUserAdd->save();

        $adminUserEdit = New Permission();
        $adminUserEdit->name = 'adminuser.edit';
        $adminUserEdit->display_name = '修改后台用户';
        $adminUserEdit->description = '修改后台用户';
        $adminUserEdit->save();

        $adminUserDelete = New Permission();
        $adminUserDelete->name = 'adminuser.delete';
        $adminUserDelete->display_name = '删除后台用户';
        $adminUserDelete->description = '删除后台用户';
        $adminUserDelete->save();
    }

    /**
     * create permission permission
     */
    public function permission()
    {
        $permissionList = New Permission();
        $permissionList->name = 'permission.list';
        $permissionList->display_name = '权限列表';
        $permissionList->description = '权限列表';
        $permissionList->save();

        $permissionAdd = New Permission();
        $permissionAdd->name = 'permission.add';
        $permissionAdd->display_name = '添加权限';
        $permissionAdd->description = '添加权限';
        $permissionAdd->save();

        $permissionEdit = New Permission();
        $permissionEdit->name = 'permission.edit';
        $permissionEdit->display_name = '修改权限';
        $permissionEdit->description = '修改权限';
        $permissionEdit->save();

        $permissionDelete = New Permission();
        $permissionDelete->name = 'permission.delete';
        $permissionDelete->display_name = '删除权限';
        $permissionDelete->description = '删除权限';
        $permissionDelete->save();
    }

    /**
     * create role permission
     */
    public function role()
    {
        $roleList = New Permission();
        $roleList->name = 'role.list';
        $roleList->display_name = '角色列表';
        $roleList->description = '角色列表';
        $roleList->save();

        $roleAdd = New Permission();
        $roleAdd->name = 'role.add';
        $roleAdd->display_name = '添加角色';
        $roleAdd->description = '添加角色';
        $roleAdd->save();

        $roleEdit = New Permission();
        $roleEdit->name = 'role.edit';
        $roleEdit->display_name = '修改角色';
        $roleEdit->description = '修改角色';
        $roleEdit->save();

        $roleDelete = New Permission();
        $roleDelete->name = 'role.delete';
        $roleDelete->display_name = '删除角色';
        $roleDelete->description = '删除角色';
        $roleDelete->save();
    }

    public function user()
    {
        $userList = New Permission();
        $userList->name = 'users.list';
        $userList->display_name = '用户列表';
        $userList->description = "用户列表";
        $userList->save();

        $userAdd = New Permission();
        $userAdd->name = 'users.add';
        $userAdd->display_name = '增加用户';
        $userAdd->description = "增加用户";
        $userAdd->save();

        $userEdit = New Permission();
        $userEdit->name = 'users.edit';
        $userEdit->display_name = '编辑用户';
        $userEdit->description = "编辑用户";
        $userEdit->save();

        $userDelete = New Permission();
        $userDelete->name = 'users.delete';
        $userDelete->display_name = '删除用户';
        $userDelete->description = "删除用户";
        $userDelete->save();

        $userData = New Permission();
        $userData->name = 'users.data';
        $userData->display_name = '用户数据分析';
        $userData->description = "用户数据分析";
        $userData->save();

        $userVip = New Permission();
        $userVip->name = 'users.vip';
        $userVip->display_name = 'VIP用户';
        $userVip->description = "VIP用户";
        $userVip->save();

        $blackUser = New Permission();
        $blackUser->name = 'users.black';
        $blackUser->display_name = '黑名单';
        $blackUser->description = "黑名单";
        $blackUser->save();
    }

    public function document()
    {
        $this->models();
        $this->defaults();
        $this->projects();
        $this->materials();
        $this->decals();
        $this->plugins();
    }

    public function models()
    {
        $list = new Permission();
        $list->name = 'models.list';
        $list->display_name = '模型列表';
        $list->description = "模型列表";
        $list->save();

        $add = new Permission();
        $add->name = 'models.add';
        $add->display_name = '增加模型';
        $add->description = "增加模型";
        $add->save();

        $edit = new Permission();
        $edit->name = 'models.edit';
        $edit->display_name = '编辑模型';
        $edit->description = "编辑模型";
        $edit->save();

        $save = new Permission();
        $save->name = 'models.save';
        $save->display_name = '保存模型';
        $save->description = "保存模型";
        $save->save();

        $delete = new Permission();
        $delete->name = 'models.delete';
        $delete->display_name = '删除模型';
        $delete->description = "删除模型";
        $delete->save();

        $file = new Permission();
        $file->name = "models.file";
        $file->display_name = "模型文件";
        $file->description = "模型文件";
        $file->save();

        $image = new Permission();
        $image->name = "models.image";
        $image->display_name = "模型图片";
        $image->description = "模型图片";
        $image->save();
    }

    public function projects()
    {
        $list = new Permission();
        $list->name = 'projects.list';
        $list->display_name = '工程列表';
        $list->description = "工程列表";
        $list->save();

        $add = new Permission();
        $add->name = 'projects.add';
        $add->display_name = '增加工程';
        $add->description = "增加工程";
        $add->save();

        $edit = new Permission();
        $edit->name = 'projects.edit';
        $edit->display_name = '编辑工程';
        $edit->description = "编辑工程";
        $edit->save();

        $save = new Permission();
        $save->name = 'projects.save';
        $save->display_name = '保存工程';
        $save->description = "保存工程";
        $save->save();

        $delete = new Permission();
        $delete->name = 'projects.delete';
        $delete->display_name = '删除工程';
        $delete->description = "删除工程";
        $delete->save();

        $file = new Permission();
        $file->name = "projects.file";
        $file->display_name = "工程文件";
        $file->description = "工程文件";
        $file->save();

        $image = new Permission();
        $image->name = "projects.image";
        $image->display_name = "工程图片";
        $image->description = "工程图片";
        $image->save();
    }

    public function defaults()
    {
        $list = new Permission();
        $list->name = 'defaults.list';
        $list->display_name = '预设列表';
        $list->description = "预设列表";
        $list->save();

        $add = new Permission();
        $add->name = 'defaults.add';
        $add->display_name = '增加预设';
        $add->description = "增加预设";
        $add->save();

        $edit = new Permission();
        $edit->name = 'defaults.edit';
        $edit->display_name = '编辑预设';
        $edit->description = "编辑预设";
        $edit->save();

        $save = new Permission();
        $save->name = 'defaults.save';
        $save->display_name = '保存预设';
        $save->description = "保存预设";
        $save->save();

        $delete = new Permission();
        $delete->name = 'defaults.delete';
        $delete->display_name = '删除预设';
        $delete->description = "删除预设";
        $delete->save();

        $file = new Permission();
        $file->name = "defaults.file";
        $file->display_name = "预设文件";
        $file->description = "预设文件";
        $file->save();

        $image = new Permission();
        $image->name = "defaults.image";
        $image->display_name = "预设图片";
        $image->description = "预设图片";
        $image->save();
    }

    public function materials()
    {
        $list = new Permission();
        $list->name = 'materials.list';
        $list->display_name = '材质列表';
        $list->description = "材质列表";
        $list->save();

        $add = new Permission();
        $add->name = 'materials.add';
        $add->display_name = '增加材质';
        $add->description = "增加材质";
        $add->save();

        $edit = new Permission();
        $edit->name = 'materials.edit';
        $edit->display_name = '编辑材质';
        $edit->description = "编辑材质";
        $edit->save();

        $save = new Permission();
        $save->name = 'materials.save';
        $save->display_name = '保存材质';
        $save->description = "保存材质";
        $save->save();

        $delete = new Permission();
        $delete->name = 'materials.delete';
        $delete->display_name = '删除材质';
        $delete->description = "删除材质";
        $delete->save();

        $file = new Permission();
        $file->name = "materials.file";
        $file->display_name = "材质文件";
        $file->description = "材质文件";
        $file->save();

        $image = new Permission();
        $image->name = "materials.image";
        $image->display_name = "材质图片";
        $image->description = "材质图片";
        $image->save();
    }

    public function decals()
    {
        $list = new Permission();
        $list->name = 'decals.list';
        $list->display_name = '贴图列表';
        $list->description = "贴图列表";
        $list->save();

        $add = new Permission();
        $add->name = 'decals.add';
        $add->display_name = '增加贴图';
        $add->description = "增加贴图";
        $add->save();

        $edit = new Permission();
        $edit->name = 'decals.edit';
        $edit->display_name = '编辑贴图';
        $edit->description = "编辑贴图";
        $edit->save();

        $save = new Permission();
        $save->name = 'decals.save';
        $save->display_name = '保存贴图';
        $save->description = "保存贴图";
        $save->save();

        $delete = new Permission();
        $delete->name = 'decals.delete';
        $delete->display_name = '删除贴图';
        $delete->description = "删除贴图";
        $delete->save();

        $file = new Permission();
        $file->name = "decals.file";
        $file->display_name = "贴图文件";
        $file->description = "贴图文件";
        $file->save();

        $image = new Permission();
        $image->name = "decals.image";
        $image->display_name = "贴图图片";
        $image->description = "贴图图片";
        $image->save();
    }

    public function plugins()
    {
        $list = new Permission();
        $list->name = 'plugins.list';
        $list->display_name = '插件列表';
        $list->description = "插件列表";
        $list->save();

        $add = new Permission();
        $add->name = 'plugins.add';
        $add->display_name = '增加插件';
        $add->description = "增加插件";
        $add->save();

        $edit = new Permission();
        $edit->name = 'plugins.edit';
        $edit->display_name = '编辑插件';
        $edit->description = "编辑插件";
        $edit->save();

        $save = new Permission();
        $save->name = 'plugins.save';
        $save->display_name = '保存插件';
        $save->description = "保存插件";
        $save->save();

        $delete = new Permission();
        $delete->name = 'plugins.delete';
        $delete->display_name = '删除插件';
        $delete->description = "删除插件";
        $delete->save();

        $file = new Permission();
        $file->name = "plugins.file";
        $file->display_name = "插件文件";
        $file->description = "插件文件";
        $file->save();

        $image = new Permission();
        $image->name = "plugins.image";
        $image->display_name = "插件图片";
        $image->description = "插件图片";
        $image->save();
    }
}
