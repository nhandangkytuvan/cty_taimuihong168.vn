<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Setting;
use App\View;
use Session;
use BrowserDetect;
class PostController extends Controller{
    public function show($post_alias,$post_id,Request $request){
    	$user = Session::get('user');
    	$post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
        // --------------
        if(View::where('post_id',$post_id)->exists()){
            $view = View::where('post_id',$post_id)->first();
        }else{
            $view = new View;
            $view->post_id = $post_id;
        }
        $view->view_sum ++;
        $view->save();
        // ------------
        $data['post'] = $post;
      //   if(BrowserDetect::isDesktop()){
    		// if($post_id == 2){
    		// 	return view('web.desktop.post_2',['data'=>$data]); 
    		// }
      //   	return view('web.desktop.post',['data'=>$data]); 
      //   }else{
      //   	if($post_id == 2){
    		// 	return view('web.mobile.post_2',['data'=>$data]); 
    		// }
        	return view('web.mobile.post',['data'=>$data]); 
        //}
    }
}