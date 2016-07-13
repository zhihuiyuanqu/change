<?php

    
	  //定义上传文件类型
     //$typeList = array("image/jpeg","image/jpg","image/png","image/gif","application/msword"); //定义允许的类型
	 $typeList1 = array("application/msword");
     if($fileError1>0)
	   {
            //上传文件错误编号判断
            switch ($fileError1) {
                case 1:
                    $message="上传的文件超过了php.ini 中 upload_max_filesize 选项限制的值。"; 
                    break;
                case 2:
                    $message="上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。"; 
                    break;
                case 3:
                    $message="文件只有部分被上传。"; 
                    break;
                case 4:
                    $message="没有文件被上传。";
                    break;
                case 6:
                    $message="找不到临时文件夹。"; 
                    break;
                case 7:
                    $message="文件写入失败"; 
                    break;
                case 8:
                    $message="由于PHP的扩展程序中断了文件上传";
                    break;
            }

            exit("文件上传失败：".$message);

        }
	  if(!is_uploaded_file($tempName1)){
        //判断是否是POST上传过来的文件
        exit("不是通过HTTP POST方式上传上来的");
      }else{
           if(!in_array($fileType1, $typeList1)){
            exit("上传的文件不是指定类型");
            }
	      }
		  if($fileSize1>1000000){
                //对特定表单的上传文件限制大小
                exit("上传文件超出限制大小");
             }else{
                //避免上传文件的中文名乱码
                $fileName1=iconv("UTF-8", "GBK", $fileName1);//把iconv抓取到的字符编码从utf-8转为gbk输出
                $fileName1=str_replace(".", time().".", $fileName1);//在图片名称后加入时间戳，避免重名文件覆盖
                if(move_uploaded_file($tempName1, "upload/".$fileName1)){
                    echo "上传文件成功！";
                }else{
                    echo "上传文件失败";
                }
             }
	/*
    $conn = mysql_connect("localhost", "root", "");
     mysql_query("SET NAMES 'UTF8'"); 
	 if (!$conn)
       {
       die('Could not connect: ' . mysql_error());
       }  
   mysql_select_db("test",$conn);
   //$photo_name = $_FILES["file"]["name"];
   $photodir = "D:/xampp/htdocs/test/upload/";
   $sql="insert into submitdata (入园申请表) values ('$photodir$fileName')";
   mysql_query($sql,$conn) or die ("insert data failed: ".mysql_error());
   mysql_close($conn);*/
   
   
   //营业执照
        $fileName2=$_FILES["file2"]["name"];
        $fileType2=$_FILES["file2"]["type"];
        $fileError2=$_FILES["file2"]["error"];
        $fileSize2=$_FILES["file2"]["size"];
        $tempName2=$_FILES["file2"]["tmp_name"];
     
	  //定义上传文件类型
     //$typeList = array("image/jpeg","image/jpg","image/png","image/gif","application/msword"); //定义允许的类型
	 $typeList = array("image/jpeg","image/jpg","image/png","image/gif");
     if($fileError2>0)
	   {
            //上传文件错误编号判断
            switch ($fileError2) {
                case 1:
                    $message="上传的文件超过了php.ini 中 upload_max_filesize 选项限制的值。"; 
                    break;
                case 2:
                    $message="上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。"; 
                    break;
                case 3:
                    $message="文件只有部分被上传。"; 
                    break;
                case 4:
                    $message="没有文件被上传。";
                    break;
                case 6:
                    $message="找不到临时文件夹。"; 
                    break;
                case 7:
                    $message="文件写入失败"; 
                    break;
                case 8:
                    $message="由于PHP的扩展程序中断了文件上传";
                    break;
            }

            exit("文件上传失败：".$message);

        }
	  if(!is_uploaded_file($tempName2)){
        //判断是否是POST上传过来的文件
        exit("不是通过HTTP POST方式上传上来的");
      }else{
           if(!in_array($fileType2, $typeList)){
            exit("上传的文件不是指定类型");
            }
	      }
		  if($fileSize2>1000000){
                //对特定表单的上传文件限制大小
                exit("上传文件超出限制大小");
             }else{
                //避免上传文件的中文名乱码
                $fileName2=iconv("UTF-8", "GBK", $fileName2);//把iconv抓取到的字符编码从utf-8转为gbk输出
                $fileName2=str_replace(".", time().".", $fileName2);//在图片名称后加入时间戳，避免重名文件覆盖
                if(move_uploaded_file($tempName2, "upload/".$fileName2)){
                    echo "上传文件成功！";
                }else{
                    echo "上传文件失败";
                }
             }
	/*
    $conn = mysql_connect("localhost", "root", "");
     mysql_query("SET NAMES 'UTF8'"); 
	 if (!$conn)
       {
       die('Could not connect: ' . mysql_error());
       }  
   mysql_select_db("test",$conn);
   //$photo_name = $_FILES["file"]["name"];
   $photodir = "D:/xampp/htdocs/test/upload/";
   $sql="insert into submitdata (营业执照) values ('$photodir$fileName')";
   mysql_query($sql,$conn) or die ("insert data failed: ".mysql_error());
   mysql_close($conn);
   */
   //身份证
        $fileName3=$_FILES["file3"]["name"];
        $fileType3=$_FILES["file3"]["type"];
        $fileError3=$_FILES["file3"]["error"];
        $fileSize3=$_FILES["file3"]["size"];
        $tempName3=$_FILES["file3"]["tmp_name"];
     
	  //定义上传文件类型
     //$typeList = array("image/jpeg","image/jpg","image/png","image/gif","application/msword"); //定义允许的类型
	 $typeList = array("image/jpeg","image/jpg","image/png","image/gif");
     if($fileError3>0)
	   {
            //上传文件错误编号判断
            switch ($fileError3) {
                case 1:
                    $message="上传的文件超过了php.ini 中 upload_max_filesize 选项限制的值。"; 
                    break;
                case 2:
                    $message="上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。"; 
                    break;
                case 3:
                    $message="文件只有部分被上传。"; 
                    break;
                case 4:
                    $message="没有文件被上传。";
                    break;
                case 6:
                    $message="找不到临时文件夹。"; 
                    break;
                case 7:
                    $message="文件写入失败"; 
                    break;
                case 8:
                    $message="由于PHP的扩展程序中断了文件上传";
                    break;
            }

            exit("文件上传失败：".$message);

        }
	  if(!is_uploaded_file($tempName3)){
        //判断是否是POST上传过来的文件
        exit("不是通过HTTP POST方式上传上来的");
      }else{
           if(!in_array($fileType3, $typeList)){
            exit("上传的文件不是指定类型");
            }
	      }
		  if($fileSize3>1000000){
                //对特定表单的上传文件限制大小
                exit("上传文件超出限制大小");
             }else{
                //避免上传文件的中文名乱码
                $fileName3=iconv("UTF-8", "GBK", $fileName3);//把iconv抓取到的字符编码从utf-8转为gbk输出
                $fileName3=str_replace(".", time().".", $fileName3);//在图片名称后加入时间戳，避免重名文件覆盖
                if(move_uploaded_file($tempName3, "upload/".$fileName3)){
                    echo "上传文件成功！";
                }else{
                    echo "上传文件失败";
                }
             }

    $conn = mysql_connect("localhost", "root", "");
     mysql_query("SET NAMES 'UTF8'"); 
	 if (!$conn)
       {
       die('Could not connect: ' . mysql_error());
       }  
   mysql_select_db("test",$conn);
   //$photo_name = $_FILES["file"]["name"];
   $photodir = "D:/xampp/htdocs/themes/simplebootx/Zhyq/upload/";
   $sql="insert into submitdata (入园申请表,营业执照,身份证) values ('$photodir$fileName1','$photodir$fileName2','$photodir$fileName3')";
   mysql_query($sql,$conn) or die ("insert data failed: ".mysql_error());
   mysql_close($conn);
  





















   
?>