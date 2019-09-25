<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Contact;
class AdminController extends Controller
{
    public function index(){
    	return view('admin.admin');
    	
    }
    public function addpost(){
    	$post=Post::all();
    	return view('admin.addpost',[
    		'posts'=> $post]);
    	
    }

    public function create(Request $request){

    	$post=new Post();
    	$post->title=$request->title;
    	$post->content=$request->content;

    	$post->save();

    	return redirect('/admin/addpost');
    }
    public function edit($id){

    $data['post']=Post::find($id);
    if($data['post']!==null){
        return view('admin.edit',$data);
    }
    else{
        echo "se gjeta";
    }
    } 

    public function update(Request $request){ 
        $id=$request->input('id');
        $post=POST::find($id);

        if($post !== null){
            $post->title=filter_var($request->input('title'),FILTER_SANITIZE_STRING);
            $post->content=filter_var($request->input('content'),FILTER_SANITIZE_STRING);//edhe qeky funksion osht per siguri

           
            $post->save();
            return redirect('/admin/addpost');
        }
        else{
                echo "Nuk e gjeta";
        }
   } 

   public function destroy($id){
    $post=Post::find($id);
    $post->delete();

    return redirect('admin/addpost');
   }

    public function showcontacts(){

        $contact=Contact::all();
        
         
        return view('admin.showcontacts',[
            'contacts'=> $contact]);
        
    }
        
    }
   
    
   
    

