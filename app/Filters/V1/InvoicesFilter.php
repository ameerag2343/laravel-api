<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\V1\ApiFilter;

class InvoicesFilter extends ApiFilter{
    protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq','gt','lt'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq','gt','lt'],
        'paidDate' => ['eq','gt','lt']
    ]; 

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'ne' => '!=',
    ];

    

}
?>