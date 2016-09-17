<?php

namespace Selmonal\LaravelMN\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class TranslateCommand extends Command
{
    /**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('translate')
            ->setDescription('Tranlate to Mongolia.')
            ->addOption('with-auth', null, InputOption::VALUE_NONE, 'Translate the default auth views.');
    }

    /**
     * Execute the command.
     *
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Translating application...</info>');

        if ($input->getOption('with-auth')) {
            $this->copy(
                __DIR__ . '/stubs/views',
                getcwd() . '/resources'
            );
        }

        $this->copy(
            __DIR__ . '/stubs/lang/mn',
            getcwd() . '/resources/lang'
        );

        $this->updateConfig();

        $output->writeln('<comment>Application has translated to Mongolia.</comment>');
    }

    /**
     * @param  string $from
     * @param  string $to
     * @return void
     */
    public function copy($from, $to)
    {
        system("cp -r {$from} {$to}");
    }

    /**
     * Set locale config to mn.
     * 
     * @return void
     */
    public function updateConfig()
    {
        $appConfigFileContent = file_get_contents(getcwd() . '/config/app.php');

        $appConfigFileContent = str_replace("'locale' => 'en'", "'locale' => 'mn'", $appConfigFileContent);

        file_put_contents(getcwd() . '/config/app.php', $appConfigFileContent);
    }
}
