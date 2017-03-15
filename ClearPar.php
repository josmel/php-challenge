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


        }
        return trim($new_string);

    }
}


$ClearPar = new ClearPar();
print_r($ClearPar->build('()())()'));