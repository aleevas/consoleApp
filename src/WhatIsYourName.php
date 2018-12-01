<?php

namespace Acme;

use Symfony\Component\Console\{
    Command\Command,
    Input\InputInterface,
    Input\InputArgument,
    Output\OutputInterface,
    Output\Output
};


class WhatIsYourName extends Command {

    public function configure () {

        $this->setName('WhatIsYourName')
             ->setDescription('Offer a greeting to the given person')
             ->addArgument('name', InputArgument::REQUIRED, 'Please enter your name');

    }

    public function execute(InputInterface $input, OutputInterface $output) {

        $message = 'Glad to see you, ' . $input->getArgument('name') . '!';
        $output->writeln("<info>{$message}</info>");

    }
    
}
