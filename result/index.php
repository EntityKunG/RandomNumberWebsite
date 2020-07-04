<?php
	session_start();
	$ip_address = $_SERVER['REMOTE_ADDR'];
	include("../system/config.php");
?>
<html>
  <head>
	<?php include("../system/head.php"); ?>
    <title>FewZa - รับเข้าสายรหัส</title>
  </head>
  <body>
	  <?php
	  	if (isset($_POST['submit'])) {
			include("../system/config.php");
			$in = array();
			$educateX = "SELECT typenumber FROM `randomnumber`";
			$resultW = mysqli_query($conn, $educateX);
			while ($list = mysqli_fetch_array($resultW, MYSQLI_ASSOC)) {
					$number = $list['typenumber'];
					array_push($in, $number);
			}
			do {
				$rand = rand(1, 36);
			} while (in_array($rand, $in));
			$sql = "INSERT INTO `randomnumber` (`ID`, `ip`, `typenumber`) VALUES (NULL, '$ip_address', $rand)";
			$result = mysqli_query($conn, $sql);
			echo "<script language=\"JavaScript\">
                	swal({
					  title: \"ยินดีด้วย\",
					  text: \"ยินดีด้วยคุณได้หมายเลข $rand\",
					  icon: \"success\",
					});
              	  </script>";
		}
	  ?>
		<style>
		.sectionContent{
			min-height: 0; !important;
		}
		</style>
		 <div class="headerBG">
            <div class="headerContent">
	            <div style="width: 150px; height: 150px; display: inline;">
	                <a href="http://smilekrub.com/" title="Smilekrub Home page" class="logo"></a>
	            </div>
            </div>
	 	 </div>
	  	<?php
	  	$educate = "SELECT * FROM `randomnumber` WHERE ip = '$ip_address'";
		$result = mysqli_query($conn, $educate);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
			?>
				<div class="wrapper warpper-shadow">
					<section class="sectionContent">
						<div class="headerTopic">FewZa - Random Number</div>
						<div class="alert alert-info animated FadeIn" style="word-wrap: break-word;">
							<span class="glyphicon fas fa-exclamation-circle"></span> 
							<strong>คุณได้หมายเลขอะไร / What is the number do you got</strong><hr class="message-inner-separator"> 
							<br>
							<?php echo '<h1>คุณได้หมายเลข ', $row['typenumber'], '</h1>'; ?>
							<br>หากได้รับหมายเลขแล้ว สามารถติดต่อ <a href="https://www.facebook.com/profile.php?id=100009367572838">พี่การ์ตูน</a> ได้เลย
							<br>*โปรดแคปหน้าจอเพื่อเป็นหลักฐานในการยืนยันตัวตน ว่าคุณได้หมายเลขนี้จริงๆ*
						</div>
						<?php 
							if ($row['typenumber'] == 1) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									พี่เลี้ยงนกแก้วนามปากกาชื่อเอท โทร : 0969216139
									<br>
									พอโทรมาแล้วให้พูด : สิ้นชีวา ทิวาดับ
								</div>
								<?php
							} else if ($row['typenumber'] == 2) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									พี่สูงพี่โสดพี่สวย 088xx914x1
								</div>
								<?php
							} else if ($row['typenumber'] == 3) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									พี่สวยทุกคนรู้ เพื่อนๆรู้ น้องก็ต้องรู้
									<br>09546013xx หยอกๆ satita ทักมาเลย

								</div>
								<?php
							} else if ($row['typenumber'] == 4) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
										08A-SEX-ROOT Can you find me ?
										<br>
										-A : What order does Venus belong to the solar system?
										<br>
										-S : 555555555555555555555555555555555555 
										<br>
										-E : What number auspicious in Thailand?
										<br>
										-X : What’s the mod of 67 % 5?
										<br>
										-R : The Answers is S
										<br>
										-O : How many provinces does Thailand have?
										<br>
										-T : eGNmb3Q4dCB2YnZi (64)
										<br>
										ลักษณะมีจุดเด่นเฉพาะตัว เป็นคนเรียนไม่เก่ง อยู่กลาง ๆ หากน้องโทรมาแล้ว ให้น้องตะโกนคำว่า “แนะนำชื่ออะไร, ร้องเพลง It’s Life ท่อน Hook”

								</div>
								<?php
							} else if ($row['typenumber'] == 5) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									พี่คือ sy;sohkshv’ 
										<br>
									(ไปแปลแป้นพิมพ์เป็นภาษาไทยในคอมเอานะ)
										<br>
									เบอร์ 1.เลขเริ่มต้นเบอร์เลย
										<br>
									2.แมวมี…ชีวิต
										<br>
									3.อินฟินิตี้หลับหัว
										<br>
									4.ช่อง…สี
										<br>
									5.อาคารหมวดสังคม
										<br>
									6.หัวเราะ
										<br>
									7.อาคารหมวดคณิต
										<br>
									8.อาคารหมวดสังคม
										<br>
									9.เพลงระหว่างเรา...คน
										<br>
									10.นัมเบอร์วัน
										<br>
								</div>
								<?php
							} else if ($row['typenumber'] == 6) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									คนที่เย็นๆคูลๆก็พี่นั่นแหละ 09867x5x0x
									<br>
									ถ้าน้องโทรมาแล้วให้ทักทายเป็นภาษาญี่ปุ่น  
									<br>
									แล้วพูดต่อว่าพี่คนสวย คนประเสริฐ คนใจดี คนน่ารักอยู่ไหมคะ/ครับ


								</div>
								<?php
							} else if ($row['typenumber'] == 7) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									พร้อมที่จะทำการแสดงแล้วค่ะ<br>
									06x-0x3-x507<br>
									*หาเจอแล้วอย่าลืมโทรมาแนะนำตัวด้วยน๊าา*
								</div>
								<?php
							} else if ($row['typenumber'] == 8) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
											ชื่อเป็นนิ้วน้องสุด<br>
											 Facebook สุพัตรา หมวดดิษฐ์
								</div>
								<?php
							} else if ($row['typenumber'] == 9) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
										ว่างๆชอบใส่หูฟัง<br>
										093-7x9299x<br>
										รู้แล้วโทรหรือแชทมาเป็นภาษาเกาหลีนะคะ^^
								</div>
								<?php
							} else if ($row['typenumber'] == 10) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
										มี2ภารกิจให้เลือก<br>
										1. 0x1-231x214  เบอร์<br>
										2 __xnxux__        IG<br>
										ถ้าโทรมาให้บอกชื่อเล่นตัวเองแล้วบอกว่ารับเข้าสายรหัสด้วยนะคะ/ครับ<br>
										ถ้าทักมาทางไอจีก็ให้พิมพ์ชื่อเล่นตัวเองเหมือนกันเลย<br>

								</div>
								<?php
							} else if ($row['typenumber'] == 11) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
