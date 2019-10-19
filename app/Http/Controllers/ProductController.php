<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class ProductController extends Controller
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
        $response = $this->client->request('GET', 'product');
        $data = (string) $response->getBody();
        $listProduct = json_decode($data)->result;

        foreach ($listProduct as $product) {
            $response = $this->client->get('category/' . $product->categoryId);
            $data = (string) $response->getBody();
            $titleCategory = json_decode($data)->result->title;
            $product->titleCategory = $titleCategory;
        }

        return view('admin.product.index', ['listProduct' => $listProduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = $this->client->request('GET', 'category');
        $data = (string) $response->getBody();
        $listCategory = json_decode($data)->result;

        return view('admin.product.create', ['listCategory' => $listCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->only('title', 'img', 'des', 'price', 'sale', 'rate', 'categoryId');
        $params['createDate'] = '';
        $response = $this->client->post('product', [
            'form_params' => $params
        ]);

        return redirect()->route('products.index');
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
        $response = $this->client->get('product/' . $id);
        $data = (string) $response->getBody();
        $product = json_decode($data)->result;

        $response = $this->client->request('GET', 'category');
        $data = (string) $response->getBody();
        $listCategory = json_decode($data)->result;

        $compacts = [
            'product' => $product,
            'listCategory' => $listCategory,
        ];

        return view('admin.product.edit', $compacts);
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
        $params = $request->only('id', 'title', 'img', 'des', 'price', 'sale', 'rate', 'categoryId');
        $response = $this->client->put('product', [
            'form_params' => $params,
        ]);

        return redirect()->route('products.index');
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
