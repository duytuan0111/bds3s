<?php 
function url_slug($str, $options = array()) {
	// Make sure string is in UTF-8 and strip invalid UTF-8 characters
	$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
	
	$defaults = array(
		'delimiter' => '-',
		'limit' => null,
		'lowercase' => true,
		'replacements' => array(),
		'transliterate' => true,
	);
	
	// Merge options
	$options = array_merge($defaults, $options);
	
	// Lowercase
	if ($options['lowercase']) {
		$str = mb_strtolower($str, 'UTF-8');
	}
	
	$char_map = array(
		// Latin
		'á' => 'a', 'à' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a', 'ă' => 'a', 'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a', 'â' => 'a', 'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a', 'đ' => 'd', 'é' => 'e', 'è' => 'e', 'ẻ' => 'e', 'ẽ' => 'e', 'ẹ' => 'e', 'ê' => 'e', 'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e', 'í' => 'i', 'ì' => 'i', 'ỉ' => 'i', 'ĩ' => 'i', 'ị' => 'i', 'ó' => 'o', 'ò' => 'o', 'ỏ' => 'o', 'õ' => 'o', 'ọ' => 'o', 'ô' => 'o', 'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o', 'ơ' => 'o', 'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o', 'ú' => 'u', 'ù' => 'u', 'ủ' => 'u', 'ũ' => 'u', 'ụ' => 'u', 'ư' => 'u', 'ứ' => 'u', 'ừ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u', 'ý' => 'y', 'ỳ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'ỵ' => 'y'
	);
	
	// Make custom replacements
	$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
	
	// Transliterate characters to ASCII
	if ($options['transliterate']) {
		$str = str_replace(array_keys($char_map), $char_map, $str);
	}
	
	// Replace non-alphanumeric characters with our delimiter
	$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
	
	// Remove duplicate delimiters
	$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
	
	// Truncate slug to max. characters
	$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
	
	// Remove delimiter from ends
	$str = trim($str, $options['delimiter']);
	
	return $str;
}
// litmit text
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
function limit_chart($text, $limit) {
	if(strlen($text) > $limit){
		echo substr($text,0,$limit) . " ...";
	}
	else{
		echo $text;
	}
}
// get user ip address
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// array 
function getNewType($index) {
	$arr_new = [
		'1' => 'Phòng trọ / Nhà trọ',
		'2' => 'Căn hộ / Chung cư',
		'3' => 'Nhà nguyên căn',
		'4' => 'Homestay',
		'5' => 'Tìm người ở ghép'
	];
	echo $arr_new[$index];
}
function getAdminType($index) {
	$arr_type = [
		'1' => 'Admin',
		'2' => 'Biên tập',
		'3' => 'Kinh doanh'
	];
	echo $arr_type[$index];
}
function getNewTypeNew($index) {
	$arr_new = [
		'1' => 'Phòng trọ / Nhà trọ',
		'2' => 'Căn hộ / Chung cư',
		'3' => 'Nhà nguyên căn',
		'4' => 'Homestay',
		'5' => 'Tìm người ở ghép'
	];
	return $arr_new[$index];
} 
function getPostType($index) {
	$arr_new = [
		'1' => 'Tin đăng',
		'2' => 'Tin đăng tại tỉnh/ thành phố',
		'3' => 'Tin đăng tại quận huyện',
		'4' => 'Tin đăng tại đường phố',
	];
	return $arr_new[$index];
}
function getRoomRatesPer($index) {
	$arr_room_rate = [
		'1' => 'tháng', '2' => 'quý', '3' => 'năm'
	];
	echo $arr_room_rate[$index];
}
function getWaterPricePer($index) {
	$arr_water_price_per = [
		'1' 	=> 'số',
		'2'		=> 'tháng'
	];
	echo $arr_water_price_per[$index];
}
function getWifiPricePer($index) {
	$arr_wifi_price_per = [
		'1' 	=> 'tháng',
		'2'		=> 'quý',
		'3'		=> 'năm'
	];
	echo $arr_wifi_price_per[$index];
}
function Getcitybyindex($index)
{
	$arrcity=['Toàn Quốc','Hà Nội',
	'Hải Phòng',
	'Bắc Giang',
	'Bắc Kạn',
	'Bắc Ninh',
	'Cao Bằng',
	'Điện Biên',
	'Hòa Bình',
	'Hải Dương',
	'Hà Giang',
	'Hà Nam',
	'Hưng Yên',
	'Lào Cai',
	'Lai Châu',
	'Lạng Sơn',
	'Ninh Bình',
	'Nam Định',
	'Phú Thọ',
	'Quảng Ninh',
	'Sơn La',
	'Thái Bình',
	'Thái Nguyên',
	'Tuyên Quang',
	'Vĩnh Phúc',
	'Yên Bái',
	'Đà Nẵng',
	'Thừa Thiên Huế',
	'Khánh Hòa',
	'Lâm Đồng',
	'Bình Định',
	'Bình Thuận',
	'Đắk Lắk',
	'Đắk Nông',
	'Gia Lai',
	'Hà Tĩnh',
	'Kon Tum',
	'Nghệ An',
	'Ninh Thuận',
	'Phú Yên',
	'Quảng Bình',
	'Quảng Nam',
	'Quảng Ngãi',
	'Quảng Trị',
	'Thanh Hóa',
	'Hồ Chí Minh',
	'Bình Dương',
	'Bà Rịa Vũng Tàu',
	'Cần Thơ',
	'An Giang',
	'Bạc Liêu',
	'Bình Phước',
	'Bến Tre',
	'Cà Mau',
	'Đồng Tháp',
	'Đồng Nai',
	'Hậu Giang',
	'Kiên Giang',
	'Long An',
	'Sóc Trăng',
	'Tiền Giang',
	'Tây Ninh',
	'Trà Vinh',
	'Vĩnh Long'];
	echo  $arrcity[$index];
}
function Getcitybyindex2($index)
{
	$arrcity=['Toàn Quốc','Hà Nội',
	'Hải Phòng',
	'Bắc Giang',
	'Bắc Kạn',
	'Bắc Ninh',
	'Cao Bằng',
	'Điện Biên',
	'Hòa Bình',
	'Hải Dương',
	'Hà Giang',
	'Hà Nam',
	'Hưng Yên',
	'Lào Cai',
	'Lai Châu',
	'Lạng Sơn',
	'Ninh Bình',
	'Nam Định',
	'Phú Thọ',
	'Quảng Ninh',
	'Sơn La',
	'Thái Bình',
	'Thái Nguyên',
	'Tuyên Quang',
	'Vĩnh Phúc',
	'Yên Bái',
	'Đà Nẵng',
	'Thừa Thiên Huế',
	'Khánh Hòa',
	'Lâm Đồng',
	'Bình Định',
	'Bình Thuận',
	'Đắk Lắk',
	'Đắk Nông',
	'Gia Lai',
	'Hà Tĩnh',
	'Kon Tum',
	'Nghệ An',
	'Ninh Thuận',
	'Phú Yên',
	'Quảng Bình',
	'Quảng Nam',
	'Quảng Ngãi',
	'Quảng Trị',
	'Thanh Hóa',
	'Hồ Chí Minh',
	'Bình Dương',
	'Bà Rịa Vũng Tàu',
	'Cần Thơ',
	'An Giang',
	'Bạc Liêu',
	'Bình Phước',
	'Bến Tre',
	'Cà Mau',
	'Đồng Tháp',
	'Đồng Nai',
	'Hậu Giang',
	'Kiên Giang',
	'Long An',
	'Sóc Trăng',
	'Tiền Giang',
	'Tây Ninh',
	'Trà Vinh',
	'Vĩnh Long'];
	return  $arrcity[$index];
}
function getPrice($index) {
	$arr_price = [
		'Tất cả',
		'Dưới 1 triệu',
		'1 triệu - 2 triệu',
		'2 triệu - 3 triệu',
		'3 triệu - 5 triệu',
		'5 triệu - 7 triệu',
		'7 triệu - 10 triệu',
		'10 triệu - 15 triệu',
		'Trên 15 triệu'
	];
	return $arr_price[$index];
}
function getAcreage($index) {
	$arr_acreage = [
		'Tất cả',
		'Dưới 20m2',
		'20 m2 - 30 m2',
		'30 m2 - 50 m2',
		'50 - 60 m2',
		'60 - 70 m2',
		'70 - 80 m2',
		'80 - 90 m2',
		'90 - 100 m2',
		'Trên 100 m2'
	];
	return $arr_acreage[$index];
}
// function getImage
function getImageNew($date, $name) {
	$arr_date 	= explode('-', $date);
	$img 		= base_url().'upload/new_images/'.$arr_date[0].'/'.$arr_date[1].'/'.$arr_date[2].'/'.$name;
	return $img;
}
function getImageUser($date, $name) {
	$arr_date 	= explode('-', $date);
	$img 		= base_url().'upload/avt_user/'.$arr_date[0].'/'.$arr_date[1].'/'.$arr_date[2].'/'.$name;
	return $img;
}	
function parseToXML($htmlStr)
{
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}
function remove_accent($mystring){
	$marTViet=array(
	"à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ","ặ","ẳ","ẵ",
	"è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ",
	"ì","í","ị","ỉ","ĩ",
	"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ","ờ","ớ","ợ","ở","ỡ",
	"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
	"ỳ","ý","ỵ","ỷ","ỹ",
	"đ",
	"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă","Ằ","Ắ","Ặ","Ẳ","Ẵ",
	"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
	"Ì","Í","Ị","Ỉ","Ĩ",
	"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ","Ờ","Ớ","Ợ","Ở","Ỡ",
	"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
	"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
	"Đ",
	"'");
	
	$marKoDau=array(
	"a","a","a","a","a","a","a","a","a","a","a","a","a","a","a","a","a",
	"e","e","e","e","e","e","e","e","e","e","e",
	"i","i","i","i","i",
	"o","o","o","o","o","o","o","o","o","o","o","o","o","o","o","o","o",
	"u","u","u","u","u","u","u","u","u","u","u",
	"y","y","y","y","y",
	"d",
	"A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A","A",
	"E","E","E","E","E","E","E","E","E","E","E",
	"I","I","I","I","I",
	"O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O",
	"U","U","U","U","U","U","U","U","U","U","U",
	"Y","Y","Y","Y","Y",
	"D",
	"");
	
	return str_replace($marTViet,$marKoDau,$mystring);
}
function replaceTitle($title){
  $title = html_entity_decode($title, ENT_COMPAT, 'UTF-8');
  $title  = remove_accent($title);
  $title = str_replace('/', '',$title);
  $title = preg_replace('/[^\00-\255]+/u', '', $title);

  if (preg_match("/[\p{Han}]/simu", $title)) {
      $title = str_replace(' ', '-', $title);
  }else{
    $arr_str  = array( "&lt;","&gt;","/"," / ","\\","&apos;", "&quot;","&amp;","lt;", "gt;","apos;", "quot;","amp;","&lt", "&gt","&apos", "&quot","&amp","&#34;","&#39;","&#38;","&#60;","&#62;");

    $title  = str_replace($arr_str, " ", $title);
    $title  = preg_replace('/\p{P}|\p{S}/u', ' ', $title);
    $title = preg_replace('/[^0-9a-zA-Z\s]+/', ' ', $title);

    //Remove double space
    $array = array(
      '    ' => ' ',
      '   ' => ' ',
      '  ' => ' ',
    );
    $title = trim(strtr($title, $array));
    $title  = str_replace(" ", "-", $title);
    $title  = urlencode($title);
    // remove cac ky tu dac biet sau khi urlencode
    $array_apter = array("%0D%0A","%","&");
    $title  = str_replace($array_apter,"-",$title);
    $title  = strtolower($title);
  }
  return $title;
}
function makeML($content,$search,$replace,$link){
	if($content != '' ){
		require_once APPPATH."helpers/simple_html_dom.php";
		$html = str_get_html($content);
		$h2s = $html->find("h2,h3,h4");
		$patterns = array('/\d+\.\d+\.\d+\.\s/i','/\d+\.\d+\.\s/i','/\d+\.\s/i');
		$ml = "<div class='boxmucluc'><ul>";
		$i=$u=$j = 0;
		foreach($h2s as $h2)
		{
			$text = preg_replace($patterns,'', $h2->plaintext,1);
			$id = replaceTitle($text);
			if ($id == $search) {
				$id = $replace;
			}
			$h2->id = $id;
			if ($h2->tag=='h2') {
				$i++;
				$ml .= "<li><a class='ml_h2' href='".$link."#".$id."'>".$i.". ".$text."</a></li>";
				$j=0;
			}
			if ($h2->tag=='h3') {
				$j++;
				$ml .= "<li><a class='ml_h3' href='".$link."#".$id."'>".$i.".".$j.". ".$text."</a></li>";
				$u=0;
			}
			if ($h2->tag=='h4') {
				$u++;
				$ml .= "<li><a class='ml_h4' href='".$link."#".$id."'>".$i.".".$j.".".$u.". ".$text."</a></li>";
			} 
		}
		$ml.='</ul></div>';
		echo $ml;
	}
}

function makeML_content($content,$search,$replace){
	if($content != '' ){
		require_once APPPATH."helpers/simple_html_dom.php";
		$html = str_get_html($content);
		$h2s = $html->find("h2,h3,h4");
		$patterns = array('/\d+\.\d+\.\d+\.\s/i','/\d+\.\d+\.\s/i','/\d+\.\s/i');
		foreach($h2s as $h2)
		{
			$text = preg_replace($patterns,'', str_replace('&nbsp;', ' ', $h2->plaintext));
			$id = replaceTitle($text);
			if ($id == $search) {
				$id = $replace;
			} 
			$h2->id = $id;
		}
		$html = $html->save();
		return $html; 
	}
}
?>