<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\TeamDataTable;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TeamController extends Controller
{
    public function index(TeamDataTable $dt){
        return $dt->render('admin.team.index');
    }


    public function store(Request $r){
        try {
            DB::beginTransaction();

            $image = $this->uploadImage($r->image,'Team/');

            Team::create([
                'name'=>$r->name,
                'position'=>$r->position,
                'image'=>$image,
                'fb_link'=>$r->fb_link??null,
                'x_link'=>$r->x_link??null,
                'lk_link'=>$r->lk_link??null,
            ]);
DB::commit();
            alert()->success('Eureka','Team member Added!');
            return back();
        } catch (Exception $e) {
            DB::rollBack();
            Log::info('Error Creating User:::'.$e->getMessage());
            alert()->error('Action Aborted!','Something went wrong processing your request');
            return back();
        }
    }

    public function edit($id){
        $team = Team::find($id);

        if($team !==null){
            return view('admin.team.edit',compact('team'));
        }else{
            alert()->error('Action Aborted!','Team Member Not Found');
            return back();
        }
    }

    public function update(Request $r,$id){
        $team = Team::find($id);

        if($team !==null){
     
            if($r->hasFile('image')){
                $this->deleteImage($team->image);
        $image = $this->uploadImage($r->image,'Team/');

        $team->update([
            'name'=>$r->name,
            'position'=>$r->position,
            'image'=>$image,
            'fb_link'=>$r->fb_link??null,
            'x_link'=>$r->x_link??null,
            'lk_link'=>$r->lk_link??null,
         ]);
            }else{
                $team->update([
                    'name'=>$r->name,
                    'position'=>$r->position,
                    'fb_link'=>$r->fb_link??null,
                    'x_link'=>$r->x_link??null,
                    'lk_link'=>$r->lk_link??null,
                 ]);
            }
        
            alert()->success('Eureka','Team member Updated!');
            return redirect()->route('team.index');
        
        }else{
            alert()->error('Action Aborted!','Team Member Not Found');
            return back();
        }
    }


    public function delete($id){
        $team = Team::find($id);

        if($team !==null){
            $this->deleteImage($team->image);

            $team->delete();
            alert()->success('Eureka','Team Member Removed');
            return back();
        }else{
            alert()->error('Action Aborted!','Team Member Not Found');
            return back();
        }
    }
}
