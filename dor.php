<?php

echo @color("nevy","\n╔════════════════•ೋೋ•════════════════╗\n");
echo @color("red","          TEMBAK PAKET THREE\n");
echo @color("green","               L4 EROOR\n");
echo @color("white","                  KMB");
echo @color("yellow","\n  Jangan lupa isi pulsa dulu ya !!!!");
echo @color("nevy","\n╚════════════════•ೋೋ•════════════════╝\n");
echo @color('blue', "  CREDITS :");
echo @color('white', " 🙏THANKS to ALL AUTHORS🙏\n");
echo @color('green', "\t     ❤️GOD BLESS YOU❤️ \n");
echo @color('nevy', "══════════════════════════════════════\n");
echo @color('purple',"\n[⚡] NOMOR TRI\t\t: ");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('purple', "[⚡] OTP (Cek Sms)\t: ");
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];

	echo @color('purple', "[⚡] PULSA\t\t: ");
	echo @color('blue', "$balance\n");
	echo @color('purple', "[⚡] MASA AKTIF\t\t: ");
	echo @color('blue', "$aktif\n");
    echo @color('purple', "[⚡] SISA KUOTA\t\t: ");
    echo @color('blue', "$sisakuota\n");
    echo @color('purple', "[⚡] POINT\t\t: ");
    echo @color('blue', "$poin\n");
    cek:
    echo @color("nevy","\n╔════════════════꧁ঔৣ☬⫸༒•ೋೋ•༒⫷☬ঔৣ꧂════════════════╗\n");
    echo @color('green', "\nMENU PAKET:\n");
    echo @color('yellow', "
 [ 1  ] Welcome Reward 5GB \t: Rp 1.
 [ 2  ] 18GB 7 Hari  \t\t: Rp 5.000.\t[X]
 [ 3  ] 15GB 7 Hari [New]\t: Rp 10.000.
 [ 4  ] 10GB 30 Hari [New]\t: Rp 15.000.\t[X]
 [ 5  ] 15GB 30 Hari [New]\t: Rp 20.000.
 [ 6  ] 25GB 30Hari [Gercep]\t: Rp 25.000.
 [ 7  ] 25GB 30 Hari [Diskon]\t: Rp 25.000.
 [ 8  ] 25GB 20 Hari \t\t: Rp 25.000.
 [ 9  ] 25GB 20 Hari \t\t: Rp 25.000.
 [ 10 ] 25GB 20 Hari \t\t: Rp 25.000.
 [ 11 ] 25GB 30 Hari \t\t: Rp 29.000.
 [ 12 ] 25GB 30 Hari [New]\t: Rp 29.000.
 [ 13 ] 55GB 30 Hari [New]\t: Rp 50.000.\t[ X ]
 [ 14 ] 65GB 30 Hari [New]\t: Rp 60.000.
 [ 15 ] 75GB 30 Hari [New]\t: Rp 75.000.\t[ X ]
 [ 16 ] 90GB 30 Hari [New]\t: Rp 90.000.
 [ 17 ] 100GB 30 Hari [New]\t: Rp 90.000.
 [ 18 ] 150GB 30 Hari  [New]\t: Rp 150.000.\n\n");
    echo @color('blue', "[ AON ]\n");
    echo @color('yellow', "\n [ 19 ] 20GB 30 Hari [Aon]\t: Rp 55000.
 [ 20 ] 50GB 30 Hari [Aon]\t: Rp 99.000.\n");
    echo @color('nevy', "\n\n╚══════❨ PILIH PAKET ❩════╾꧁ঔৣ☬⫸ : ");
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '64079';
            break;
            case '2':
            $prodid = '24165';
            break;
            case '3':
            $prodid = '25241';
            break;
            case '4':
            $prodid = '25245';
            break;
            case '5':
            $prodid = '25459';
            break;
            case '6':
            $prodid = '22635';
            break;
            case '7':
            $prodid = '22648';
            break;
            case '8':
            $prodid = '23160';
            break;
            case '9':
            $prodid = '25254';
            break;
            case '10':
            $prodid = '25264';
            break;
            case '11':
            $prodid = '23164';
            break;
            case '12':
            $prodid = '25267';
            break;
            case '13':
            $prodid = '25469';
            break;
            case '14':
            $prodid = '25690';
            break;
            case '15':
            $prodid = '25247';
            break;
            case '16':
            $prodid = '25476';
            break;
            case '17':
            $prodid = '25693';
            break;
            case '18':
            $prodid = '25409';
            break;
            case '19':
            $prodid = '25340';
            break;
            case '20':
            $ptodid = '25341';
            break;
            
        
        default:
            echo @color('red', "[❔] PILIH PAKET TERLEBIH DAHULU ❕❕❕\n");
            goto cek;
            break;
    }
    $cek = cek($prodid);
    $name = $cek['product']['productName'];
    $price = $cek['product']['productPrice'];
    $deskripsi = $cek['product']['productDescription'];
    echo @color('purple', "\nNAMA PAKET\t: ");
    echo @color('green', "$name\n");
    echo @color('purple', "HARGA\t\t: ");
    echo @color('yellow', "$price\n");
    echo @color('purple', "DESKRIPSI\t: ");
    echo @color('white', "\n$deskripsi\n");
    echo @color('nevy', "\n╚══════❨ LANJUTKAN ? ❩══꧁ঔৣ☬⫸ (Y/N) : ");
    $aa = trim(fgets(STDIN));
    if(strtolower($aa) !== 'y') {
        goto cek;
    }
    $beli = beli($nomor,$plan,$secret,$prodid);
    if ($beli['status'] == true) {
        echo @color('green', "\n╚══════❨ SUKSES ❩══꧁ঔৣ☬⫸༒Cek SMS༒⫷☬ঔৣ꧂\n\n");
    } else {
        echo @color('red', "\n╚══════❨ GAGAL ! ❩══꧁ঔৣ☬⫸༒Coba yang Lain༒⫷☬ঔৣ꧂\n\n");
    }


} else {
    echo @color('red', $login['message']."\n");
    
}

