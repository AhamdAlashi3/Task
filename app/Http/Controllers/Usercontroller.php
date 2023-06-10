<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //

    public function index(){
       $users=User::all();
       return view('users.indexs',$users);
   }

    public function edit(){
        return view('users.edit')->with('user',auth()->user());
   }

   public function update(Request $request){

    $user=auth()->user();

    $user->DB::update('update users set votes = 100 where name = ?', ['John']);([
        'name'=>$request->name,
        'about'=>$request->about,
    ]);

    session()->flash('sucsess','User update successfully');

   }




   public function create()
   {
       //
       $user=User::all();
       return response()->view('users.create',$user);

   }


   public function store(Request $request)
   {
       //
       $request->validate([
           // 'admin_id'=>'required|string|min:3|max:30',
           'name' => 'required|string|min:3|max:30',
           'active' => 'in:on',
       ], [
           'name.required' => 'City name is required!',
           'name.min' => 'Name must be at least 3 characters'
       ]);
       $city = new User();
       $city->name = $request->get('name');
       $city->active = $request->has('active');
       // $city->admin_id=$request->get('admin_id');
       $isSaved = $city->save();
       if ($isSaved) {
           session()->flash('message', 'City created successfully');
           return redirect()->route('city.create');
       } else {
       }

   }


   public function destroy($id)
   {
       //
       $city = User::findOrFail($id);
       $this->authorize('delete', $city);
       $isDeleted = $city->delete();
       if ($isDeleted) {
           // return redirect()->back();
           return response()->json(['title' => 'Deleted!', 'message' => 'City Deleted Successfully', 'icon' => 'success'], 200);
       } else {
           return response()->json(['title' => 'Failed!', 'message' => 'Delete city failed', 'icon' => 'error'], 400);
       }

   }

}
