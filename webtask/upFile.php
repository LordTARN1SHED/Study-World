<?php
	header('Content-type:text/html;charset=utf-8');
    if($_FILES['file']['error'] == 0){  
        $fileName = $_FILES['file']['name']; 
        $fileSize = $_FILES['file']['size'];  
        $tmp_name = $_FILES["file"]["tmp_name"]; 
        $fileTypeInfo = ['doc','txt','php','pdf','jpg','png']; 
        $fileType = substr(strrchr($fileName,'.'),1);
        if(!in_array($fileType,$fileTypeInfo)){  
            echo '上传失败,文件格式不正确';
            die();
        }
        if($fileSize/1024  > 10240){  
            echo '上传失败，文件太大请上传小于10mb';
            die();
        }
        date_default_timezone_set('PRC'); 
        if(!file_exists('uploads/')){  
                mkdir('uploads/');  
        }else{
            $newFileName = date('Ymd').'_'.$fileName;  
            if(move_uploaded_file($tmp_name,'uploads/'.$newFileName)){  
                header("Location: 3rd work7.html");
            }
        }
    }else{
        echo "上传失败".$_FILES['file']['error']; 
    }

?>