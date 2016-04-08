<?php 

namespace App\Api\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Api\V1\Models\Collection;

class CollectionTransformer extends TransformerAbstract 
{
	public function transform(Collection $collection)
	{
		return $collection;
	}
}