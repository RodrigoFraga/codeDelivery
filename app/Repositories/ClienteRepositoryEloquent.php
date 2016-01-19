<?php

namespace Codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Codedelivery\Repositories\ClienteRepository;
use Codedelivery\Models\Cliente;

/**
 * Class ClienteRepositoryEloquent
 * @package namespace Codedelivery\Repositories;
 */
class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cliente::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
