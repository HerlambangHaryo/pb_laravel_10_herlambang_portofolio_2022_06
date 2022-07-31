<?php 

    if(!function_exists('define_additionalview'))
    {
        function define_additionalview($isMobile)
        {
            // ----------------------------------------------------------- Initialize
                $isi = 'desktop'; 

            // ----------------------------------------------------------- Action  
                
                if($isMobile == 1)
                {
                    $isi = 'mobile';
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }