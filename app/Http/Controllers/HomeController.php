<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Using Query Builder
        // Insert data into users table
        // DB::table('users')->insert([
        //     'name' => 'John Meng',
        //     'email' => 'jm@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // get Data from users table
        // $users = DB::table('users')->where('email', 'jm@gmail.com')->first();
        // return $users;

        // Update data in users table
        // DB::table('users')->where('email', 'jm@gmail.com')->update([
        //     'name' => 'John Mingg'
        // ]);

        // Delete data from users table
        // DB::table('users')->where('email', 'jm@gmail.com')->delete();

        // get a list of column values
        // $users = DB::table('blogs')->pluck('id','title','description')->toArray();
        // dd($users);

        //
        // $products = DB::table('products')->count();

        // dd($products);

        // using Eloquent ORM
        // create a new user
        // $user = new User();
        // $user->name = 'Mary Jane';
        // $user->email = 'mj@gmail.com';
        // $user->password = '12345678';
        // $user->save();

        // get all users
        // $users = User::where('email', 'mj@gmail.com')->get();
        // dd($users);
        
        // Update user
        // $user = User::find(3);
        // $user->name = 'Mary J';
        // $user->save();

        // Delete user
        // $user = User::find(3);
        // $user->delete();
        
        // Mass insertion
        // User::insert([
        //     [
        //     'name' => 'Alice',
        //     'email' => 'a@gmail.com',
        //     'password' => '12345678'
        //     ] ,
        //      [
        //     'name' => 'Ben',
        //     'email' => 'b@gmail.com',
        //     'password' => '12345678'
        //     ]             
        // ]);

        // conditional clauses
        // $products = Product::where('id', '>', 5)->where('price','>', 200)->get();
        // $products = Product::where('name', 'like', '%odi%')->where('price','>', 200)->get();
        // $products = Product::where('id', '>', 5)->orWhere('price','>', 200)->get();
        // $products = Product::whereIn('id', [1,3,5])->get();
        // $products = Product::whereBetween('price', [150,250])->get();
        // dd($products);

        // Eloquent local scopes
        // $blogs = Blog::Active()->TopTen()->get();
        // return $blogs;
     
        // Soft Deletes
        //$products = Product::find(1)->delete(); // soft delete
        //$products = Product::all(); // exclude soft deleted records
        //$products = Product::withTrashed()->get(); // include soft deleted records
        //$products = Product::onlyTrashed()->get(); // only soft deleted records
        //return $products;

        // Restore soft deleted records
        //$products = Product::withTrashed()->find(1)->restore(); 

        // Permanently delete a soft deleted record
        //$products = Product::withTrashed()->find(1)->forceDelete();

        return view('welcome');
    }

    function showAbout()
    {
        return view('about');
    }
}
