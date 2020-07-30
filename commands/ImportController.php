<?php

namespace app\commands;

use app\service\ParseLogIntoDbService;
use app\storage\LogStorage1;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Class ImportController
 * @package app\commands
 */
class ImportController extends Controller
{
    /**
     * @return int
     */
    public function actionIndex()
    {
        echo "Use './yii parser/parse'\n\n";

        return ExitCode::OK;
    }

    public function actionParse()
    {
        $parser = new ParseLogIntoDbService;
        $parser->logIntoDb();

        echo "Import completed\n\n";

        return ExitCode::OK;
    }
}
