<?php

/**
 * Description of BudgetPlanning: Calculates different Budget Planning formulas
 *
 * @author dominque
 */
class BudgetPlanning 
{
    /**
     * 
     * @param SalesUnits: Budgeted sales units
     * @param EndingGoods: Desired ending finished goods
     * @param BegGoods:  Beginning finished goods
     * @return Required Production Units = Budgeted sales units + Desired ending finished goods - Beginning finished goods
     */
    public static function required_production_units($SalesUnits, $EndingGood, $BegGoods)
    {
        return ($SalesUnits - $EndingGood) - $BegGoods;
        
    }
    
    /**
     * 
     * @param DirectMaterials: Direct materials required for production
     * @param EndingGoods: Desired ending finished goods units
     * @param BegGoods: Beginning finished goods units
     * @return   Required Direct Materials Purchased = Direct materials required for production 
     * + Desired ending finished goods units - Beginning finished goods units 

     */
    public static function required_direct_materials_purch($DirectMaterials, $EndingGoods, $BegGoods)
    {
        return ($DirectMaterials + $EndingGoods) - $BegGoods;
        
    }
    
     /**
     * 
     * @param GoodsCost: Budget cost of goods sold
     * @param EndingInventory: Desired ending merchandise inventory
     * @param BegInventory: Beginning merchandise inventory
       @return Required Merchandise Purchased = Budget cost of goods sold + Desired ending merchandise inventory - Beginning merchandise inventory
     */
    public static function required_merchandis_purchased($GoodsCost, $EndingInventory, $BegInventory)
    {
        return ($GoodsCost + $EndingInventory) - $BegInventory;
        
    }
    
     /**
     * 
     * @param UnitsProduced: Units to be produced
     * @param UnitTime: Direct labor time per unit
     * @param LaborCost: Direct labor per cost
     * @return  Total Direct Labor Cost = Units to be produced * Direct labor time per unit * Direct labor per cost
     */
    public static function total_direct_labor_cost($UnitsProduced, $UnitTime, $LaborCost)
    {
        return ($UnitsProduced * $UnitTime * $LaborCost);
        
    }
}

?>
