<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Batdata;
use Illuminate\Http\Request;

class apiController extends Controller
{

	public function insert(Request $request)
    {
    	if($request->has(['unk116']))
        {
		    $batdata = new Batdata;
			//$batdata->name = $request->name;


			$batdata->unk116 = $request->unk116;
            $batdata->serial14 = $request->serial14;
            $batdata->version = $request->version;
            $batdata->design_capacity = $request->design_capacity;
            $batdata->unk_capacity = $request->unk_capacity;
            $batdata->nominal_voltage = $request->nominal_voltage;
            $batdata->num_cycles = $request->num_cycles;
            $batdata->num_charged = $request->num_charged;
            $batdata->max_voltage = $request->max_voltage;
            $batdata->max_discharge_current = $request->max_discharge_current;
            $batdata->max_charge_current = $request->max_charge_current;
            $batdata->date = $request->date;
            $batdata->errors6 = $request->errors6;
            $batdata->status = $request->status;
            $batdata->capacity_left = $request->capacity_left;
            $batdata->percent_left = $request->percent_left;
            $batdata->current = $request->current;
            $batdata->voltage = $request->voltage;
            $batdata->temprature2 = $request->temprature2;
            $batdata->unk55 = $request->unk55;
            $batdata->health = $request->health;
            $batdata->unk64 = $request->unk64;
            $batdata->cell_voltages15 = $request->cell_voltages15;
            $batdata->unk72 = $request->unk72;
            $batdata->unk8 = $request->unk8;
            $batdata->uunk930 = $request->uunk930;
            $batdata->unk10 = $request->unk10;
            $batdata->unk11 = $request->unk11;
            $batdata->unk12 = $request->unk12;
            $batdata->unk13 = $request->unk13;
            $batdata->unk_serial7 = $request->unk_serial7;
            $batdata->unk1419 = $request->unk1419;

			$batdata->save();
		    echo "data inserted"; 
		}
		else
		{
			 echo "Please Enter Valid Parameter"; 
		}


	}    


	public function update(Request $request)
	{

	    	if	($request->has(['id']))	
	    	{				
	            $batdata =Batdata::find($request->id);
	            $batdata->fill([
	                'unk116' => $request->unk116,
		            'serial14' => $request->serial14,
		            'version' => $request->version,
		            'design_capacity' => $request->design_capacity,
		            'unk_capacity' => $request->unk_capacity,
		            'nominal_voltage' => $request->nominal_voltage,
		            'num_cycles' => $request->num_cycles,
		            'num_charged' => $request->num_charged,
		            'max_voltage' => $request->max_voltage,
		            'max_discharge_current' => $request->max_discharge_current,
		            'max_charge_current' => $request->max_charge_current,
		            'date' => $request->date,
		            'errors6' => $request->errors6,
		            'status' => $request->status,
		            'capacity_left' => $request->capacity_left,
		            'percent_left' => $request->percent_left,
		            'current' => $request->current,
		            'voltage' => $request->voltage,
		            'temprature2' => $request->temprature2,
		            'unk55' => $request->unk55,
		            'health' => $request->health,
		            'unk64' => $request->unk64,
		            'cell_voltages15' => $request->cell_voltages15,
		            'unk72' => $request->unk72,
		            'unk8' => $request->unk8,
		            'uunk930' => $request->uunk930,
		            'unk10' => $request->unk10,
		            'unk11' => $request->unk11,
		            'unk12' => $request->unk12,
		            'unk13' => $request->unk13,
		            'unk_serial7' => $request->unk_serial7,
		            'unk1419' => $request->unk1419,
	            ]);
	            $batdata->save();
	            echo "data Updated";  
	         }
	        else
	        {
	            echo "Please Enter Valid Parameter";  
	        } 

    }


	public function delete(Request $request)
	{
	    	if	($request->has('id'))	{				
	            $batdata = new Batdata;
	            $batdata->id = $request->id;
	            $batdata = Batdata::find($batdata->id);
	            $batdata->delete();
	            echo "data Deleted";  
	         }
	        else{
	            echo "Please Enter Valid Parameter";  
	        } 
    }


	public function view()
    {
	    	$data=DB::table('batdatas')->get();
	        echo $data;
	}

}
