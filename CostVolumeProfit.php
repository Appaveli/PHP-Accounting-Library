<?php

/**
 * Description of CostVolumeProfit: Calculates different Cost-Volume Profit formulas
 *
 * @author dominque
 */
class CostVolumeProfit 
{
     /**
     * 
     * @param CostChange: Change in total cost
     * @param high: High activity
     * @param low: Low activity
     * @return Variable Cost Per Unit = Change in total cost / High mines - Low activity
     */
    public static function variable_cost_per_unit($CostChange, $high, $low)
    {
        return $CostChange / ($high - $low);    
    }
    
     /**
     * 
     * @param SellingPrice: Unit selling price
     * @param VariableCost: Unit variable cost
     * @return  Contribution Margin Per Unit = Unit selling price - Unit variable cost
     */
    public static function contribution_margin_per_unit($SellingPrice, $VariableCost)
    {
        return ($SellingPrice - $VariableCost);
    }
    
    /**
     * 
     * @param ConMarginPerUnit: Contribution Margin per unit
     * @param SellingPrice: Unit selling price
     * @return Contribution Margin Ratio = Contribution Margin per unit / Unit selling price
     */
    public static function contribution_margin_ratio($ConMarginPerUnit, $SellingPrice)
    {
        return ($ConMarginPerUnit / $SellingPrice);    
    }
    
     /**
     * 
     * @param VariableCost: Variable cost
     * @param FixedCost: Fixed cost
     * @param NetIncome: Net Income
     * @return  Sales = Variable cost + Fixed cost + Net Income
     */
    public static function sales($VariableCost, $Fixedcost, $NetIncome)
    {
        return ($VariableCost + $Fixedcost + $NetIncome);
    }
    
     /**
     * 
     * @param FixedCost: Fixed cost
     * @param ConMarginPerUnit: Contribution margin per unit
     * @return Break-Even Point In Units = Fixed cost / Contribution margin per unit

     */
    public static function breakeven_points_units($Fixedcost, $ConMarginPerUnit)
    {
        return ($Fixedcost / $ConMarginPerUnit);
    }
    
    /**
     * 
     * @param VariableCost: Variable cost
     * @param FixedCost: Fixed cost
     * @param TargetNetIncome: Target Net Income
     * @return Required Sales = Variable cost + Fixed cost + Target Net Income
     */
    public static function required_sales($VariableCost, $FixedCost, $TargetNetIncome)
    {
        return ($VariableCost + $FixedCost + $TargetNetIncome);
    }
    
    /**
     * 
     * @param FixedCost: Fixed cost
     * @param TargetNetIncome: Target Net Income
     * @param ConMarginUnit: Contribution margin per unit
     * @return Required Sales In Units = (Fixed cost + Target Net Income) / Contribution margin per unit
     */
    public static function required_sales_units($FixedCost, $TargetNetIncome, $ConMarginUnits)
    {
        return ($FixedCost + $TargetNetIncome) / $ConMarginUnits;
    }
    
    /**
     * 
     * @param FixedCost:  Fixed cost
     * @param TargetNetIncome: Target Net Income
     * @param ConMarginRatio: Contribution margin Ratio
     * @return Required Sales In Dollars = (Fixed cost + Target Net Income) / Contribution margin Ratio
     */
     public static function required_sales_dollars($FixedCost, $TargetNetIncome, $ConMarginRatio)
    {
        return ($FixedCost + $TargetNetIncome) / $ConMarginRatio;
    }
     
    /**
     * 
     * @param MarginSafety: Margin safety in dollars 
     * @param Sales: Actual Sales
     * @return Margin Safety In Ratio = Margin safety if dollars / Actual Sales
     */
     public static function margin_safety_ratio($MarginSafety, $Sales)
    {
        return ($MarginSafety / $Sales);
    }
    
    /**
     * 
     * @param Sales: Actual expected sales
     * @param BreakEven: Break even sales
     * @return Margin Safety In Dollars = Actual expected sales - Break even sales
     */
    public static function margin_safety_dollars($BreakEven, $Sales)
    {
        return ($Sales - $BreakEven);
    }
}

?>
