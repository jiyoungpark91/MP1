<?php
/**
 * Created by PhpStorm.
 * User: jiyoung
 * Date: 3/7/19
 * Time: 2:32 AM
 */


main::start("example.csv");

class main
{

    static public function start($filename)
    {
$records = csv::getRecords($filename);

print_r($records);

    }

}


class csv {




    static public function getRecords($filename) {


        $file = fopen($filename, "r");

        while (!feof($file)) {



            $record = fgetcsv($file);


            $records[] = $record;
        }

        fclose($file);
        print_r($records);



    }
}