<!DOCTYPE html>
<html>
<head>
<title>49</title>
</head>
<body>
    <?php
    //https://data.gov.tw/dataset/40448
    //用file_get指令抓資料
    $抓到的資料=file_get_contents("https://tpnco.blob.core.windows.net/blobfs/Todaywork.json");
    $資料=json_decode($抓到的資料,true);
    //將抓回資瞭轉為陣列，存到$資料裡(decode 解碼)
    //echo $抓到的資料;
    //die();
    print_r($資料); //物件顯示，陣列
    die();
   
   //顯示新北市新店區空氣品質---->在"records"陣列中[]裡某筆資料
   //如何取得records-->records抓回資料第一層(沒有其他:之內)
   //$資料:["records"]取得
   //print_r($資料["records"]);
   //用for 迴圈把每筆資料取出來，找sitename欄位=新店十-->取出
   foreach ($資料["records"] as $v){
    //echo "監測站名稱=$v[sitename]<br/>";
    if($v["C_Name"]=="土城"){
        echo "監測站名稱=$v[sitename]<br/>";
        echo "AQI=$v[aqi]<br/>";
        echo "PM2.5=".$v["pm2.5"]."<br/>";
        echo "no2=$v[no2]<br/>";
    }
   }
   die();
    //顯示JSON資料，顯示第0筆資料的作物名稱
     //連接資料庫
     $link=mysqli_connect('localhost','root','','opendata');
     //設定編碼
     mysqli_set_charset($link,'utf8'); 

    //echo $資料[0]['作物名稱'];
    foreach($資料 as $v){
        echo "作物名稱=$v[作物名稱]<br/>";
        mysqli_query($link,"INSERT INTO `花果` (`流水號`, `日期`, `名稱`, `平均價格`, `交易量`)
         VALUES (NULL,'$v[交易日期]', '$v[作物名稱]', '$v[平均價]', '$v[交易量]');")
         or die (mysqli_error($link));//顯示文字訊息錯誤
    }
   



    ?>
<h1>空氣品質指標</h1>
<p>ㄟ米</p>

</body>
</html>