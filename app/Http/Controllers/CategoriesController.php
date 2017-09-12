<?php

namespace App\Http\Controllers;

use App\Models\Category; // as Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{

    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->repository->paginate(10);
        // $categories = Category::query()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        $url = $request->get('redirect_to', route('categories.index'));
        $request->session()->flash('message', 'Categoria cadastrada com sucesso.');
        return redirect()->to($url);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {        
        return view('categories.edit', compact('App\Models\Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
                
        $category->fill($request->all());
        $category->save();
        $url = $request->get('redirect_to', route('categories.index'));
        $request->session()->flash('message', 'Categoria alterada com sucesso.');
        return redirect()->to($url);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        \Session::flash('message', 'Categoria excluída com sucesso.');
        return redirect()->to(\URL::previous());
    }
}
