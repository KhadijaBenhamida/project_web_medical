<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Validator;
use Illuminate\Console\Command;
use App\Models\Doctor; // Make sure to use the correct namespace for your Doctor model

class ImportDoctors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:doctors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import doctors data from a CSV file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filePath = storage_path('app/doctors.csv');
    
        if (!file_exists($filePath)) {
            $this->error('CSV file not found.');
            return 1; // Return a non-zero value to indicate an error
        }
    
        $file = fopen($filePath, 'r');
        if ($file === false) {
            $this->error('Failed to open the CSV file.');
            return 1;
        }
    
        $header = fgetcsv($file); // Skip the header row
    
        while (($row = fgetcsv($file)) !== false) {
            // Validation and error handling
            $validator = Validator::make($row, [
                '0' => 'required|string|max:255', // Name
                '1' => 'required|string|max:255', // Speciality
                '2' => 'required|string|max:255', // Country
                '3' => 'required|string|max:255', // City
                '4' => 'required|string|max:255', // Image Path
            ]);
    
            if ($validator->fails()) {
                $this->error("Validation failed for doctor data: {$validator->errors()->first()}");
                // Optionally, you can choose to stop the import process on the first validation failure
                // return 1;
                continue; // Skip this row and continue with the next
            }
    
            // Proceed with creating the Doctor if validation passes
            try {
                Doctor::create([
                    'name' => $row[0],
                    'speciality' => $row[1],
                    'country' => $row[2],
                    'city' => $row[3],
                    'image_path' => $row[4],
                ]);
            } catch (\Exception $e) {
                $this->error("Failed to insert doctor data: {$e->getMessage()}");
                // Optionally, you can choose to stop the import process on the first error
                // return 1;
            }
        }
    
        fclose($file);
        $this->info('Doctors imported successfully.');
        return 0; // Return 0 to indicate success
    }
}