<?php


/**
 * Description of ChangeString
 *
 * @author josmel
 */
class CompleteRange
{


    public function build($range = [])
    {
        try {
            $lastOrder = [];
            foreach ($range as $v => $k) {
                $lastOrder = array_merge($lastOrder, (isset($range[$v + 1])) ?
                    ((($range[$v] + 1) == $range[$v + 1]) ? [$range[$v]] :
                        range($range[$v], ($range[$v + 1] - 1))) :
                    [$range[$v]]);
            }
            return $lastOrder;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
        }
    }
}

$CompleteRange = new CompleteRange();
print_r($CompleteRange->build([45, 58, 60]));