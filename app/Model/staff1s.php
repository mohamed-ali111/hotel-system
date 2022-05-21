<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Staff_type;
use App\Model\Id_card_type;
use App\Model\Shift;
class staff1s extends Model
{
    protected $fillable =[
        'employ_name','id_card_no','address','staff_type_id','id_card_typeid','contact_no','salary',
      ];
  
       // Relation ships 
       public function stafftype(){
        return $this->belongsTo(Staff_type::Class ,'staff_type_id');
    }
       // Relation ships 
       public function id_card_types(){
        return $this->belongsTo(Id_card_type::Class ,'id_card_typeid','id');
    }
  
  
         // Relation ships 
         public function shift(){
          return $this->belongsTo(Shift::Class ,'shift_id','id');
      }
}
