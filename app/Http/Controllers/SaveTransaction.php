<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SaveTransaction extends Controller
{
    public function saveTransaction(Request $request)
    {
        $results = $request->json()->all();
        $this->recordTransaction($results['results']);
    }

    private function recordTransaction($results)
    {
        try {
            $transaction = new Transaction();
            $transaction->tracking_id = $results['tracking_id'];
            $transaction->state = $results['state'];
            $transaction->provider = $results['provider'];
            $transaction->value = $results['value'];
            $transaction->net_amount = $results['net_amount'];
            $transaction->phone_number = $results['account'];
            $transaction->api_ref = $results['api_ref'];
            $transaction->customer_id = $results['meta']['customer']['customer_id'];
            $transaction->currency = $results['currency'];
            $transaction->charges = $results['charges'];
            $transaction->failed_code = $results['failed_code'];
            $transaction->failed_reason = $results['failed_reason'];
            $transaction->user_id = Auth::user()->id;
            $transaction->save();
            if ($transaction->state === 'COMPLETE') {
                $this->createPurchase($transaction);
            } else {
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('Transaction failed.');
            }
        } catch (\Exception $e) {
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An error occurred. Please try again later.');
            Log::error('Error saving transaction: ' . $e->getMessage());
        }
    }

    // Update Parent Balance
    private function createPurchase($transaction)
    {

        try {
            $business = Business::where('reference', $transaction->api_ref)->first();
            $business->renewal_date = Carbon::parse($business->renewal_date)->addYearNoOverflow();
            $business->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->success('Transaction successful');
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating renewal: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable error on updating renewal: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An error occurred. Please try again later.');
        }

    }
}
