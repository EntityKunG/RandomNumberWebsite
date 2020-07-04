	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kanit&amp;display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif !important;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
			height: 100%;
			float:center;
			margin:auto;
        }

		a { text-decoration:none; }
		a strong { color:#0286B7; font-size:12px; }
		a:hover { text-decoration:none; }
		a img { border:0; }
		a, a:link, a:hover, a:visited { outline:none;color:#666 }
		table {border-collapse: collapse;}

		.headerTopMenuDark{
			width: 100%;
			background-color: #009a3b;
			overflow: hidden;
			position: relative;
		}
		.mainmenuHeader{
			margin: 0 auto;
			overflow: hidden;
			position: relative;

		}
		.headerBG{
			height: 42px;
			width: 100%;
			background: linear-gradient(141deg, #9affad 0%, #beffd7 51%, #c5ffe2 75%);
			background-color: #edfff4;
			overflow: hidden;
			position: relative;
			-webkit-box-shadow:0 3px 3px #ccc;
			box-shadow:0 3px 5px #ccc;
		}
		.headerLink{
			color:#FFF !important;
		}
		.header div{
			overflow: hidden;
			position: relative;
			margin: 0 auto 30px;
		}
		.footerBackground{
			width: 100%;
			height: 42px;
			background: linear-gradient(141deg, #9affad 0%, #beffd7 51%, #c5ffe2 75%);
			overflow: hidden;
			position: relative;
		}
		.footer{
			height: 42px;
			margin: 0 auto 30px;
		}

		.wrapper{
			position: relative;
			margin-left: auto;
			margin-right: auto;
			background: white;
			padding-left: 30px;
			padding-right: 30px;
		}
		.wrapperMiddle{
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.wrapperFinal{
			position: relative;
			margin-left: auto;
			margin-right: auto;
			background: white;
			padding-left: 30px;
			padding-right: 30px;
			margin-bottom: 0;
		}

		.headerTopic{
			font-weight: 100;
			font-size: 28px;
			border-bottom: solid 2px #11ac41;
			line-height: 32px;
			position: relative;
			margin-top: -10px;
			margin-bottom: 20px;
		}

		.sectionContent{
			position: relative;
			padding-top: 30px;
			padding-bottom: 30px;
			min-height: calc(100% - 267px);
		}

		.warpper-shadow{
			background:#fff;
			-webkit-box-shadow:0 3px 5px #ccc;
			box-shadow:0 3px 5px #ccc
		}
		.headerMenuBackground {
			width: 100%;
			height: 42px;
		}
		.headerMenu{
			background: rgba(0, 0, 0, 0.9);
			z-index: 100;
			position: absolute;
			left: 0;
			right: 0;
			display: none;
			color: white;
			padding: 30px;
			margin:0 auto;
		}
		.menuButton{
			font-size: 32px;
			color: #ffffff;
		}
		.menuButton:before{
			font-family: 'IcoMoon' !important;
			content: "\e9bd  Menu";
		}

		.pointer{
			cursor: pointer;
		}

		.footerContent {
			padding: 10px 20px;
		}
		.memberBox{
			float: right;
			width: auto;
			color: white;
			height: 40px;
			line-height: 30px;
		}

		.logo {
			background-size: 150px auto;
			width: 150px;
			height: 150px;
			background-repeat: no-repeat;
			z-index: 1;
			margin-top:20px;
			float: left;
		}

		.headerContent{
			margin: auto;
		}

		hr.message-inner-separator
		{
			clear: both;
			margin-top: 10px;
			margin-bottom: 13px;
			border: 0;
			height: 1px;
			background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
			background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		}

    </style>

    <!-- Must be same here -->
    <link rel="shortcut icon" href="/asset/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/asset/favicon.ico" type="image/x-icon">
    <meta property="og:title" content="เว็บไซต์กลุ่มสาระการเรียนรู้วิทยาศาสตร์และเทคโนโลยี สาขาคอมพิวเตอร์ โรงเรียนมหาวชิราวุธ จังหวัดสงขลา">
    <meta property="og:description" content="เว็บไซต์กลุ่มสาระการเรียนรู้วิทยาศาสตร์และเทคโนโลยี สาขาคอมพิวเตอร์ โรงเรียนมหาวชิราวุธ จังหวัดสงขลา">
    <link href="/asset/css/bootstrap-4.3.1.css" rel="stylesheet">
    <link href="https://v4-alpha.getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/mdb.min.css" rel="stylesheet">
    <link href="/asset/css/style.css" rel="stylesheet">