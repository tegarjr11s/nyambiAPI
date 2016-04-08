<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Models\Collection;
use APp\Api\V1\Transformers\CollectionTransformer;

class CollectionsController extends ApiController
{
	public function show()
	{
		$Collections = Collection::all();

		return $this->response->collection($collections, new CollectionTransformer);
	}
}