<?php
    if(!function_exists('aurl')){
        function aurl($url=null){
            return url('admin/'.$url);
        }
    }
    if(!function_exists('setting')){
        function setting(){
            return \App\Setting::orderBy("id",'desc')->first();
        }
    }
    if(!function_exists('Up')){
        function Up(){
            return new \App\Http\Controllers\Upload;
        }
    }
    if(!function_exists('admin')){
        function admin(){
            return auth()->guard('admin');
        }
    }
    if(!function_exists('lang')){
        function lang(){
            if(session()->has('lang'))
                return session('lang');
            else
                return setting()->main_lang;
        }
    }
    if(!function_exists('dir_lang')){
        function dir_lang(){
            if(session()->has('lang')){
                if(session('lang')=='ar'){
                    return 'rtl';
                }else {
                    return 'ltr';
                }
            }else {
                return 'ltr';
            }

        }
    }
    if(!function_exists('datatable_lang')){
        function datatable_lang(){
          return [
                'sProcessing'     => __('admin.sProcessing'),
                'sLengthMenu'     => __('admin.sLengthMenu'),
                'sZeroRecords'    => __('admin.sZeroRecords'),
                'sEmptyTable'     => __('admin.sEmptyTable'),
                'sInfo'           => __('admin.sInfo'),
                'sInfoEmpty'      => __('admin.sInfoEmpty'),
                'sInfoFiltered'   => __('admin.sInfoFiltered'),
                'sInfoPostFix'    => __('admin.sInfoPostFix'),
                'sSearch'         => __('admin.sSearch'),
                'sUrl'            => __('admin.sUrl'),
                'sInfoThousands'  => __('admin.sInfoThousands'),
                'sLoadingRecords' => __('admin.sLoadingRecords'),
                'oPaginate'       => [
                'sFirst'         => __('admin.sFirst'),
                'sLast'          => __('admin.sLast'),
                'sNext'          => __('admin.sNext'),
                'sPrevious'      => __('admin.sPrevious'),
                ],
                'oAria'            => [
                'sSortAscending'  => __('admin.sSortAscending'),
                'sSortDescending' => __('admin.sSortDescending'),
                ],

        ];
        }
    }
    if(!function_exists('trans_')){
        function trans_($str){
            $trans=explode(".", $str);
            if(lang()=="en") {
                return $trans[1];
            }
            else {
                return $str;
            }

        }
    }
/* Validate Helper Function */
      if(!function_exists('v_image')){
            function v_image($ext=null){
                if($ext===null){
                    return   'image|mimes:jpg,jpeg,png,gif';
                }else {
                    return  'image|mimes:'.$ext;
                }
            }
      }
