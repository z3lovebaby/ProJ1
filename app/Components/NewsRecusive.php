<?php
    namespace App\Components;
    use App\Models\Nhomtin;
    class NewsRecusive{
        private $data;
        private $htmlSelect = '';
        public function __construct($data)
        {
            $this->data = $data;
        }

        public function nhomtinRecusive($id = 0, $text='')
        {
            foreach ($this->data as $value) {
                if($value['NT_ViTri']== $id){
                    $this->htmlSelect .= "<option value='".$value['id']."'>" . $text . $value['NT_Ten'] . "</option>";
                    $this->nhomtinRecusive($value['id'], $text.'--');
                }
            }
            return $this->htmlSelect;
        }
    }
?>