$data = gc "ADComputersJSON.json"
$data | mongoimport.exe --db "test1" --collection "adcomp3" --type json --jsonArray #--file # 2&>1