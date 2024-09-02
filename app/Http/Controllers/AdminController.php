<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Hashing\Hasher;

class AdminController extends Controller
{
    Public function list()
    {   
        $data['getRecord'] = User::getAdmin();
        $data ['header_title'] = "Admin List";
        return view('admin.admin.list',$data);
    }
     Public function addAdmin()
    {   
        $data ['header_title'] = "Add New Admin";
        return view('admin.admin.addAdmin',$data);
    }
     Public function insert(Request $request, Hasher $hasher)
    {  
       request()->validate([
        'name' => 'required|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'address' => 'required|string|max:255',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
    
       $user = new User;
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       $user->password = Hash::make($request->password);
       $user->user_type = 1;
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
       $user->created_at = now();
       $user->save();

       return redirect('admin/admin/list')->with('success',"Admin Successfully Cereated");
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
        //'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
        $destination = 'uploads/'.$user->profile_image;
        //Delete the old image
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
       $user->updated_at = now(); 
       $user->update();

       return redirect('admin/admin/list')->with('success',"Successfully Update");
    

    }

      Public function delete($id)
    {  
       $user = User::getSingle($id);
       $user->is_delete = 1;
       $user->save();

       return redirect('admin/admin/list')->with('success',"Admin Successfully Deleted");
    } 
    // ######### If we want to delete a record from the tabel we can use below funtion ######

//     public function delete($id)
//     {
 
//     $user = User::getSingle($id);
//     $user->delete();
//     return redirect('admin/admin/list')->with('success', 'User deleted successfully');
//     }

    
}
