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

                'nic_l' => 'required|min:6|max:255',
                'password_l'  => 'required|min:6', 
            ]);


            $citizen = Citizen::where('nic', $req->nic_l)->firstOrFail();

            if ($citizen) {

                if($citizen->is_registered == true)
                {
                    if (Hash::check($req->password_l, $citizen->password)) { //check the password
        
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


    function store(Request $req)
    {
         $req->validate([
            'nic' => 'required|min:6|max:15',
            'password' => 'required|min:6|max:255',
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:13',
            'district' => 'required',
            'division' => 'required',
        ]);

       

        // Validate the registration conditions


        $citizen = Citizen::where('nic', $req->nic)->first();

       


        if (!$citizen) {
            return back()->with('fail', 'Your NIC is not registered on District Secretariat. Please contact your Grama Niladari.');
        } elseif ($citizen->is_registered) {
            return back()->with('fail', 'You have already registered. Please log in.');
        } elseif ($citizen->district != $req->district) {
            return back()->with('fail', 'Your district does not match. Please try again.');
        } elseif ($citizen->division != $req->division) {
            return back()->with('fail', 'Your division does not match. Please try again.');
        }



        // Set the attributes from the validated data
        $citizen->password = Hash::make($req['password']);
        $citizen->fname = $req['fname'];
        $citizen->lname = $req['lname'];
        $citizen->email = $req['email'];
        $citizen->phone = $req['phone'];
        $citizen->is_registered = true; 

        // Save the new Citizen to the database
        $citizen->update();

        //add citizen info to session
        $req->session()->put('cfName', $citizen->fname);
        $req->session()->put('clName', $citizen->lname);
        $req->session()->put('is_clogin', true);
        $req->session()->put('cemail', $citizen->email); 

        // Redirect the user after successful registration
        return redirect('profile-dashboard')->with('citizen', $citizen);
        

    }


    // Logout citizen
    function flush()
    {
        // Clear the session data
        session()->flush();

        // Redirect to a specific route or URL after logging out
        return redirect('/');
    }

}
