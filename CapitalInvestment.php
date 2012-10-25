<?php

/**
 * Description of CapitalInvestment: Calculates different Capital Investment formulas
 *
 * @author dominque
 */
class CapitalInvestment 
{
    /**
     * 
     * @param CostInvestment: Cost of capital investment
     * @param CashFlow: Net annual cash flow
     * @return Cash Payback Period = cost of capital investment / net annual cash flow
     */
   public static function payback_period($CostInvestment, $CashFlow)
   {
       $CashPaybackPeriod = ($CostInvestment / $CashFlow);
       return  $CashPaybackPeriod;
   }
   
   /**
     * 
     * @param NetCashFlow: Present value of Net Cash Flows
     * @param InitalInvestment: Initial Investment
     * @return   Profitability Index = Present value of Net Cash Flows / Initial Investment
     */
   public static function profitability_index($NetCashFlow, $InitalInvestment)
   {
       $ProfitabilityIndex = ($NetCashFlow / $InitalInvestment);
       return $ProfitabilityIndex;
   }
   
   /**
     * 
     * @param CapitalInvestment: Capital Investment
     * @param NetCashFlow: Net Annual Cash Flows
     * @return Interest Rate Return Factor = Capital Investment / Net Annual Cash Flows
     */
   public static function interest_rate_return($capitalInvestment, $NetCashFlow)
   {
       $InterestRateReturnFactor = ($capitalInvestment / $NetCashFlow);
       return $InterestRateReturnFactor;
   }
   
    /**
     *  
     * @param NetIncome: Expected annual Net Income
     * @param AverageInvestment: Average Investment
     * @return Annual Rate Return = Expected annual Net Income / Average Investment
     */
   public static function annual_return($NetIncome, $AverageInvestment)
   {
       $AnnualRateReturn = ($NetIncome / $AverageInvestment);
       return $AnnualRateReturn;
   }
   
   /**
      * 
      * @param OrgInvestment: Original Investment
      * @param EndValueLife: Value at end of useful life
      * @return Average Investment = (Original Investment + Value at end of useful life) / 2
      */
   public static function average_investment($OrgInvestment, $EndValueLife)
   {
       $AverageInvestment = ($OrgInvestment + $EndValueLife) /2;
       return  $AverageInvestment;
   }
}

?>