เพื่อนชอบเรียกอีผึ้ง พี่เป็นคนเฟรนลี่ ไม่รู้จักก็ทักได้ แต่จะตอบก็มั้ยอีกเรื่อง<br>
091-84* 09*7 (โทรมาแล้วร้องเพลงหมาเห่า)

								</div>
								<?php
							} else if ($row['typenumber'] == 12) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
サトゥノパンテ<br>
065-5x7-x9x5<br>
X = สอง<br>
X = (五*六)/十五<br>
X = ฝาของเครื่องดื่มชูกำลัง ลิโพ<br>
FB:meayaran nisnos <br>
Eazyทุกอย่างคับ<br>
								</div>
								<?php
							} else if ($row['typenumber'] == 13) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
									
ซออีซีซี  091652664x

								</div>
								<?php
							} else if ($row['typenumber'] == 14) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
FB : gontiab nomahcip<br> 
08II-42VIII601V
								</div>
								<?php
							} else if ($row['typenumber'] == 15) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
Ig: xaxs._xx<br>
 ไปเเก้xมานะฟอลมาเเล้วทัก555 <br>
ถ้าหาไม่เจอหรือไม่อยากหา<br>
เปลี่ยนชื่อเล่นในกลุ่มรวมว่า *ขี้เกียจหาพี่รหัส*<br>
เดี๋ยวพี่ทักไปหาเอง5555

								</div>
								<?php
							} else if ($row['typenumber'] == 16) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
