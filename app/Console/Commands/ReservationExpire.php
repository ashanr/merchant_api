<?php

namespace App\Console\Commands;

use App\Models\Master\ReserveRegister;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class ReservationExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Reservation Expire';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return ReserveRegister::where('status',1)->whereRaw('TIMESTAMPDIFF(MINUTE,created_at,NOW()) >= '.Config::get('utilities.reserve_expire'))->update(array('status' => 0,'updated_at'=> Carbon::now()));

    }
}
