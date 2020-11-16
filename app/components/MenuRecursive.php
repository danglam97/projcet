<?php


namespace App\components;


use App\Category;

class MenuRecursive
{
    private $html;
    public function __construct()
    {
        $this->html= '';
    }

    public function MenuRecursiveAdd($parent_id=0, $level='')
    {
        // lấy Danh mục cha
        $data = Category::where('parent_id', $parent_id)->get();
        foreach ($data as $key => $item) {
            $this->html .= '<option value="' . $item->id . '" >' .$level. $item->name . '</option>';
            $this->MenuRecursiveAdd($item->id, $level .'--');

        }
        return $this->html;
    }
    public function MenuRecursiveEdit($parentMenu,$parent_id=0, $level='')
    {
        // lấy Danh mục cha
        $data = Category::where('parent_id', $parent_id)->get();
        foreach ($data as $key => $item) {
            if ($parentMenu == $item->id){
                $this->html .= '<option selected value="' . $item->id . '" >' .$level. $item->name . '</option>';
            }else{
                $this->html .= '<option value="' . $item->id . '" >' .$level. $item->name . '</option>';
            }

            $this->MenuRecursiveEdit($parentMenu,$item->id, $level .'--');

        }
        return $this->html;
    }
}