ชื่อเป็นหมอนนอนเเล้วสบาย<br>
09948529xx
								</div>
								<?php
							} else if ($row['typenumber'] == 17) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
094578753*<br>
(โทรมาแนะนำตัว+ร้องเพลงช้าง)
								</div>
								<?php
							} else if ($row['typenumber'] == 18) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
มีสองหัว กลัวเมีย กราบเช้ากราบเย็น 0x73311x73<br>
0x18465x0 (มีพี่รหัส 2 คน)
								</div>
								<?php
							} else if ($row['typenumber'] == 19) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
เบอร์0_35이77공57<br>
인스타그램: 노니_수판니파
								</div>
								<?php
							} else if ($row['typenumber'] == 20) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
ชอบฮวียองมากที่สุดในโลกค่ะ (มีคนเดียวในห้อง)<br>
0937x057xx<br>
x1 = หมายเลขทางหลวงแผ่นดินของถนนมิตรภาพ<br>
x2 = กระเพาะของวัวแบ่งระบบย่อยเป็นกี่ส่วน<br>
x3 = ปลาหมึกยักษ์มีหนวดกี่เส้น<br>
หาเจอแล้วแอดเบอร์มาในไลน์เลยค่ะ ถ้ามั่นใจแล้วทักมาแนะนำตัวเลยค้าบ

								</div>
								<?php
							} else if ($row['typenumber'] == 21) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
공육사-칠팔삼육이육구<br>
โทรมาเเล้วร้องเพลง someone you love

								</div>
								<?php
							} else if ($row['typenumber'] == 22) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
ขอให้ทุกวันเป็นวันที่ดีนะ<br>
คงคูยุคคูยุคอีอีชานแบค(แบคมาก่อน)<br>
*จะโทรหรือแอดไลน์ก็ได้เอาที่น้องสะดวก;-;

								</div>
								<?php
							} else if ($row['typenumber'] == 23) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
안녕 ล่ำ สูง<br>
 09555x174x<br>
X ตัวเเรกคือ เลขคู่บวกกัน ก่อนถึงเก้า<br>
X ตัวที่สองคือ เลขคี่บวกกัน ก่อนถึง สิบ<br>

								</div>
								<?php
							} else if ($row['typenumber'] == 24) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
เเก๊งพี่มีสามคน 098-01x47xx<br>
ปล.คนที่น่ารักที่สุด
								</div>
								<?php
							} else if ($row['typenumber'] == 25) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
กรณ 086956489*<br>
ธนก 08878*6914<br>
(น้องมีพี่รหัส2คนนะ)<br>
โทรมาแล้วแนะนำตัวทั้ง2คนเลยนะ

								</div>
								<?php
							} else if ($row['typenumber'] == 26) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
หล่อหมดจด ขนาดตดยังสดชื่น<br>
 คง คู โอ คง...คง ยุก อี อี ซัม

								</div>
								<?php
							} else if ($row['typenumber'] == 27) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
0950789xxx 0973516xxx ชื่อพี่ PP SS
								</div>
								<?php
							} else if ($row['typenumber'] == 28) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
