<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        *{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

html{
    font-size: 10px;
}

body{
    height: 100vh;
    width: 100%;
    background-image: url(/img/yen.png);
    min-height: 100%;
    background-position: left;
    background-size: cover;
}

section{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2.5rem;
}

.container{
    max-width: 120rem;
    padding: 0 1.5rem;
    margin: 0 auto;
}

.content{
    display: flex;
    background-color: #fff;
    box-shadow: .5rem .5rem 1rem rgba(0,0,0,0.5);
    opacity: 0.6;
}

.content-img{
    flex: 1;
}

.content-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.content-text{
    flex: 1.5;
    padding: 4rem;
}

.content-text .content-title{
    font-family: 'Playfair Display', serif;
    color: #222;
    font-size: 4rem;
}

.content-text .content-subtitle{
    font-size: 2.56rem;
    font-weight: 400;
    text-transform: uppercase;
    color: #444;
    margin: .5rem 0 2rem;
}

.content-text .content-paragraph{
    font-size: 1.6rem;
    margin-bottom: 2rem;
}

.content-text .btn{
    display: inline-block;
    text-decoration: none;
    font-size: 1.5rem;
    text-transform: uppercase;
    padding: 1.5rem 2rem;
    border: 1px solid #444;
    color: #444;
}


@media screen and (max-width: 1100px){
    .content-text{
        flex: 1;
    }
}

@media screen and (max-width: 960px){
    .content-text .content-paragraph{
        font-size: 1.4rem;
        margin-bottom: 1.6rem;
    }

    .content-text .content-subtitle{
        font-size: 2rem;
    }

    .content-text .content-title{
        font-size: 3.2rem;
    }

    .content-text .btn{
        padding: 1rem 1.56rem;
    }
}

@media screen and (max-width: 756px){
    .content{
        flex-direction: column;
        text-align: center;
    }

    .content-text .content-paragraph{
        text-align: justify;
    }

    .content-img{
        height: 350px;
        width: 100%;
    }
}

@media screen and (max-width: 456px){
    .content-text .content-paragraph{
        font-size: 1.2rem;
    }
    .content-text .content-subtitle{
        font-size: 1.72rem;
    }

    .content-text .content-title{
        font-size: 2.7rem;
    }
}
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="content">
                <div class="content-img">
                    <img src="https://images.unsplash.com/photo-1504364269860-8be73aabdff2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1068&q=80" alt="Body Building">
                </div>
                <div class="content-text">
                    <h2 class="content-title"><?php echo $_POST['name'];?></h2>
                    <h4 class="content-subtitle"><?php echo $_POST['Date'];?></h4>
                    <p class="content-paragraph"><?php echo $_POST['Diary'];?></p>
                    <p class="content-paragraph"><?php echo $_POST['feeling'];
                                                    $text = $_POST['feeling'];
                                                    if ($text=="sad")
                                                    {
                                                        echo "สู้ๆ";
                                                    }
                                                    elseif ($text=="normal")
                                                    {
                                                        echo "ทำต่อไป";
                                                    }
                                                    elseif ($text == "happy")
                                                    {
                                                        echo "ดีแล้วนะ";
                                                    }
                                                ?>
                    </p>
                    <a href="#" class="btn">View More</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
