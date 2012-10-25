<?php

/**
 * Description of Pricing:Calculates different pricing formulas
 *
 * @author dominque
 */
class Pricing 
{
    /**
     * 
     * @param MarketPrice: Market Price
     * @param DesiredPrice: Desired Price
     * @return Target Cost = Market Price - Desired Price
     */
    public static function target_cost($MarketPrice, $DesiredPrice)
    {
        $TargetCost = ($MarketPrice - $DesiredPrice);
        return $TargetCost;
    }
    
     /**
     * 
     * @param Cost: cost
     * @param MarkupPercent: Markup percentage
     * @return Target Selling Price = cost + markup percentage * cost
     */
    public static function target_selling_price($Cost, $MarkupPercent)
    {
        $TargetSellingPrice = $Cost - ($MarkupPercent * $Cost);
        return $TargetSellingPrice;
    }
    
      /**
     * 
     * @param ROIunits: Desired roi in units
     * @param UnitCost:  Total unit cost
     * @return  MarkUp Percentage = desired roi in units / total unit cost
     */
    public static function mark_percentage($ROIunits, $UnitCost)
    {
        $MarkUpPercentage = ($ROIunits / $UnitCost);
        return $MarkUpPercentage;
    }
}

?>
