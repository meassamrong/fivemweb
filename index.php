<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khmer Empire Role Play</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/0dfdec2c7e.js"></script>
</head>
<body>
    <img class="backguy" src="img/pic1.png">

    <?php require'menu.php';?> 
    <div class="maintext">
        <div class="title">KHMER EMPIRE<br>
            <w style="color: #3ca918">Roleplay</w>
        </div>
    <div class="description">Khmer FiveM Server, you can make your life be richest man in this work is Ez in Khmer City, "If you wanna be gang you'll gang,If 
            you wanna be rich you will rich"</div>
        <div class="button1">Join city</div>
    </div>
    <div class="bar">
        <div class="sec1">
            <div class="sec1time">00:00</div>
            <div class="sec1title">Server-Run Time</div>
            <div class="sec1subtitle">The run on VPS, Os debian 11</div>
        </div>

        <div class="sec2">
            <div class="sectitle">Server Status</div>
            <div class="secsubtitle">online</div>
            <div class="secslots">Player : ?/1000</div>
            <div class="secip" id="first" onclick="openLink('second')">Server IP</div><i onclick="copyText('second')" class="grey1 far fa-copy"></i>
            <div class="secbarfull">
                <div class="secinbar"></div>
            </div>

            <div class="secbadge">Player</div>
        </div>

        <div class="sec3">
            <div class="sectitle">Discord</div>
            <div class="secsubtitle blue">Khmer city</div>
            <div class="secslots">?/∞</div>
            <div class="secip blue" id="second" onclick="openLink('second')">KMCT</div><i onclick="copyText('second')" class="grey2 far fa-copy"></i>
            <div class="secbarfull">
                <div class="secinbar bluebg"></div>
            </div>

            <div class="secbadge bluebg">Member</div>
        </div>

        <div class="sec4">
            <div class="sectitle">Support Shop</div>
            <div class="secsubtitle pink">KMCT SHOP</div>
            <div class="secslots">not available now</div>
            <div class="secip pink" id="third" onclick="openLink('third')">Buy 4 Support</div>
            <div class="secbarfull">
                <div class="secinbar pinkbg"></div>
            </div>

            <div class="secbadge pinkbg">Shop</div>
        </div>
    </div>
</body>
</html>