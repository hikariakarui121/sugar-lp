<?php
$name ="";
$tell ="";
$email ="";
$error ="";
$error_name ="";
$error_tell ="";
$error_email ="";
$error_noemail ="";
$company = htmlspecialchars($_POST["company"]);
$naiyou = htmlspecialchars($_POST["naiyou"]);

if (isset($_POST['name'])){
  if (empty($_POST['name'])){
    $error_name .="※Please insert your name\n";
  }else{
    $name .= htmlspecialchars($_POST['name']);
  }
  if (empty($_POST['tell'])){
    $error_tell .="※Please insert your phone number\n";
  }else{
    $tell .= htmlspecialchars($_POST['tell']);
  }
  if (empty($_POST['email'])){
    $error_email .="※Please insert your email\n";
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $error_noemail .="※Please insert your phone number collectly\n";
  }else{
    $email .= htmlspecialchars($_POST['email']);
  }
  if(!$error_name && !$error_tell && !$error_email && !$error_noemail){
    
    //飛ばしたいメールアドレス（会社）
    $to="contact@mikenext.net";
    $subject ="Thank you for your inquiry!!!";
    $message ="Please kindly wait for a few days. 
    We will get back to you as soon as possible.
    数日経っても返信がない場合は、誠にお手数ではございますが、下記までご連絡いただけますようお願い申し上げます。"."\n\n\n"
   .'Name：' .$name . "\n"
   .'Company：' .$company . "\n"
  .'Phone number：' .$tell . "\n"
   .'Email：' .$email . "\n"
  .'Free message：' .$naiyou . "\n\n"
  .'------------------------------'. "\n"
  .'MIKENEXT, LLC'. "\n"
  .'contact@mikenext.net'. "\n"
  .'------------------------------';

    //メールを飛ばすメールアドレス
    $header = 'From:contact@mikenext.net';
     //入力したメールアドレスへ飛ばす
    $result = mb_send_mail($email, $subject, $message, $header);
     //会社のメールアドレスへ飛ばす
    $results = mb_send_mail($to, $subject, $message, $header);
   

    if($result && $results){
      // 送信後のファイルを下記に記載
      header('Location:http://mitsu-site.conohawing.com/thanks.html');
      exit;
    } else {
      // 送信後のファイルを下記に記載
      $error='Fail to send a message.';
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700&family=Mochiy+Pop+One&family=Secular+One&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./recet.css">
  <link rel="stylesheet" href="./style.css">
  <!-- メタ情報の記述 120文字-->
  <meta name=”description“ content=“オリジナルシュガーを作成してみませんか？本商品はデザートや料理のアクセントなどとして使っていただけます。お店だけの、自分だけのシュガーが作成できます。“ />
  <meta name="keywords" content="original craft sugar">
  <title>Original Craft Sugar</title>
</head>
<body>
    <header id="header">
      <div class="h-inner">
        <nav>
          <ul>
            <li><a href="#">TOP</a></li>
            <li><a href="#feature">Feature</a></li>
            <li><a href="#gallary">Items</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#"><span><img src="./img/icon/curt-icon@2x.png" alt=""></span>Go to SHOP</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
    <div class="purchase-btn"><a href="#"><img src="./img/icon/curt-icon@2x.png" alt=""></span>Go to SHOP</a></div>
    <section id="top">
      <div class="inner">
        <img src="./img/top-visual.png" alt="TOP visual">
      </div>
    </section>
    <section id="sub">
      <div class="inner">
        <img src="./img/bg/sec01.png" alt="">
      </div>
    </section>
    <section id="feature">
      <div class="inner">
        <div class="f-contents">
          <div class="f-title">
            <img src="./img/icon/title-icon@2x.png" alt="">
            Feature
            <img src="./img/icon/title-icon@2x.png" alt="">
          </div>
          <div class="f-item"data-aos="fade-right">
            <div class="f-item-top">
              <img src="./img/visual/cafe.png" alt="">
              <div class="f-item-text">
                <div class="f-item-title font-mochiy">Send this sugar <br>　as special gift.</div>
                <div class="f-item-discription">
                They will love it!
                </div>
              </div>
            </div>
            <div class="f-item-bottom">
              <img src="./img/visual/playing_cards_02.png" alt="">
              <img src="./img/visual/futago_1.png" alt="">
              <img src="./img/visual/Key_2.png" alt="">
            </div>

          </div>

          <div class="f-item "data-aos="fade-left">
            <div class="f-item-top second">
              <img  src="./img/visual/image02.png" alt="">
              <div class="f-item-text">
                <div class="f-item-title font-mochiy">Enjoy your tea time <br> with this fun sugar!</div>
                <div class="f-item-discription">This sugar can create <br>all different <br> type  of scene!</div>
              </div>
            </div>
            <div class="f-item-bottom">
              <img src="./img/visual/mizuhiki_02.png" alt="">
              <img src="./img/visual/animal_cafe_dog_02@2x.png" alt="">
              <img src="./img/visual/autumn_leaves_02.png" alt="">
            </div>
          </div>
          </div>
              <img class="bg-icon01" src="./img/bg-icon/icon001.png" alt="">
              <img class="bg-icon02" src="./img/bg-icon/icon002.png" alt="">
        </div>
      </div>
    </section>
    <section id="gallary">
      <div class="inner">
        <div class="g-contents">
          <div class="g-title"data-aos="fade-up">
            <img src="./img/icon/gallary-icon.png" alt="icon01">
            Items we sell.
            <img src="./img/icon/gallary02-icon.png" alt="icon02">
          </div>
          <p class="sub-title"data-aos="fade-up">This is only a part of items we sell.  <br class="mid">You could create your own design sugar.<br>
          For the detail, please <a href="#contact">ask</a>!</p>

          <div class="g-item-content" data-aos="fade-up">
            <a href="#"><img src="./img/gallary/g01@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g02@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g03@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g04@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g05@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g06@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g07@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g08@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g09@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g10@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g11@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g12@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g13@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g14@2x.jpg" alt=""></a>
            <a href="#"><img src="./img/gallary/g15@2x.jpg" alt=""></a>
            <a class="pc" href="#"><img src="./img/gallary/g16@2x.jpg" alt=""></a>
          </div>
          <div class="detail-btn">
            <a href="#">Click Here For More Info!</a>
          </div>
          <img class="bg-icon03" src="./img/bg-icon/icon003.png" alt="">
          <img class="bg-icon04" src="./img/bg-icon/icon004.png" alt="">
      </div>
    </section>
    <section id="company">
      <div class="inner">
        <h3 class="g-title">
          <img src="./img/icon/review-icon01.png" alt="">
          Customer review
          <img src="./img/icon/review-icon02.png" alt="">
        </h3>
        <div class="bg-cover"data-aos="fade-up">
          <div class="review">
          <p>"This is so cute!!!  I sent this to my mother for her birthday,<br class="sp"> she loved it!"<br><span>from Canada</span></p>
          <p>"My son thought this is cookie.  That is how the design is so real."<br><span>from U.K.</span></p>
          <p>"Never seen this type of sugar in my country.  I really liked this.  Perfect for gift." <br><span>from Singapore</span></p>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="c-inner">
        <h2 class="c-title">
        <img src="./img/icon/title-icon@2x.png" alt="">
          Contact Form
          <img src="./img/icon/title-icon@2x.png" alt="">
        </h2>
        <form action="" method="POST">  
  
          <p>お問合せから２日以内にご返信致します。
            万が一、２日以内にご返信がない場合、今一度メールアドレスが正しいかお確かめの上、
            お問合せ下さい。
          </p>

          <p class="c-name">
            <label>Name<span>required</span></label>
            <input class="name" type="text" name="name"  placeholder="fullname" value="<?php echo $name ;?>" >
          </p>
            <?php if ($error_name): ?>
              <p class="error_msg"><?php echo $error_name; ?></p>
            <?php endif; ?>
     
          
          <p class="c-company">
            <label>Company<span>required</span></label>
            <input class="companyname" type="text" name="company" value="<?php echo $company ;?>" placeholder="company-name" >
          </p>


          <p class="c-company">
            <label>Phone number<span>required</span></label>
            <input class="tell" type="text" name="tell" placeholder="phone-number" value="<?php echo $tell ;?>">
          </p>
          <?php if ($error_tell): ?>
            <p class="error_msg"><?php echo $error_tell; ?></p>
          <?php endif; ?>
      

          <p class="c-email">
            <label>Email<span>required</span></label>
            <input class="email" type="email" name="email" placeholder="email" value="<?php echo $email;?>">
          </p>
          <?php if ($error_email): ?>
            <p class="error_msg"><?php echo $error_email; ?></p>
          <?php elseif ($error_noemail): ?>
            <p class="error_msg"><?php echo $error_noemail; ?></p>
          <?php endif; ?>
          <p class="naiyou">
          <label>Free comment</label>
            <textarea class="naiyou" name="naiyou"  cols="50" rows="10" placeholder="comment"></textarea>
          </p>
          <input  class="submit" type="submit" value="submit" class="button">
        </form>
        <img class="bg-icon05" src="./img/bg-icon/icon005.png" alt="">
      </div>
  
    </section>
  </main>
  <footer id="footer">
    <p><small>&copy; 2021　MIKENEXT, LLC</small></p>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./main.js"></script>
</html>