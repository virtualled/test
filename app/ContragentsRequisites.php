<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContragentsRequisites extends Model
{
    protected $fillable = [
        'company_address',
        'post_address',
        'inn',
        'kpp',
        'account',
        'corr_acc',
        'bank_name',
    ];
}
