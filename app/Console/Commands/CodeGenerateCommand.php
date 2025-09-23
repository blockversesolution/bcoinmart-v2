<?php

namespace App\Console\Commands;

use App\Models\KYC;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CodeGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate codes for users without codes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting code generation...');
        $usersWithoutCode = User::whereNull('code')->orderBy('id')->get();

        DB::transaction(function () use ($usersWithoutCode) {
            foreach ($usersWithoutCode as $user) {
                $user->update(['code' => generateUniqueCode('user_id', 'USER')]);
            }
        });

        $kycsWithoutCode = KYC::whereNull('application_code')->orderBy('id')->get();

        DB::transaction(function () use ($kycsWithoutCode) {
            foreach ($kycsWithoutCode as $kyc) {
                $kyc->update(['application_code' => generateUniqueCode('kyc_code', 'KYC')]);
            }
        });
        $this->info('Code generation completed successfully.');
        return 0;
    }
}
