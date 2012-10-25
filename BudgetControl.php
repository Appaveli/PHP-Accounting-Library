<?php

/**
 * Description of BudgetControl:  Calculates different Budget Control formulas
 *
 * @author dominque
 */
class BudgetControl 
{
     /**
     * 
     * @param ControlMargin: Controllable Margin
     * @param OperatingAssets: Average operating assets
     * @return Return On Investment = Controllable Margin / Average operating assets
     */
    public static function ROI($ControlMargin, $OperatingAssets)
    {
        $ROI = $ControlMargin / $OperatingAssets;
        return $ROI;
        
    }
    
     /**
     * 
     * @param ControlMargin: Controllable Margin
     * @param RateReturn: Minimum rate of return
     * @param OperatingAsset: Average operating assets
     * @return Residual Income = Controllable Margin - Minimum rate of return * Average operating assets
     */
    public static function residual_income($ControlMargin, $RateReturn, $OperatingAsset)
    {
        $ResidualIncome = $ControlMargin - ($RateReturn * $OperatingAsset);
        return  $ResidualIncome;
        
    }
}

?>
