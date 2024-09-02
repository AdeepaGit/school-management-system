<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Contracts\Hashing\Hasher;

class StudentController extends Controller
{
     Public function list()
    {   
        $data['getRecord'] = User::getStudent();
        $data ['header_title'] = "Student List";
        return view('admin.admin.studentList',$data);
    }
     Public function addStudent()
    {   
        $data ['header_title'] = "Add New Student";
        return view('admin.admin.addStudent',$data);
    }
    
    Public function insert(Request $request)
    {  
       request()->validate([
        'name' => 'required|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'mobile' => 'required|digits:10',
        'address' => 'required|string|max:255',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
    
        
       $user = new User;
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       $user->password = Hash::make($request->password);
       $user->user_type = 2;
       $user->gender = trim($request->gender);
       $user->mobile =  (string) $request->mobile;
       $user->address = trim($request->address);
       if ($request->hasFile('profile_image'))
       {
        
        // Upload the new image
        $image = $request->file('profile_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $user->profile_image = $imageName;
        
       }
       $user->save();

       return redirect('admin/admin/students')->with('success',"Student Successfully Cereated");
    }
    Public function edit($id)
    {   
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
             $data['header_title'] = "Edit Admin";
             return view('admin.admin.edit',$data);
        }
        else
        {
            alert('404');
        }
    }
     Public function update($id,Request $request, Hasher $hasher)
    {  
        request()->validate([
        'name' => 'regex:/^[A-Za-z\s]+$/',
        'email' => 'email|unique:users,email,'.$id,
        'address' => 'string|max:255',
       ]);
     

       $user = User::getSingle($id);
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       if(!empty($request->password))
       {
          $user->password = Hash::make($request->password);
       }
       $user->gender = trim($request->gender);
       $user->mobile =  (string) $request->mobile;
       $user->address = trim($request->address);
       
       if ($request->hasFile('profile_image'))
       {
        $destination = 'uploads'.$user->profile_image;
        // Delete the old image
        if(File::exists($destination))
         {
            unlink($destination);
         }
        // Upload the new image
        $image = $request->file('profile_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $user->profile_image = $imageName;
        
       }
       $user->update();

       return redirect('admin/admin/students')->with('success',"Successfully Update");
    
    }
    Public function delete($id)
    {  
       $user = User::getSingle($id);
       $user->is_delete = 1;
       $user->save();

       return redirect('admin/admin/students')->with('success',"Successfully Deleted");
    }
     // ######### If we want to delete a record from the tabel we can use below funtion ######

//     public function delete($id)
//     {
 
//     $user = User::getSingle($id);
//     $user->delete();
//     return redirect('admin/admin/students')->with('success', 'User deleted successfully');
//     }

}
