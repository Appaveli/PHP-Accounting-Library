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
       return ($CostInvestment / $CashFlow);
   }
   
   /**
     * 
     * @param NetCashFlow: Present value of Net Cash Flows
     * @param InitalInvestment: Initial Investment
     * @return   Profitability Index = Present value of Net Cash Flows / Initial Investment
     */
   public static function profitability_index($NetCashFlow, $InitalInvestment)
   {
       return ($NetCashFlow / $InitalInvestment);
   }
   
   /**
     * 
     * @param CapitalInvestment: Capital Investment
     * @param NetCashFlow: Net Annual Cash Flows
     * @return Interest Rate Return Factor = Capital Investment / Net Annual Cash Flows
     */
   public static function interest_rate_return($capitalInvestment, $NetCashFlow)
   {
       return ($capitalInvestment / $NetCashFlow);
   }
   
    /**
     *  
     * @param NetIncome: Expected annual Net Income
     * @param AverageInvestment: Average Investment
     * @return Annual Rate Return = Expected annual Net Income / Average Investment
     */
   public static function annual_return($NetIncome, $AverageInvestment)
   {
       return ($NetIncome / $AverageInvestment);
   }
   
   /**
      * 
      * @param OrgInvestment: Original Investment
      * @param EndValueLife: Value at end of useful life
      * @return Average Investment = (Original Investment + Value at end of useful life) / 2
      */
   public static function average_investment($OrgInvestment, $EndValueLife)
   {
       return ($OrgInvestment + $EndValueLife) /2;
   }
}

?>
