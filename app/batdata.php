<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batdata extends Model
{
   	//protected $guarded = ['id'];
    protected $fillable = ['id','unk116','serial14','version','design_capacity','unk_capacity','nominal_voltage','num_cycles','num_charged','max_voltage','max_discharged_current','date','errors6','status','capacity_left','percent_left','current','voltage','temprature2','unk64','cell_voltages15','unk72','unk8','uunk930','unk10','unk11','unk12','unk13','unk_serial7','unk1419'];
    public $timestamps=false;
}
