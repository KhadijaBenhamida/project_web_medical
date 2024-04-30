<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [];
        $filePath = storage_path('app/doctors.csv');
    
        if (file_exists($filePath)) {
            $file = fopen($filePath, 'r');
            // Skip the header row
            fgetcsv($file);
            while (($row = fgetcsv($file)) !== false) {
                $doctors[] = [
                    'name' => $row[0], // Assuming the first column is "Doctor Name"
                    'speciality' => $row[1], // Assuming the second column is "Speciality"
                    'country' => $row[2], // Assuming the third column is "Country"
                    'city' => $row[3], // Assuming the fourth column is "City"
                    'image_path' => $row[4], // Assuming the fifth column is "Image Path"
                ];
            }
            fclose($file);
        }
    
        return view('doctors.index', compact('doctors'));
    }
}