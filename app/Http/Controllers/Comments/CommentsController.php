<?php namespace App\Http\Controllers\Comments;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Models\Blog\Art;
use App\Models\Blog\Comments;
use \Input;
use \Auth;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        Auth::check();
        $user = Auth::getUser();
        $id_blog = Input::get('id_blog');
//        $posts = Art::where('id_user','=',$user->id)->get();
        $comments = Comments::where('id_user','=',$user->id,'and')
            ->where('id_blog','=',$id_blog)->get();
        return view('comments.comments', array('user_id' => $user['id'],'id_blog' => $id_blog,'comments' => $comments,'user' => $user['name']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('comments.comments_add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::only(['name','title','text','id_blog']);
        $user = Auth::getUser();
        $data['id_user']=$user->id;
        if(Input::get('active')){
            $data['active']=true;
        }

        $res = Comments::create($data);
        /*if($res == true){
            $res = 'Создан новый блог';
        }else{
            $res = 'Блог не создан';
        }*/
        return view('comments.comments')->with('res',$res);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
