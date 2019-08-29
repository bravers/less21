<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Services\AuthorsServices;

class AuthorsController extends Controller
{

    protected $authors_service;



    public function __construct(AuthorsRepository $authors_repository)
    {
        
        $this->authors_repository = $authors_repository;

    }
    
    public function store(StoreAuthorRequest $request)
    {
    	$data = $request->only(['name']);

    	$this->authors_service->store($data);

    	return response()->json([
    		'success' => true
    	]);
    }

    public function update(StoreAuthorRequest $request, Author $author)
    {
    	$data = $request->only(['name']);

    	$author->fill($data);
    	$author->save();

    	return response()->json([
    		'success' => true
    	]);
    }

    public function delete(Author $author)
    {
    	$author->delete();

    	return response()->json([
    		'success' => true
    	]);
    }

    public function index()
    {
    	$authors = Author::all();

    	return $authors;
    }

    
}
