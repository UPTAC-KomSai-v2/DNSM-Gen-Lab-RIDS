<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function PersonnelDashboard()
    {
        return view('personnel.personnel_dashboard');
    }

    public function PersonnelMaterialList()
    {
        return view('personnel.inventory.personnel_material-list');
    }

    public function PersonnelChemicalList()
    {
        return view('personnel.inventory.personnel_chemical-list');
    }

    public function PersonnelEquipmentList()
    {
        return view('personnel.inventory.personnel_equipment-list');
    }

    public function PersonnelFacilityList()
    {
        return view('personnel.inventory.personnel_facility-list');
    }

    public function PersonnelReservationRequestList()
    {
        return view('personnel.reservation.personnel_reservation-request-list');
    }

    public function PersonnelReservationScheduleList()
    {
        return view('personnel.reservation.personnel_reservation-schedule-list');
    }
}
