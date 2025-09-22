<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UserDefaultCodeGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate default user codes for users without codes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting user code generation...');
        $usersWithoutCode = User::whereNull('code')->orderBy('id')->get();
        if ($usersWithoutCode->isEmpty()) {
            $this->info('All users already have codes.');
            return;
        }
        DB::transaction(function () use ($usersWithoutCode) {
            foreach ($usersWithoutCode as $user) {
                $user->update(['code' => generateUserCode()]);
            }
        });
        $this->info('User code generation completed successfully.');
        return 0;
    }
}
