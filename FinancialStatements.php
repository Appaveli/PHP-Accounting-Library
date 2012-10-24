<?php

/**
 * Description of FinancialStatements: Calculates different Financial Statement formulas
 *
 * @author dominque
 */
class FinancialStatements 
{
     /**
     * 
     * @param liabilites: Liabilities
     * @param StockEquity: Stockholders equity
     * @return  Assets = Liabilities + Stockholders equity
     */
    public static function assets($liabilites, $StockEquity)
    {
        return ($liabilites / $StockEquity);
    }
    
    /**
     * 
     * @param NetIncome: Net Income
     * @param StockDiv: Preferred stock dividends
     * @param CommonShares: Average common shares outstanding
     * @return Earning Per Share = (Net Income - Preferred stock dividends) / Average common shares outstanding
     */
    public static function earnings_per_share($NetIncome, $StockDiv, $CommonShare)
    {
        return ($NetIncome - $StockDiv) - $CommonShare;
    }
      
    /**
     * 
     * @param CurrentAssts: Current Assets
     * @param CurrentLiabilites:  Current Liabilities
     * @return Current Ratio = Current Assets / Current Liabilities
     */
    public static function current_ratio($CurrentAssets, $CurrentLiabilities)
    {
        return ($CurrentAssets / $CurrentLiabilities);
    } 
     
    /**
     * 
     * @param TotalAssts: Total Assets
     * @param TotalLiabilites: Total Liabilities
     * @return  Debt Total Asset Ratio = Total Assets / Total Liabilities
     */
    public static function debt_total_asset_ratio($TotalAssets, $TotalLiabilities)
    {
        return ($TotalAssets / $TotalLiabilities);
    }
    
    /**
     * 
     * @param CashProvided: Cash provided by operations 
     * @param CashExpenditures: Cash Expenditures
     * @param CashDividends: Cash Dividends
     * @return Free Cash Flow = Cash provided by operations - Cash Expenditures - Cash Dividends
     */
    public static function free_cash_flow($CashProvided, $CashExpenditures, $CashDividends)
    {
        return ($CashProvided - $CashExpenditures -$CashDividends);
    }
}

?>
