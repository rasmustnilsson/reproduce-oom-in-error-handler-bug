<?php declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BugCommand extends Command
{
    protected static $defaultName = 'app:bug';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $content = base64_encode(gzcompress(serialize(['hello'])));
        $items = [];
        while (true) {
            $items[] = unserialize(gzuncompress(base64_decode($content)));
        }
        return Command::SUCCESS;
    }
}
