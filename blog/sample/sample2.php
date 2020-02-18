<?php
$pref_Array2 = [
    '日本'=>[
        '中部地区'=>[
            '愛知県'=>[
                    '名古屋市'=>[
                        '栄'=>[
                            '１丁目','２丁目','３丁目'
                        ],
                        '神田町'=>[
                            '１丁目','２丁目','３丁目'
                        ],
                    ],
            ],
            '岐阜県'=>[
                    '岐阜市'=>[
                        '十六町'=>[
                            '１丁目','２丁目','３丁目'
                        ],
                        '神田町'=>[
                            '１丁目','２丁目','３丁目'
                        ],
                    ],        
            ]
        ]
    ]
];

echo'<pre>';
print_r($pref_Array2);
echo'</pre>';

foreach($pref_Array2 as $country){
    foreach($country as $area) {
        foreach($area as $prefs) {
            foreach($prefs as $citys){
                foreach($citys as $towns) {
                    foreach($towns as $num)
                         echo $towns;
                }
            }
        }
    }
}

// 十六町をとりだすには
  var_dump($pref_Array2['日本']['中部地区']['岐阜県']['岐阜市']['十六町'][0]);
  