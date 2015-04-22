<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Controllers\Controller;
use App\News;
use Auth;
use Carbon\Carbon;

use Request;

class NewsController extends Controller {

    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
	//
    public function index(){
        $news = News::latest('publish_at')->published()->get();
        return view('news.index',compact('news'));
    }

    public function show($id){
        $news = News::find($id);
        if(is_null($news))
        {
            abort(404);
        }
        //dd($news->publish_at);
        return view('news.show')->with(['news'=>$news]);
    }

    public function create(){
        return view('news.create');
    }

    public function store(CreateNewsRequest $request){
        $news = new News($request->all());
        Auth::user()->news()->save($news);

        return redirect('news');
    }

    public function edit($id){
        $news = News::findOrFail($id);
        return view('news.edit',compact('news'));
    }

    public function update($id, CreateNewsRequest $request){
        $news = News::findOrFail($id);
        $news->update($request->all());
        return redirect('news');
    }
}
