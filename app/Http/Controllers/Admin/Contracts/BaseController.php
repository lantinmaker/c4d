<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/5/29 0029
 * Time: 10:53
 */

namespace App\Http\Controllers\Admin\Contracts;


use Illuminate\Http\Request;

interface BaseController
{
    public function index();
    public function create();
    public function update(Request $request);
    public function store(Request $request);
    public function edit($id);
    public function destory($id);
    public function images($id);
    public function files($id);
}