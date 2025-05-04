<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Mail\AdminAccountNotification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(UsersDataTable $dt){
return $dt->render('admin.users.index');
    }

    public function store(Request $r){
        try {
            DB::beginTransaction();
            $pass = Str::random(8);

            User::create([
                'name'=>$r->name,
                'email'=>$r->email,
                'role'=>$r->role,
                'password'=>Hash::make($pass)
            ]);

            $data=[
                'name'=>$r->name,
                'email'=>$r->email,
                'password'=>$pass
            ];
            Mail::to($r->email)->send(new AdminAccountNotification($data));
            DB::commit();
            alert()->success('Eureka','User Account Created!');
            return back();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error Creating User:::'.$e->getMessage());
            alert()->error('Action Aborted!','User Account Not Created');

            return back();
        }
    }


    public function edit($id){
        $user = User::find($id);

        if($user !==null){
            return view('admin.users.edit',compact('user'));

        }else{
            alert()->error('Action Aborted!','User Not Found');
            return back();
        }
    }


    public function update(Request $r,$id){
        $user = User::find($id);

        if($user !==null){
          $user->update([
           'name'=>$r->name,
                'email'=>$r->email,
                'role'=>$r->role,
          ]);
alert()->success('Eureka!','User updated!');
          return redirect()->route('users.index');

        }else{
            alert()->error('Action Aborted!','User Not Found');
            return back();
        }
    }

    public function account_status($id){
        $user = User::find($id);

        if($user !==null){
         $user->update([
            'is_enabled'=>$user->is_enabled == true?false:true
         ]);

         alert()->success('Eureka!','User Access updated!');
          return redirect()->route('users.index');

        }else{
            alert()->error('Action Aborted!','User Not Found');
            return back();
        }
    }
}
