<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">    
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    
	<style type="text/css">
		.nav a {
		    color: #5a5a5a;
			font-size: 11px;
			font-weight: bold;
			padding: 14px 10px;
		}
		
		.nav li {
			display: inline;
		}

		.jumbotron {
		 <!-- background-image:url('https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/12289547_766748970121149_3946684576706541809_n.jpg?oh=c01dc6ad5bfa693d75d411248fee52ce&oe=56E9AE1C&__gda__=1457320356_e3eb7b63817188bc7626efb7dee83c5e');
		-->
			height: 350px;
			background-repeat: no-repeat;
			background-size: cover;
			align: center;
			margin:0;
			padding: 10px;
			top:0;
		}

		.jumbotron .container {
			position: relative;
			top:100px;
			padding:10px;
			top:0;
		}

		.jumbotron h1 {
			color: #fff;
			font-size: 48px;  
			font-family: 'Shift', sans-serif;
			font-weight: bold;
		}

		.jumbotron h2 {
			color: #fff;
			font-size: 30px;  
			font-family: 'Shift', sans-serif;
			padding:0px;
			top:0px;
		}

		.jumbotron p {
			font-size: 20px;
			color: #fff;
		}

		.learn-more {
			background-color: #f7f7f7;
		}

		.learn-more h3 {
			font-family: 'Shift', sans-serif;
			font-size: 18px;
			font-weight: bold;
		}

		.learn-more a {
			color: #00b0ff;
		}

		.neighborhood-guides{
			background-color:#efefef;
			border-bottom:1px solid #dbdbdb;
		}

		.neighborhood-guides thumbnail{
			height:100px;
			width:100px;
		}

		.neighborhood-guides h2{
			color:#393c3d;
			font-size:24px;
			margin:0px;
			padding:0px;
		}

		.neighborhood-guides p{
			font-size:15px;
			margin-bottom:13px;
		}

		.nav a{
			font-size:15px;
		}

		body{
			font-family: arial;
		}
		</style>    
  </head>

  <body>
	<!--En ust menu kimi-->
    <div class="nav">
      <div class="container">
		<div class="row">
			<ul class="pull-left" >
			  <li><a href="#" >SMRating</a></li>
			  <li><a href="#">Proje Üyeleri</a></li>
			</ul>
			<ul class="pull-right">
			  <li><a href="#">Facebook</a></li>
			  <li><a href="#">Twitter</a></li>
			  <li><a href="#">Yardım</a></li>
			</ul>
		</div>
      </div>
    </div>
	<!--End Menu-->

	<!--Banner olmasi gerek su anda resim alani-->
    <div class="jumbotron">
      <div class="container">
			<img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/12289547_766748970121149_3946684576706541809_n.jpg?oh=c01dc6ad5bfa693d75d411248fee52ce&oe=56E9AE1C&__gda__=1457320356_e3eb7b63817188bc7626efb7dee83c5e" width="100%" height="332px">
			<h1></h1>
			<p></p>
			<a href="#"></a>
      </div>
    </div>
	<!--End Banner-->

	<!--Proje aciklamasi ve Facebook/Twitter buttonlari-->
	<div class="neighborhood-guides">
		<div class="container">
			<h2 style="padding:0px margin:0px "><i>Sosyal Medya Puanlama</i></h2>
			<p><i>SMRating uygulaması kişilerin profilleri, beğenileri, takip ettikleri, arkadaşları ve sayfalarını inceleyerek içerik ile ilgili bilgilendirici bir rozet verir.</i></p>
			<br>
		
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="thumbnail" align="center">
						<button type="button" class="btn" data-toggle="modal" data-target="#myModalf">
							<img src="http://www.achuth.in/wp-content/uploads/2015/05/Facebook-Icon.png" width="100px" height="100px";>
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="myModalf" role="dialog">
							<div class="modal-dialog">
						
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="modal-title">Facebook Giriş</h4>
									</div>
									<div class="modal-header">
										
									</div>
								</div>				  
							</div>
						</div>
						
						<p><a href="#">Facebook ile Bağlan</a></p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="thumbnail" align="center">
						<button type="button" class="btn" data-toggle="modal" data-target="#myModaltb">
							<img src="https://bothell.recruiter.uw.edu/Undergrad/images/Bothell/Twitter-Icon.png?width=75&height=75" width="100px" height="100px" >
						</button>
						
						<!-- Modal -->
						<div class="modal fade" id="myModaltb" role="dialog">
							<div class="modal-dialog">
						
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="modal-title">Twitter Giriş</h4>
									</div>
									<div class="modal-body">
										<!--https://twitter.com/login-->
									</div>
								</div>				  
							</div>
						</div>

						<p  data-toggle="modal" data-target="#myModaltl"><a href="#">Twitter ile Bağlan</a></p>
						
						<!-- Modal -->
						<div class="modal fade" id="myModaltl" role="dialog">
							<div class="modal-dialog">
						
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="modal-title">Twitter Giriş</h4>
									</div>
									<div class="modal-body">
										<!--https://twitter.com/login-->
									</div>
								</div>				  
							</div>
						</div>
					</div>			
				</div>	
			</div>
		</div>
	
		<div class="learn-more">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Biz Kimiz?</h3>
						<p>Eskişehir Osmangazi Üniversitesi <br> Bilgisayar Mühendisliği Öğrencileri</p>
						<p><a href="#">Detaylı Bilgi</a></p>
					</div>
					<div class="col-md-4">
						<h3>Nasıl Geliştirdik?</h3>
						<p><br><br></p>
						<p><a href="#">Kullanılan Teknolojiler</a></p>
					</div>
					<div class="col-md-4">
						<h3>Neden Kullanılmalı?</h3>
						<p>Kimlerle etkileşim içinde olduğunuzu görmek için</p>
						<br>
						<p><a href="#">Sosyal Medya Kullanımı</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End proje aciklamasi ve Facebook/Twitter buttonlari-->
  </body>
</html>