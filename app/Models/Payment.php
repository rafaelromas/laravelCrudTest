<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    private $creditCard;
    private $flag;
    private $installment;

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function getInstallment()
    {
        return $this->installment;
    }

    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    public function setInstallment($installment)
    {
        $this->installment = $installment;
    }
}
