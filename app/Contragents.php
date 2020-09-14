<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contragents extends Model
{
    protected $fillable =['contragent_name', 'contragent_type_id', 'contragent_contacts_id', 'contragent_requisite_id'];

    public function type()
    {
        return $this->hasOne('App\ContragentsTypes', 'id', 'contragent_type_id');
    }

    public function contacts()
    {
        return $this->hasOne('App\ContragentsContacts', 'id', 'contragent_contacts_id');
    }

    public function requisites()
    {
        return $this->hasOne('App\ContragentsRequisites', 'id', 'contragent_requisite_id');
    }
    public function delete()
    {
        $this->contacts()->delete();
        $this->requisites()->delete();

        return parent::delete();
    }

}


