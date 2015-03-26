<?php namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog\Art;
use \Input;
use \Auth;

use Illuminate\Http\Request;

class ArtController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        Auth::check();
        $user = Auth::getUser();
        $posts = Art::where('id_user','=',$user->id)->get();
        return view('blog.art', array('user_id' => $user['id'],'posts' => $posts,'user' => $user['name']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('blog.art_add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::only(['name','title','text']);
        $user = Auth::getUser();
        $data['id_user']=$user->id;
        if(Input::get('active')){
            $data['active']=true;
        }

        $res = Art::create($data);
        /*if($res == true){
            $res = 'Создан новый блог';
        }else{
            $res = 'Блог не создан';
        }*/
        return view('blog.art')->with('res',$res);
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
