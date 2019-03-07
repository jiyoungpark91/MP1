<?php
/**
 * Created by PhpStorm.
 * User: jiyoung
 * Date: 3/7/19
 * Time: 2:32 AM
 */


main::start();

class main
{

    static public function start()
    {

        $file = fopen("example.csv", "r");

        while (!feof($file)) {



            $record = fgetcsv($file);


            $records[] = $record;
        }

        fclose($file);
        print_r($records);

    }

}