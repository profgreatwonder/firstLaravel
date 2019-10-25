<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'contact:company {name} {phone?}'; the question mark is used to state that it is optional. The one below is used to hardcode the number/which can also be added using the terminal with the command=====e.g ->php artisan contact:company 'Bananas' '123-111-2233'
    protected $signature = 'contact:company';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company';

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
     * @return mixed
     */
    public function handle()
    {

        $name = $this->ask('what is the company name?');
        $phone = $this->ask('what is the company\'s phone number?');

        if($this->confirm('Are you ready to insert "' . '"?')) {
            $company = Company::create([
                'name' => $name,
                'phone' => $phone,
            ]);

            return $this->info('Added: ' . $company->name);
        }

        $this->warn('No new company was added');
        // $this->info($phone);
        // $company = Company::create([
        //     'name' => $this->argument('name'),

            // 'phone' => $this->argument('phone') ?? 'N/A', -> after hardcoding the N/A you come down here and remove the ?? 'N/A'
            // 'phone' => $this->argument('phone'),
        // ]);

        // $this->info('Added: ' . $company->name);

    }
}
