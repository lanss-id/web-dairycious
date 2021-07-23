<?php

namespace App\Http\Controllers\Admin\core;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Entities\Admin\core\Category;
use App\Entities\Admin\core\Language;
use App\Entities\Admin\core\MenuAccess as MenuAccess;
use App\Http\Controllers\Controller;
use DB;
use Image;
use File;

class ThemeController extends Controller
{

	public function top_bar()
	{
		$data['menu_item'] = MenuAccess::select('*')
		->leftjoin('menus', 'menus.id', '=', 'menu_access.menu_id')
		->where('role_id', \Session::get('role_id'))
		->where('menus.parent_id', '0')
		->where('menus.deleted_at', null)
		->orderBy('order_num','ASC')
		->get();

		$data['setting']   = MenuAccess::select('*')
		->leftjoin('menus', 'menus.id', '=', 'menu_access.menu_id')
		->where('role_id', \Session::get('role_id'))
		->where('menus.parent_id', '!=', 0)
		->where('menus.deleted_at', null)
		->orderBy('order_num','ASC')
		->get();

		return $data;
	}

    public function index(){
        return view('admin.core.theme.index');
    }

}
