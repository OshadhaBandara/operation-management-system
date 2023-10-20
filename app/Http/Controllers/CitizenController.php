<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\Citizen;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

use function PHPUnit\Framework\returnSelf;

class CitizenController extends Controller
{
     function index(Request $req)
     {
 
            $req->validate([    

                'nic' => 'required|min:6|max:255',
                'password'  => 'required|min:6', 
            ]);
    

            $citizen = Citizen::where('nic', $req->nic)->firstOrFail();

            if ($citizen) {

                if($citizen->is_registered == true)
                {
                    if (Hash::check($req->password, $citizen->password)) { //check the password
        
                        //add citizen info to session
                        $req->session()->put('cfName', $citizen->first_name);
                        $req->session()->put('clName', $citizen->first_name);
                        $req->session()->put('is_clogin', true);
                        $req->session()->put('cemail', $citizen->email);
        
        
                        return redirect('profile-dashboard')->with('citizen', $citizen);

                    } else {
                        return back()->with('fail', 'This password is not correct');
                    }
                }
                else
                {
                    return back()->with('fail', 'You are not registered yet, Please create a account first');
                }
            }
            else
            {
                
                return back()->with('fail', 'Your NIC is not Registered Please Contact Your Grama Niladari');
               
            }

            
        
    
     }
}