function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
function otplogin($nomor,$otp){
	$host = "bimaplus.tri.co.id";        
    $data = '{"deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","msisdn":"'.$nomor.'","otp":"'.$otp.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/login-with-otp', $data);
        return $ceknom;
}
function profil($nomor,$plan,$secret){
    $host = "bimaplus.tri.co.id";        
    $data = '{"callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"msisdn":"'.$nomor.'","page":1,"secretKey":"'.$secret.'","subscriberType":"Prepaid"}';
    $ceknom = rekuest($host,"POST",'/api/v1/homescreen/profile', $data);
        return $ceknom;
}

function cek($prodid){
	$host = "my.tri.co.id";        
    $data = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$prodid.'"}';
    $ceknom = rekuest($host,"POST",'/apibima/product/product-detail', $data);
        return $ceknom;
}

function beli($nomor,$plan,$secret,$prodid){
    $host = "bimaplus.tri.co.id";        
    $data = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$nomor.'","paymentMethod":"00","productAddOnId":"","productId":"'.$prodid.'","secretKey":"'.$secret.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $ceknom = rekuest($host,"POST",'/api/v1/purchase/purchase-product', $data);
        return $ceknom;
}

function rekuest($host, $method, $url, $data = null){ 
        $headers[] = 'Host: '.$host;
		$headers[] = 'App-Version: 4.2.6';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'User-Agent: okhttp/4.9.0';
        
        $c = curl_init("https://".$host.$url);  
        switch ($method){
            case "GET":
            curl_setopt($c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($c, CURLOPT_POST, true);
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
            case "PUT":               
            curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
        }
        
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($c, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode){
            return false;
        }
        else {
            $headers = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($c);
        $json = json_decode($body, true);
        return $json;
    }


function color($color = "default" , $text = "")
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
