<?php

namespace Acme;

use Symfony\Component\Console\{
    Command\Command,
    Input\InputInterface,
    Input\InputArgument,
    Output\OutputInterface,
    Output\Output
};
use Symfony\Component\Console\Input\InputOption;


class WhatIsYourName extends Command {

    public function configure () {

        $this->setName('WhatIsYourName')
             ->setDescription('Offer a greeting to the given person')
             ->addArgument('name', InputArgument::REQUIRED, 'Please enter your name')
             ->addOption('greeting', null, InputOption::VALUE_OPTIONAL, 'Can override the default greeting', 'Glad to see you');

    }

    public function execute(InputInterface $input, OutputInterface $output) {

        $message = sprintf('%s, %s!', $input->getOption('greeting'), $input->getArgument('name'));
        $output->writeln("<info>{$message}</info>");

    }

}
