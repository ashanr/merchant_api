<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;

use App\Repositories\Merchant\MerchantRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Models\User;
use DateTime;

class MerchantController extends Controller
{
    use ResponseTrait; // Trait for http response
    /**
     * @var MerchantRepository
     */
    protected $MerchantRepository;

    public function __construct(MerchantRepository $MerchantRepository)
    {
        $this->MerchantRepo = $MerchantRepository;
    }

    //List Merchants
    public function listMerchant(Request $request)
    {
        $conditions = [];
        $orderBy = 'MerchantID';
        $sort = 'asc';
        $paged = 10;

        if ($request->filled('sort') && !empty($request->get('sort'))) {
            $tempSort = $request->get('sort');
            $splitSort = explode('|', $tempSort, 2); // Restricts it to only 2 values, for order by and and sort field.
            $orderBy = $splitSort[0];
            $sort = !empty($splitSort[1]) ? $splitSort[1] : '';
        }

        $today =  date("Y-m-d");
        if (request("start_date") == $today) {
            $midnightyesterday2 = new DateTime();
            $midnightyesterday2->setTime(0, 0);
            $from_date = $midnightyesterday2->format("Y-m-d H:i:s");
            $new_from_date  = $from_date;
        } else {

            $from_date = request("start_date");
            $new_from_date = $from_date . " 0:0:0";
        }


        if (request("end_date") == $today) {
            $midnightyesterday2 = new DateTime();
            $midnightyesterday2->setTime(23, 59, 59);
            $to_date = $midnightyesterday2->format("Y-m-d H:i:s");
            $new_to_date = $to_date;
        } else {
            $to_date = request("end_date");
            $new_to_date = $to_date . " 23:59:59";
        }


        if ($request->filled('per_page') && !empty($request->get('per_page'))) {
            $paged = $request->get('per_page');
        }

        if ($request->filled('district')) {
            $conditions[] = ['District', 'like', '%' . $request->get('district') . '%'];
        }
        if ($request->filled('postal_code')) {
            $conditions[] = ['PostalCode', 'like', '%' . $request->get('postal_code') . '%'];
        }

        if ($request->filled('start_date')) {
            $conditions[] = ['PaymentDate', '>=', $request->get('start_date')];
        }
        if ($request->filled('end_date')) {
            $conditions[] = ['PaymentDate', '<=', $request->get('end_date')];
        }
      
        $merchants =  $this->MerchantRepo->getMerchants($conditions, $paged, $orderBy, $sort, $new_from_date, $new_to_date)->toArray();

        if (!empty($merchants)) {
            return response()->json(
                $merchants,
                200
            );
        } else {
            return response()->json(
                [
                    'data' => 'No Data Found'
                ],
                404
            );
        }
    }

    public function listAll(Request $request)
    {
        $conditions = [];
        $orderBy = 'MerchantID';
        $sort = 'asc';
        $paged = 10;

        if ($request->filled('sort') && !empty($request->get('sort'))) {
            $tempSort = $request->get('sort');
            $splitSort = explode('|', $tempSort, 2); // Restricts it to only 2 values, for order by and and sort field.
            $orderBy = $splitSort[0];
            $sort = !empty($splitSort[1]) ? $splitSort[1] : '';
        }

        if ($request->filled('per_page') && !empty($request->get('per_page'))) {
            $paged = $request->get('per_page');
        }

        $merchants =  $this->MerchantRepo->getAllMerchants($conditions, $paged, $orderBy, $sort)->toArray();

        if (!empty($merchants)) {
            return response()->json(
                $merchants,
                200
            );
        } else {
            return response()->json(
                [
                    'data' => 'No Data Found'
                ],
                404
            );
        }
    }
}
