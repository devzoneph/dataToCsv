    function dataToCsv($data, $filename)
    {
        $fp = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($fp, $row);
        }
        fclose($fp);
    }
    
    
    $data = ['foo','bar','mac']
    write_to_csv($data,'report.csv');
