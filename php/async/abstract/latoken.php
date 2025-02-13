<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class latoken extends \ccxt\async\Exchange {
    public function public_get_book_currency_quote($params = array()) {
        return $this->request('book/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function public_get_chart_week($params = array()) {
        return $this->request('chart/week', 'public', 'GET', $params);
    }
    public function public_get_chart_week_currency_quote($params = array()) {
        return $this->request('chart/week/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function public_get_currency($params = array()) {
        return $this->request('currency', 'public', 'GET', $params);
    }
    public function public_get_currency_available($params = array()) {
        return $this->request('currency/available', 'public', 'GET', $params);
    }
    public function public_get_currency_quotes($params = array()) {
        return $this->request('currency/quotes', 'public', 'GET', $params);
    }
    public function public_get_currency_currency($params = array()) {
        return $this->request('currency/{currency}', 'public', 'GET', $params);
    }
    public function public_get_pair($params = array()) {
        return $this->request('pair', 'public', 'GET', $params);
    }
    public function public_get_pair_available($params = array()) {
        return $this->request('pair/available', 'public', 'GET', $params);
    }
    public function public_get_ticker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params);
    }
    public function public_get_ticker_base_quote($params = array()) {
        return $this->request('ticker/{base}/{quote}', 'public', 'GET', $params);
    }
    public function public_get_time($params = array()) {
        return $this->request('time', 'public', 'GET', $params);
    }
    public function public_get_trade_history_currency_quote($params = array()) {
        return $this->request('trade/history/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function public_get_trade_fee_currency_quote($params = array()) {
        return $this->request('trade/fee/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function public_get_trade_feelevels($params = array()) {
        return $this->request('trade/feeLevels', 'public', 'GET', $params);
    }
    public function public_get_transaction_bindings($params = array()) {
        return $this->request('transaction/bindings', 'public', 'GET', $params);
    }
    public function private_get_auth_account($params = array()) {
        return $this->request('auth/account', 'private', 'GET', $params);
    }
    public function private_get_auth_account_currency_currency_type($params = array()) {
        return $this->request('auth/account/currency/{currency}/{type}', 'private', 'GET', $params);
    }
    public function private_get_auth_order($params = array()) {
        return $this->request('auth/order', 'private', 'GET', $params);
    }
    public function private_get_auth_order_getorder_id($params = array()) {
        return $this->request('auth/order/getOrder/{id}', 'private', 'GET', $params);
    }
    public function private_get_auth_order_pair_currency_quote($params = array()) {
        return $this->request('auth/order/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function private_get_auth_order_pair_currency_quote_active($params = array()) {
        return $this->request('auth/order/pair/{currency}/{quote}/active', 'private', 'GET', $params);
    }
    public function private_get_auth_stoporder($params = array()) {
        return $this->request('auth/stopOrder', 'private', 'GET', $params);
    }
    public function private_get_auth_stoporder_getorder_id($params = array()) {
        return $this->request('auth/stopOrder/getOrder/{id}', 'private', 'GET', $params);
    }
    public function private_get_auth_stoporder_pair_currency_quote($params = array()) {
        return $this->request('auth/stopOrder/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function private_get_auth_stoporder_pair_currency_quote_active($params = array()) {
        return $this->request('auth/stopOrder/pair/{currency}/{quote}/active', 'private', 'GET', $params);
    }
    public function private_get_auth_trade($params = array()) {
        return $this->request('auth/trade', 'private', 'GET', $params);
    }
    public function private_get_auth_trade_pair_currency_quote($params = array()) {
        return $this->request('auth/trade/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function private_get_auth_trade_fee_currency_quote($params = array()) {
        return $this->request('auth/trade/fee/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function private_get_auth_transaction($params = array()) {
        return $this->request('auth/transaction', 'private', 'GET', $params);
    }
    public function private_get_auth_transaction_bindings($params = array()) {
        return $this->request('auth/transaction/bindings', 'private', 'GET', $params);
    }
    public function private_get_auth_transaction_bindings_currency($params = array()) {
        return $this->request('auth/transaction/bindings/{currency}', 'private', 'GET', $params);
    }
    public function private_get_auth_transaction_id($params = array()) {
        return $this->request('auth/transaction/{id}', 'private', 'GET', $params);
    }
    public function private_get_auth_transfer($params = array()) {
        return $this->request('auth/transfer', 'private', 'GET', $params);
    }
    public function private_post_auth_order_cancel($params = array()) {
        return $this->request('auth/order/cancel', 'private', 'POST', $params);
    }
    public function private_post_auth_order_cancelall($params = array()) {
        return $this->request('auth/order/cancelAll', 'private', 'POST', $params);
    }
    public function private_post_auth_order_cancelall_currency_quote($params = array()) {
        return $this->request('auth/order/cancelAll/{currency}/{quote}', 'private', 'POST', $params);
    }
    public function private_post_auth_order_place($params = array()) {
        return $this->request('auth/order/place', 'private', 'POST', $params);
    }
    public function private_post_auth_spot_deposit($params = array()) {
        return $this->request('auth/spot/deposit', 'private', 'POST', $params);
    }
    public function private_post_auth_spot_withdraw($params = array()) {
        return $this->request('auth/spot/withdraw', 'private', 'POST', $params);
    }
    public function private_post_auth_stoporder_cancel($params = array()) {
        return $this->request('auth/stopOrder/cancel', 'private', 'POST', $params);
    }
    public function private_post_auth_stoporder_cancelall($params = array()) {
        return $this->request('auth/stopOrder/cancelAll', 'private', 'POST', $params);
    }
    public function private_post_auth_stoporder_cancelall_currency_quote($params = array()) {
        return $this->request('auth/stopOrder/cancelAll/{currency}/{quote}', 'private', 'POST', $params);
    }
    public function private_post_auth_stoporder_place($params = array()) {
        return $this->request('auth/stopOrder/place', 'private', 'POST', $params);
    }
    public function private_post_auth_transaction_depositaddress($params = array()) {
        return $this->request('auth/transaction/depositAddress', 'private', 'POST', $params);
    }
    public function private_post_auth_transaction_withdraw($params = array()) {
        return $this->request('auth/transaction/withdraw', 'private', 'POST', $params);
    }
    public function private_post_auth_transaction_withdraw_cancel($params = array()) {
        return $this->request('auth/transaction/withdraw/cancel', 'private', 'POST', $params);
    }
    public function private_post_auth_transaction_withdraw_confirm($params = array()) {
        return $this->request('auth/transaction/withdraw/confirm', 'private', 'POST', $params);
    }
    public function private_post_auth_transaction_withdraw_resendcode($params = array()) {
        return $this->request('auth/transaction/withdraw/resendCode', 'private', 'POST', $params);
    }
    public function private_post_auth_transfer_email($params = array()) {
        return $this->request('auth/transfer/email', 'private', 'POST', $params);
    }
    public function private_post_auth_transfer_id($params = array()) {
        return $this->request('auth/transfer/id', 'private', 'POST', $params);
    }
    public function private_post_auth_transfer_phone($params = array()) {
        return $this->request('auth/transfer/phone', 'private', 'POST', $params);
    }
    public function publicGetBookCurrencyQuote($params = array()) {
        return $this->request('book/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function publicGetChartWeek($params = array()) {
        return $this->request('chart/week', 'public', 'GET', $params);
    }
    public function publicGetChartWeekCurrencyQuote($params = array()) {
        return $this->request('chart/week/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function publicGetCurrency($params = array()) {
        return $this->request('currency', 'public', 'GET', $params);
    }
    public function publicGetCurrencyAvailable($params = array()) {
        return $this->request('currency/available', 'public', 'GET', $params);
    }
    public function publicGetCurrencyQuotes($params = array()) {
        return $this->request('currency/quotes', 'public', 'GET', $params);
    }
    public function publicGetCurrencyCurrency($params = array()) {
        return $this->request('currency/{currency}', 'public', 'GET', $params);
    }
    public function publicGetPair($params = array()) {
        return $this->request('pair', 'public', 'GET', $params);
    }
    public function publicGetPairAvailable($params = array()) {
        return $this->request('pair/available', 'public', 'GET', $params);
    }
    public function publicGetTicker($params = array()) {
        return $this->request('ticker', 'public', 'GET', $params);
    }
    public function publicGetTickerBaseQuote($params = array()) {
        return $this->request('ticker/{base}/{quote}', 'public', 'GET', $params);
    }
    public function publicGetTime($params = array()) {
        return $this->request('time', 'public', 'GET', $params);
    }
    public function publicGetTradeHistoryCurrencyQuote($params = array()) {
        return $this->request('trade/history/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function publicGetTradeFeeCurrencyQuote($params = array()) {
        return $this->request('trade/fee/{currency}/{quote}', 'public', 'GET', $params);
    }
    public function publicGetTradeFeeLevels($params = array()) {
        return $this->request('trade/feeLevels', 'public', 'GET', $params);
    }
    public function publicGetTransactionBindings($params = array()) {
        return $this->request('transaction/bindings', 'public', 'GET', $params);
    }
    public function privateGetAuthAccount($params = array()) {
        return $this->request('auth/account', 'private', 'GET', $params);
    }
    public function privateGetAuthAccountCurrencyCurrencyType($params = array()) {
        return $this->request('auth/account/currency/{currency}/{type}', 'private', 'GET', $params);
    }
    public function privateGetAuthOrder($params = array()) {
        return $this->request('auth/order', 'private', 'GET', $params);
    }
    public function privateGetAuthOrderGetOrderId($params = array()) {
        return $this->request('auth/order/getOrder/{id}', 'private', 'GET', $params);
    }
    public function privateGetAuthOrderPairCurrencyQuote($params = array()) {
        return $this->request('auth/order/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function privateGetAuthOrderPairCurrencyQuoteActive($params = array()) {
        return $this->request('auth/order/pair/{currency}/{quote}/active', 'private', 'GET', $params);
    }
    public function privateGetAuthStopOrder($params = array()) {
        return $this->request('auth/stopOrder', 'private', 'GET', $params);
    }
    public function privateGetAuthStopOrderGetOrderId($params = array()) {
        return $this->request('auth/stopOrder/getOrder/{id}', 'private', 'GET', $params);
    }
    public function privateGetAuthStopOrderPairCurrencyQuote($params = array()) {
        return $this->request('auth/stopOrder/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function privateGetAuthStopOrderPairCurrencyQuoteActive($params = array()) {
        return $this->request('auth/stopOrder/pair/{currency}/{quote}/active', 'private', 'GET', $params);
    }
    public function privateGetAuthTrade($params = array()) {
        return $this->request('auth/trade', 'private', 'GET', $params);
    }
    public function privateGetAuthTradePairCurrencyQuote($params = array()) {
        return $this->request('auth/trade/pair/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function privateGetAuthTradeFeeCurrencyQuote($params = array()) {
        return $this->request('auth/trade/fee/{currency}/{quote}', 'private', 'GET', $params);
    }
    public function privateGetAuthTransaction($params = array()) {
        return $this->request('auth/transaction', 'private', 'GET', $params);
    }
    public function privateGetAuthTransactionBindings($params = array()) {
        return $this->request('auth/transaction/bindings', 'private', 'GET', $params);
    }
    public function privateGetAuthTransactionBindingsCurrency($params = array()) {
        return $this->request('auth/transaction/bindings/{currency}', 'private', 'GET', $params);
    }
    public function privateGetAuthTransactionId($params = array()) {
        return $this->request('auth/transaction/{id}', 'private', 'GET', $params);
    }
    public function privateGetAuthTransfer($params = array()) {
        return $this->request('auth/transfer', 'private', 'GET', $params);
    }
    public function privatePostAuthOrderCancel($params = array()) {
        return $this->request('auth/order/cancel', 'private', 'POST', $params);
    }
    public function privatePostAuthOrderCancelAll($params = array()) {
        return $this->request('auth/order/cancelAll', 'private', 'POST', $params);
    }
    public function privatePostAuthOrderCancelAllCurrencyQuote($params = array()) {
        return $this->request('auth/order/cancelAll/{currency}/{quote}', 'private', 'POST', $params);
    }
    public function privatePostAuthOrderPlace($params = array()) {
        return $this->request('auth/order/place', 'private', 'POST', $params);
    }
    public function privatePostAuthSpotDeposit($params = array()) {
        return $this->request('auth/spot/deposit', 'private', 'POST', $params);
    }
    public function privatePostAuthSpotWithdraw($params = array()) {
        return $this->request('auth/spot/withdraw', 'private', 'POST', $params);
    }
    public function privatePostAuthStopOrderCancel($params = array()) {
        return $this->request('auth/stopOrder/cancel', 'private', 'POST', $params);
    }
    public function privatePostAuthStopOrderCancelAll($params = array()) {
        return $this->request('auth/stopOrder/cancelAll', 'private', 'POST', $params);
    }
    public function privatePostAuthStopOrderCancelAllCurrencyQuote($params = array()) {
        return $this->request('auth/stopOrder/cancelAll/{currency}/{quote}', 'private', 'POST', $params);
    }
    public function privatePostAuthStopOrderPlace($params = array()) {
        return $this->request('auth/stopOrder/place', 'private', 'POST', $params);
    }
    public function privatePostAuthTransactionDepositAddress($params = array()) {
        return $this->request('auth/transaction/depositAddress', 'private', 'POST', $params);
    }
    public function privatePostAuthTransactionWithdraw($params = array()) {
        return $this->request('auth/transaction/withdraw', 'private', 'POST', $params);
    }
    public function privatePostAuthTransactionWithdrawCancel($params = array()) {
        return $this->request('auth/transaction/withdraw/cancel', 'private', 'POST', $params);
    }
    public function privatePostAuthTransactionWithdrawConfirm($params = array()) {
        return $this->request('auth/transaction/withdraw/confirm', 'private', 'POST', $params);
    }
    public function privatePostAuthTransactionWithdrawResendCode($params = array()) {
        return $this->request('auth/transaction/withdraw/resendCode', 'private', 'POST', $params);
    }
    public function privatePostAuthTransferEmail($params = array()) {
        return $this->request('auth/transfer/email', 'private', 'POST', $params);
    }
    public function privatePostAuthTransferId($params = array()) {
        return $this->request('auth/transfer/id', 'private', 'POST', $params);
    }
    public function privatePostAuthTransferPhone($params = array()) {
        return $this->request('auth/transfer/phone', 'private', 'POST', $params);
    }
}