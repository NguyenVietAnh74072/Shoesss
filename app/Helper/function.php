<?php

use Illuminate\Support\Facades\Auth;

if( !function_exists('get_data_user'))
{
    function get_data_user($guest,$column='id')
    {
        return Auth::guard($guest)->user()? Auth::guard($guest)->user()->$column:null;
    }
}

if(!function_exists('pare_url_file')){



    function pare_url_file($image,$foder='')
    {

        if(!$image)
        {return '/images/no-image.jpg';
        }
        $explode=explode('__',$image);

        if(isset($explode[0]))
        {
                $time=str_replace('_','/',$explode[0]);
                return '/upload'.$foder .'/'.date('Y/m/d',strtotime($time)).'/'.$image;
        }
    }
}


if(!function_exists('upload_image'))
{
          
    function upload_image($file,$folder='',array $extend =array())
    {
        $code= 1;

        // lay duong dan anh
        $baseFilename = public_path() .'/uploads'. $_FILES[$file]['name'];

        //thong tin file
        $info=new SplFileInfo($baseFilename);

        //duoi file

        $ext= strtolower($info->getExtension());
        
        
        //kiem tra dinh dang file

        if($extend)
        $extend =['png','jpg','jped','webp'];

        if(!in_array($ext,$extend))
        return $data['code']=0;


        //ten file moi
        $nameFile=trim(str_replace('.'.$ext,'',strtolower($info->getFilename())));
        $filename=date('Y-m-d__').\Illuminate\Support\Str::slug($nameFile).'.'.$ext;



        //thu muc goc de upload
        $path =public_path().'/uploads/'.date('Y-m-d');
        if($folder)
        $path=public_path().'/uploads/'.$folder.'/'.date('Y-m-d');

        if(!\File::exits($path))
        mkdir($path,0777,true);

        //DI chuyen file uploads

        move_uploaded_file($_FILES[$file]['tmp_name'],$path,$filename);
        $data=[


            'name'=>$filename,
            'code'=>$code,
            'path'=>$path,
            'path_img'=>'uploads/'.$filename
        ];
        return $data;


        //


    }
}