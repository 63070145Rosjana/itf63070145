<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
 @import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Handlee);

body {
    margin: 40px 0 0;
    background: #91D1D3;
    font-family: 'Roboto', sans-serif;
}

.paper {
    position: relative;
    width: 90%;
    max-width: 800px;
    min-width: 400px;
    height: 480px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    overflow: hidden;
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 50px;
    background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
    background-size: 30px 30px;
    border-right: 3px solid #D44147;
    box-sizing: border-box;
}

.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 60px;
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}

.paper-content span {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 10px 30px;
    border: 0;
    outline: 0;
    background: transparent;
    color: #000000;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;
}
    </style>
</head>

<body>
    <div class="paper">
        <div class="paper-content">
            <b style="font-size: 1.5rem;">Diary :<span><?php echo $_POST['Diary']?></span> by :<span><?php echo $_POST['name']?></span></b>
            <b style="text-align:right"><?php echo $_POST['Date']?></b>
            <br>
            <span><?php echo $_POST['Story']?></span>
        </div>
    </div>
</body>

</html>
