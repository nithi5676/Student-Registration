<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Http\Requests\Updateform;

class hospitalController extends Controller
{
         public function index()
         {
            $users = hospital::all();
            return view('admin.index', compact('users'));
         }
         public function edit($user_id)
         {
            $users = hospital::find($user_id);
             return view ('admin.edit',compact('users'));
         }
         public function update(Updateform $request , $user_id)
         {
                $data = $request->validated();
                $users= hospital::where('id',$user_id)->update([
                        'reg_no' =>$data['reg_no'],
                        'name' => $data['name'],
                        'dob' =>$data['dob'],
                        'student_id' => $data['student_id'],
                        'city' => $data['city'],
                        'state' => $data['state'],
                        'zipcode' => $data['zipcode'],
                        'email' => $data['email'],
                        'college_name' => $data['college_name'],
                        'degree' => $data['degree'],
                        'speciality' => $data['speciality'],
      
                ]);
                return redirect('/admin')->with('message','Student Updated Successfully');

         }
                public function destroy($user_id)
                {
                        $users = hospital::find($user_id)->delete();
                        return redirect('/admin')->with('message','Student deleted Successfully');

                }
        }
