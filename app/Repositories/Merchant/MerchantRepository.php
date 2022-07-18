<?php

namespace App\Repositories\Merchant;

use App\Models\Merchant;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

/**
 * Class Forum Repository
 */
class MerchantRepository extends BaseRepository
{
    /**
     * Merchant Repository constructor.
     *
     * @param  Merchant  $model
     */
    public function __construct(Merchant $model)
    {
        $this->model = $model;
    }

    public function getMerchants($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {

        $query = Merchant::where($conditions)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }

    public function getAllMerchants($conditions = [], $paged = 25, $orderBy = 'created_at', $sort = 'desc')
    {

        $query = Merchant::where($conditions)
            ->orderBy($orderBy, $sort);
        return $query->paginate($paged);
    }


  
}