สิ่งต่อไปนี้ไม่ยากเบยน้องรักก ตามตัวเลยยคิดเอาเองนะว่ามันเกี่ยวกับตัวเลขยังไง55555รักน้องนะคะ ส่วนถ้าโทรมาแล้วให้พูดว่า"สวัสดีค่ะ/ครับ พี่สาวคนสวย" ถ้าไม่พูดประโยคนี้จนจบและครบถ้วนพี่จะไม่เลี้ยงหนมมมโอเครนะ<br>
0ฆฅ*คFจกBก<br>
|*|เดาเอานะ แบร่ๆ

								</div>
								<?php
							} else if ($row['typenumber'] == 29) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
29. Pri_ _ Tag<br>
  20 50 100 1,000<br>
What is my name?

								</div>
								<?php
							} else if ($row['typenumber'] == 30) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
"ปรัมปราสแกนดิเนเวีย" 北
								</div>
								<?php
							} else if ($row['typenumber'] == 31) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
Je suis. UN espion<br>
Nom Natasha <br>
Super spy 007<br>
 - - - - -<br>
- - - - •<br>
- - - -•<br>
• • • • -<br>
• • • - -<br>
_ _ _ _<br>
( ͡° ͜ʖ ͡°)<br>
ถ้ารู้ว่าใครโทรมาบอกว่า<br>
___ชื่อน้อง in your area<br>
เเล้วตามด้วย หิวkfc เลี้ยงผม/หนูหน่อย<br>

								</div>
								<?php
							} else if ($row['typenumber'] == 32) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
ID line หมายเลขโทรศัพท์ =0627162*27 (ทักมาเเนะนำตัว) <br>
									โทรมาก็ได้เเต่รู้อยู่เเล้วว่าไม่โทร555
								</div>
								<?php
							} else if ($row['typenumber'] == 33) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
33. 098-695-×××<br>
FB radit Suksaew

								</div>
								<?php
							} else if ($row['typenumber'] == 34) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
[ IG ] xxxxxrx<br>
พี่ไม่รู้จะใบ้ยังไงอะ พี่เป็นคนใจดีมากๆ หาเจอแล้วส่งคำขอมา แล้วทักมาแนะนำตัวเน้อ 
								</div>
								<?php
							} else if ($row['typenumber'] == 35) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
"0973-0222-"<br>
"HR SM"
								</div>
								<?php
							} else if ($row['typenumber'] == 36) {
								?>
								<div class="alert alert-success animated FadeIn" style="word-wrap: break-word;">
									<span class="glyphicon fas fa-exclamation-circle"></span> 
									<strong>คำใบ้ / Hint</strong><hr class="message-inner-separator"> 
โทรมาให้แนะนำตัว<br>
0X3-61X3XX3
								</div>
								<?php
							}
						?>
						
					</section>
				</div>	
	 		
	  <?php
		} else {
	  ?>
		  <div class="wrapper warpper-shadow">
				<section class="sectionContent">
					<div class="headerTopic">กรุณากดยืนยันเพื่อดำเนินการต่อ</div>
					<center><img src="https://media.giphy.com/media/27rspbAAESlzzFtN2e/giphy.gif" width="200"></center>
					<br>
					เนื่องจากระบบมีการสแกนตรวจสอบไฟล์ของเว็บไซต์นี้ เพื่อป้องกันไวรัสจากอื่น ๆ
					<br>
					จึงเป็นเหตุให้ ผู้เยี่ยมชมเว็บไซต์กด <b>ดำเนินการต่อ</b> เพื่อดำเนินการสุ่มเลข
					<br>
					สามารถภาวนาได้ หากต้องการผู้ชายดี ๆ หรือ ผู้หญิง ๆ สวย พร้อมกดไป
					<hr>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<input name="submit" type="submit" value="กดที่นี้เพื่อดำเนินการต่อ ขอให้โชคดี อิอิ" class="btn btn-success btn-sm">
			  		</form>
				</section>
		  	</div>
	  <?php } ?>
		  <div class="hiddendiv common">
	  </div>
	<?php include("../system/footer.php")?>
  </body>
</html>
