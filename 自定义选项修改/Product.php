<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 * @common\config\fecshop_local_services\Product.php
 */
return [
      'product' => [

            'customAttrGroup' => [

                  'sport_group' => [

                        'spu_attr' => [
                              //属性名要和name名称一致
                              'spucolor'      => [
                                    'dbtype'     => 'String',
                                    'label'      => '颜色',
                                    'name'       => 'spucolor',
                                    'showAsImg'  => true,
                                    'sort_order' => 1,
                                    'display'    => [
                                          'type' => 'select',
                                          'data' => [
                                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                                'one-color'        => 'one-color',
                                                'red'              => 'red',
                                                'white'            => 'white',
                                                'black'            => 'black',
                                                'blue'             => 'blue',
                                                'green'            => 'green',
                                                'yellow'           => 'yellow',
                                                'gray'             => 'gray',
                                                'khaki'            => 'khaki',

                                                'ivory'             => 'ivory',
                                                'beige'             => 'beige',
                                                'orange'            => 'orange',
                                                'cyan'              => 'cyan',
                                                'leopard'           => 'leopard',
                                                'camouflage'        => 'camouflage',

                                                'silver'           => 'silver',
                                                'pink'             => 'pink',
                                                'purple'           => 'purple',
                                                'brown'            => 'brown',
                                                'golden'           => 'golden',
                                                'multicolor'       => 'multicolor',
                                                'white & blue'     => 'White & Blue',
                                                'white & black'    => 'White & Black',
                                          ],
                                    ],
                                    //'require' => 0,
                                    //'default' => 2,
                              ],
                              // 第二个属性不会当做图片来显示
                              'spusize'      => [
                                    'dbtype'     => 'String',
                                    'label'      => '尺码',
                                    'name'       => 'spusize',
                                    'sort_order' => 2,
                                    'display'    => [
                                          'type'    => 'select',
                                          'data'    => [
                                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                                'one-size'    => 'one-size',
                                                'S'           => 'S',
                                                'M'           => 'M',
                                                'L'           => 'L',
                                                'XL'          => 'XL',
                                                'XXL'         => 'XXL',
                                                'XXXL'        => 'XXXL',
                                          ],
                                    ],
                                    //'require' => 0,
                                    //'default' => 2,
                              ],

                        ],
                        //普通属性
                        'general_attr' => [
                              // 这是input type='text' 的类型
                              'my_remark' => [
                                    'dbtype' => 'String',
                                    'label'  => '我的备注',
                                    'name'   => 'my_remark',
                                    'display'=> [
                                          'type' => 'inputString',   // 字符串格式的属性
                                    ],
                                    'require' => 0,
                              ],

                        ],

                        'custom_options' => [

                              'mycolor'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '颜色', // 显示的名字
                                    'name'      => 'color',      // 在数据库中存在的列名
                                    'showAsImg' => true,  // （在前端展示部分）通过图片的方式展示属性。譬如；http://fecshop.appfront.fancyecommerce.com/index.php/reindeer-pattern-glitter-christmas-dress-86519596，
                                    //		你会发现，该属性对应的显示方式不是值，而是产品的图片。
                                    'require' => 1,  // 1代表是必填选项，0代表选填
                                    'display' => [
                                          'type' => 'select',
                                          'data' => [
                                                'none'             => 'none',
                                                'red'              => 'red',
                                                'white'            => 'white',
                                                'black'            => 'black',
                                                'blue'             => 'blue',
                                                'green'            => 'green',
                                                'yellow'           => 'yellow',
                                                'gray'             => 'gray',
                                                'khaki'            => 'khaki',

                                                'ivory'             => 'ivory',
                                                'beige'             => 'beige',
                                                'orange'            => 'orange',
                                                'cyan'              => 'cyan',
                                                'leopard'           => 'leopard',
                                                'camouflage'        => 'camouflage',

                                                'silver'           => 'silver',
                                                'pink'             => 'pink',
                                                'purple'           => 'purple',
                                                'brown'            => 'brown',
                                                'golden'           => 'golden',
                                                'leopard'          => 'leopard',
                                                'multicolor'       => 'multicolor',
                                                'white & blue'     => 'White & Blue',
                                                'white & black'    => 'White & Black',
                                          ],
                                    ],

                              ],
                              //选项1-英文
                              'myoption'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '选项(英文)', // 显示的名字
                                    'name'      => 'myoption',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 0,  // 1代表是必填选项，0代表选填
                              ],

                              //选项1-韩文
                              'myoption_ko'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '选项2(韩文)', // 显示的名字
                                    'name'      => 'myoption_ko',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 1,  // 1代表是必填选项，0代表选填
                              ],
                              //选项2-英文
                              'myoption2'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '选项2(英文)', // 显示的名字
                                    'name'      => 'myoption2',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 0,  // 1代表是必填选项，0代表选填
                              ],

                              //选项2-韩文
                              'myoption2_ko'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '选项(韩文)', // 显示的名字
                                    'name'      => 'myoption2_ko',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 1,  // 1代表是必填选项，0代表选填
                              ],
                              //款式1-英文
                              'mystyle'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '款式(英文)', // 显示的名字
                                    'name'      => 'style',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 1,  // 1代表是必填选项，0代表选填
                              ],
                              //款式1-韩文
                              'mystyle_ko'      => [
                                    'dbtype'    => 'String',  //类型
                                    'label'     => '款式(韩文)', // 显示的名字
                                    'name'      => 'style',   // 在数据库中存在的列名
                                    'showAsImg' => true, //是否显示
                                    'display' => [
                                          'type' => 'inputString',
                                    ],
                                    'require' => 1,  // 1代表是必填选项，0代表选填
                              ],

                              //尺寸
                              'mysize'      => [
                                    'dbtype'     => 'String',
                                    'label'      => '尺码',
                                    'name'       => 'size',
                                    'require'    => 1,
                                    'display'    => [
                                          'type'    => 'select',
                                          'data'    => [
                                                'none'       => 'none',
                                                'one-size'    => 'one-size',
                                                'free-size'    => 'free-size',
                                                'S'       => 'S',
                                                'M'       => 'M',
                                                'L'       => 'L',
                                                'XL'      => 'XL',
                                                'XXL'     => 'XXL',
                                                'XXXL'    => 'XXXL',
                                          ],
                                    ],

                              ],



                        ],
                  ],


            ],

      ],
];
