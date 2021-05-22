<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @function  后台框架初始化接口
     * @return \Illuminate\Http\JsonResponse
     */
    public function init()
    {
//        $data = [
//           "homeInfo" => [
//               'title' => "管理后台首页",
//               "href" => route('admin.index')
//           ],
//            "logoInfo" => [
//                "title" => "LAYUI MINI",
//                "image"=> "/static/admin/images/logo.png",
//                "href" => ""
//            ],
//            "menuInfo" => [
//                [
//                    'title' => '常规管理',
//                    "icon" => 'fa fa-address-book',
//                    "href" => "",
//                ]
//            ]
//        ];
        $file = file_get_contents('static/admin/api/init.json');
        $data = json_decode($file,true);
        return response()->json($data);
    }
}
