<?php
namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Merchant extends Model 
{

  protected $guarded = ['id'];
  protected $table = 'merchant';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'MerchantID',
    'Name',
    'Type',
    'Bank',
    'District',
    'City',
    'PostalCode',
    'PaymentID',
    'PaymentDate',
    'PaymentAmount',
    'Card',
    'MerchantStatus',
    'Currency'    
  ];

}
