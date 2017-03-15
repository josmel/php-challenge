<?php


/**
 * Description of ChangeString
 *
 * @author josmel
 */
class ClearPar
{



    public function build($chain = null)
    {

        $string = "ABC (Test1(even deeper) yes (this (works) too)) outside (((ins)id)e)";



        $string = "()())()";
        $paren_num = 0;
        $chars = str_split($string);
        $new_string = '';
        foreach($chars as $char) {
            if ($char == '(') {
                $paren_num++;
            }elseif($char == ')'){
                $paren_num--;
            }elseif ($paren_num == 0){
                $new_string .= $char;
            }

         //   var_dump($new_string);exit;
//            else if ($char == ')') $paren_num--;
//            else if ($paren_num == 0) $new_string .= $char;
        }
        echo trim($new_string);exit;







        try {
            $newChain = null;
            foreach (str_split($chain) as $v=>$k) {
                var_dump($v,$k);exit;


            }
            return $newChain;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
        }
    }
}


$ClearPar = new ClearPar();
print_r($ClearPar->build('()())()'));