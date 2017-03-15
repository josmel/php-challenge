<?php


/**
 * Description of ChangeString
 *
 * @author josmel
 */
class ChangeString
{


    public function build($chain = null)
    {
        try {
            $obs = ['z', 'Z'];
            $newChain = null;
            foreach (str_split($chain) as $v) {
                $newChain .= (ctype_alpha($v)) ?
                    ((in_array($v, $obs)) ?
                        ((ctype_lower($v)) ? 'a' : 'A')
                        : chr(ord($v) + 1))
                    : $v;
            }
            return $newChain;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
        }
    }
}

$ChangeString = new ChangeString();
echo($ChangeString->build('**Casa 52Z'));