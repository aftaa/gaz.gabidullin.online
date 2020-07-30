<?php

namespace app\commands;

use app\storage\LogStorage1;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Class ParserController
 * @package app\commands
 */
class ParserController extends Controller
{
    /**
     * @return int
     */
    public function actionIndex()
    {
        echo "Use './yii parser/parse'\n";

        return ExitCode::OK;
    }

    public function actionParse()
    {
        $parser = new LogStorage1('test-data/log1.txt', LogStorage1::DONT_SKIP_ERRORS);
        $rows = $parser->parse();
    }
}
