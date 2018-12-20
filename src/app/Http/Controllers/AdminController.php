<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Country;
use App\Experience;

use DB;

class AdminController extends Controller
{
    public function displayMainView() {
        return view('admin.main');
    }

    public function displayUsers() {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function updateUserView($id) {
        $user = User::find($id);
        return view('auth.update', compact('user'));
    }

    public function updateUser() {
        $user = User::find($_POST['id']);
        $new_data = [
            "name" => $_POST["name"],
            "surname" => $_POST["surname"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
        ];
        DB::table('users')
        ->where('id', $_POST["id"])
        ->update($new_data);
        $users=User::all();
        return view('admin.users', compact('users'));
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        $users=User::all();
        return view('admin.users', compact('users'));
    }

    public function promoteUser($id) {
        DB::table('users')
        ->where('id', $id)
        ->update(['role' => 'admin']);
        $users=User::all();
        return view('admin.users', compact('users'));
    }

    public function demoteUser($id) {
        DB::table('users')
        ->where('id', $id)
        ->update(['role' => 'user']);
        $users=User::all();
        return view('admin.users', compact('users'));
    }

    // public function displayCountries() {
    //     $countries = Country::all();
    //     return view('admin.countries', compact('countries'));
    // }

    // public function displayExperiences() {
    //     $experiences = Experience::all();
    //     return view('admin.experiences', compact('experiences'));
    // }
}
