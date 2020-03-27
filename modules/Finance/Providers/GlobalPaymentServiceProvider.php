<?php

namespace Modules\Finance\Providers;

use App\Models\Tenant\{
    SaleNotePayment,
    DocumentPayment,
    PurchasePayment,
};  
use Modules\Sale\Models\QuotationPayment;

use Illuminate\Support\ServiceProvider;

class GlobalPaymentServiceProvider extends ServiceProvider
{

    public function register()
    {
    }
    
    public function boot()
    {

        $this->deletingPayment(SaleNotePayment::class);
        $this->deletingPayment(DocumentPayment::class);
        $this->deletingPayment(PurchasePayment::class);
        $this->deletingPayment(QuotationPayment::class);

    }

    private function deletingPayment($model)
    {

        $model::deleting(function ($record) {
            
            if($record->global_payment){
                $record->global_payment()->delete();
            }

        });

    }
 
 
}
