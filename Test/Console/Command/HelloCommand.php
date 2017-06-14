<?php
namespace Test\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;

class HelloCommand extends Command
{
    const INPUT_SAY_WORD = 'say_word';

    protected function configure()
    {
        $this->setName('say:hello_world');
        $this->setDescription('return Hello World');
        $this->addOption(
            self::INPUT_SAY_WORD,
            's',
            InputOption::VALUE_OPTIONAL,
            'You can use words you want to say',
            'Hello World'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = $input->getOption(self::INPUT_SAY_WORD);
        $output->writeln($message);
    }
}