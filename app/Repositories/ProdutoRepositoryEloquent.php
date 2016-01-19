<?php

namespace Codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Codedelivery\Repositories\ProdutoRepository;
use Codedelivery\Models\Produto;

/**
 * Class ProdutoRepositoryEloquent
 * @package namespace Codedelivery\Repositories;
 */
class ProdutoRepositoryEloquent extends BaseRepository implements ProdutoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produto::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}