<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Biography;
use App\Category;
use App\Contact;
use App\Comment;
class UserController extends Controller
{
     public function index(){
    	$posts=Post::all();
      $categories=Category::all();
      $biographies=Biography::all();


    	 return view('welcome', compact('posts', 'categories','biographies'));
    	
    }
     public function show($id){
      $comments = Comment::all();
      $p = Post::findOrFail($id);
      
      
        return view('postcontent',compact('p', 'comments'));


}
	public function biography(){
		$biography=Biography::all();
		return view('biography',[
			'biographies'=>$biography]);
	}
     
   public function categories(){
            $categories=Category::all();
            foreach($categories as $category){
                echo "<p> <a href='".route("categories",['id'=> $category->category_id]). "'>" .$category->category_name."</a></p>";
     }
}

  public function contact(){
    return view('contact');
  }
  public function addcontact(Request $request){

      $contact=new Contact();
      $contact->fullname=$request->fullname;
      $contact->email=$request->email;
      $contact->city=$request->city;
      $contact->content=$request->content;

      $contact->save();

      return redirect('/contact');
      
  }



  public  function postcategories($id) {
    $categories = Category::findOrFail($id);
    $posts = Post::findOrFail($id);

   
    return view('categories', compact('posts', 'categories'));
   
    
    }
  public function comment(Request $request){
       $comment=new Comment();
      
       $comment->post_id=$request->input('id');
       $comment->username=$request->username;
       $comment->content=$request->content;
       $comment->save();

       

    }
  


}

