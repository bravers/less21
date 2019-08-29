<?php


	namespace App\Repositories;


	use App\Author;

	class AuthorsRepositories extends AbstractRepository {

	protected abstract funtion getClassName() : string
	

		{
			return Author::class;
		}


	}