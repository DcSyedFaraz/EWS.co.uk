<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            //A Level / College
            ['academic_level_id'=>1,
             'deadline_id'=>1,
             'per_page_price'=>4        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>2,
             'per_page_price'=>6        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>3,
             'per_page_price'=>8        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>4,
             'per_page_price'=>10        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>5,
             'per_page_price'=>12        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>6,
             'per_page_price'=>14        
            ],
            ['academic_level_id'=>1,
            'deadline_id'=>7,
            'per_page_price'=>16        
           ],
           ['academic_level_id'=>1,
           'deadline_id'=>8,
           'per_page_price'=>18        
          ],
          ['academic_level_id'=>1,
          'deadline_id'=>9,
          'per_page_price'=>20        
         ],
         ['academic_level_id'=>1,
          'deadline_id'=>10,
          'per_page_price'=>22        
         ],
         ['academic_level_id'=>1,
         'deadline_id'=>11,
         'per_page_price'=>24        
        ],

        //Undergratue And Diploma

        ['academic_level_id'=>2,
        'deadline_id'=>1,
        'per_page_price'=>5        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>2,
        'per_page_price'=>7        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>3,
        'per_page_price'=>9        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>4,
        'per_page_price'=>11        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>5,
        'per_page_price'=>13        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>6,
        'per_page_price'=>15        
       ],
       ['academic_level_id'=>2,
       'deadline_id'=>7,
       'per_page_price'=>17       
      ],
      ['academic_level_id'=>2,
      'deadline_id'=>8,
      'per_page_price'=>19        
     ],
     ['academic_level_id'=>2,
     'deadline_id'=>9,
     'per_page_price'=>21        
    ],
    ['academic_level_id'=>2,
     'deadline_id'=>10,
     'per_page_price'=>23        
    ],
    ['academic_level_id'=>2,
    'deadline_id'=>11,
    'per_page_price'=>25        
   ],

    // Master's
    [
        'academic_level_id'  => 3, // master
        'deadline_id'        => 1, // 15 or more days
        'per_page_price'     => 6
     ],
     [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 2, // 10 days
         'per_page_price'     => 8
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 3, // 7 days
         'per_page_price'     => 10
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 4, // 6 days
         'per_page_price'     => 12
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 5, // 5 days
         'per_page_price'     => 14
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 6, // 4 days
         'per_page_price'     => 16
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 7, // 3 days
         'per_page_price'     => 18
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 8, // 2 days
         'per_page_price'     => 20
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 9, // 1 days
         'per_page_price'     => 22
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 10, // 12 hours
         'per_page_price'     => 24
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 11, // 6 hours
         'per_page_price'     => 26
      ],

    //   Mphil And PHD

    [
        'academic_level_id'=>4,
        'deadline_id'=>1,
        'per_page_price'=>7
    ],
    [
        'academic_level_id'=>4,
        'deadline_id'=>2,
        'per_page_price'=>9
    ]
     ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>3,
        'per_page_price'=>11
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>4,
        'per_page_price'=>13
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>5,
        'per_page_price'=>15
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>6,
        'per_page_price'=>17
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>7,
        'per_page_price'=>19
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>8,
        'per_page_price'=>21
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>9,
        'per_page_price'=>23
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>10,
        'per_page_price'=>25
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>11,
        'per_page_price'=>27
    ]
        
        ]);
    }
}
