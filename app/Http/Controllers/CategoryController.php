<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class CategoryController extends Controller
{
    protected $client;

    public function __construct()
    {
        $client = new Client ([
            // Base URI is used with relative requests
            'base_uri' => 'https://lienquan-hackathon.herokuapp.com',
            // You can set any number of default request options.
        ]);

        $this->client = $client;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->client->request('GET', 'category');
        $data = (string) $response->getBody();
        $listCategory = json_decode($data)->result;

        return view('admin.category.index', ['listCategory' => $listCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->only('title', 'des', 'img');
        $response = $this->client->post('category', [
            'form_params' => $params
        ]);

        return redirect()->route('categories.index');
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
    public function edit($id)
    {
        $response = $this->client->get('category/' . $id);
        $data = (string) $response->getBody();
        $category = json_decode($data)->result;

        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->only('id', 'title', 'des', 'img');
        $response = $this->client->put('category', [
            'form_params' => $params,
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
