<?php
echo "Welcome to Employee Wage Computation Problem";

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute employee wage problem
 */
class Employee_Wage
{
    /**
     * Function to Check Employee is Present or Absent
     * Non-Parameterized function
     * Using rand() to generate the random of 0 or 1
     */
    function attendance()
    {
        $empCheck = rand(0, 1);
        if ($empCheck == 1) {
            echo "\nEmployee is Present";
        } else {
            echo "\nEmployee is Absent";
        }
    }
}
$employeeWage = new Employee_Wage();
$employeeWage->attendance();
