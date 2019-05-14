<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RolesController extends Controller {

  public function insertform() {

      return view('roles');
  }

    public function insert (Request $request) {

        $admin = $request->input('admin');
        $user_id = $request->input('user_id');



        $data = array('admin'=>$admin, "user_id"=>$user_id);

        DB::table('roles')->insert($data);
        //echo "Project inserted successfully.<br/>";
        //echo '<a href = "/home">Click Here</a> to go back.';
        return redirect()->to('/home');

    }
}
