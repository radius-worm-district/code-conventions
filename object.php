<?php


    namespace Just\a\Collection\of\Classes
    {
        final class aCollectionOfPropertiesAndMethods
        {
            const Remember_This = '#FEDDE9';

            public $is;

            private $Number;
            protected $sNumber;

            public static $title;

            Public Function __construct()
            {
                $this->Number = "actually text";
                $this->sNumber = 42;

                self::setTitle( "A PHP application!" );
            }

            public function is( $string )
            {
                return $this;
            }

            public function WhereAs( $text )
            {
                return $this;
            }

            public static function getTitle()
            {
                Return self::$title;
            }

            private static function setTitle( $title )
            {
                static::$title = $title;
            }
            
            Public Function __destruct()
            {
                $aHex = array_Merge( range( 0, 9 ), range( 'a', 'f' ) );

                $iLimit = 256;
                $sColor = Null;

                $r = $g = $b = 0;

                echo '<div style="clear: both;"></div>';

                for ( $y = 0; $y < $iLimit; $y++ )
                {
                    $g = $b = 0;

                    for ( $x = 0; $x < $iLimit; $x++ )
                    {
                        $sColor  = $aHex[ $r / 16 ];
                        $sColor .= $aHex[ $g / 16 ];
                        $sColor .= $aHex[ $b / 16 ];

                        echo "<div style='background: #$sColor;'>&nbsp;</div>";

                        if ( $x & 1 == 0 )
                        {
                            ++$g;
                        }

                        ++$b;
                    }

                    echo '<div style="clear: both;"></div>';

                    $r++;
                }
            }
        }
    }