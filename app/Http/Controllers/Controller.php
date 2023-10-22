<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Psy\VersionUpdater\Checker;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function login()
    {
       // dd(request()->all());

        request()->validate([
            'email'=>"required|min:6|max:255",
            'password'=>"required|min:6|max:255",
        ]);

     

        $user = User::where('email', request()->email)->first();


           

          if($user)
          {
            if(Hash::check( request()->password, $user->password))
            {


                //add citizen info to session
                request()->session();
                
                session()->put('is_admin_login',true);
                session()->put('afname',$user->fname );
                session()->put('alname',$user->lname );
                session()->put('is_view_user',$user->is_view_user );
                session()->put('is_edit_user',$user->is_edit_user );
                session()->put('is_edit_user_access',$user->is_edit_user_access );
                session()->put('is_view_citizen',$user->is_view_citizen );
                session()->put('is_edit_citizen',$user->is_edit_citizen );
                session()->put('is_manage_appointment',$user->is_manage_appointment );
                session()->put('profile_file_name',$user->profile_file_name );

        

                /* dd(session()->all()); */
                return redirect('admin-dashboard');
            }
            else
            {
                return back()->with('fail', 'Your password is incorrect !');
            }

          }
          else
          {
             return back()->with('fail', 'Email is not registered !');
          }
    }

    function flush()
    {
        // Clear the session data
        session()->flush();

        // Redirect to home
       return redirect('admin-login');
    }
}
