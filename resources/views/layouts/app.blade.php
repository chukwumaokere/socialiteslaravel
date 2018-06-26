<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta property="og:image" content="https://lh4.ggpht.com/7jTO2Act5ERDO3gfvKoS1XHEkJ7X2UQkS58ACKxV8mEJN-dI5G-eLpXqiMyadFsXbAQY">
        <meta name="description" content="See what you have to look forward to.">
        <meta name="keywords" content="Socialite, Socialite app, discover, interests, events, new app, get socialite, mobile app, facebook, twitter, instagram, youtube, socialites, chuck cokere, chuck, okere, chukwuma okere, chukwuma, okere, Okere Studios">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          @font-face{
            font-family: 'AvenirNextUL';
            font-style: normal;
          	src: url('{{ url('/') }}/fonts/AvenirNext-UltraLight.ttf');
          }
          @font-face{
            font-family: 'AvenirNext';
            font-style: normal;
		src: url("{{ url('/') }}/fonts/AvenirNext-Regular.ttf");
          }
          html,body {
			         background-color: #323B4C;
               margin: 0 auto;
               width: 100%;
               height: 100%;
          }
          #main{
      			background: linear-gradient(to right,  #e52f37, #f47318);
      		}
          div.main, div.secondary, div.tertiary{
      			display: block;
            width: 100%;
          /*height: 34%; //3 section */
      			height: 100%;
      		}
          .main{
      			position: relative;
      			width: 100%;
      			background: linear-gradient(to right, rgba(0, 47, 75, 0.65) 25%, rgba(220, 66, 37, 0.65) 100%), url('{{ url('/') }}/img/chicago-skyline-2.jpg') center center no-repeat;
      			background-size: cover;
      			display: flex !important;
      			align-items: center;
                              justify-content: center;
      		}
      		.secondary{
      		}
      		.tertiary{
      			background: #FFFFFF;
      		}
      		.main-content{
      			display: flex;
                              flex-direction: row;
                              flex-wrap: nowrap;
      			align-items: center;
                              justify-content: center;
      			flex: 1;
      		/*	margin-top: -6%;  */
      		}
      		.main-content-right{
      			margin-left: 5%;
      		}
      		h1{
      			font-family: 'AvenirNext';
      			font-size: 4em;
                              color: white;
      			-webkit-font-smoothing: antialiased;
      			text-shadow: rgb(0, 0, 0) 0 0 10px;
      		}
      		h2{
      			font-family: 'AvenirNextUL';
      			font-size: 2em;
      			color: white;
      			-webkit-font-smoothing: antialiased;
      			text-shadow: rgb(0, 0, 0) 0 0 10px;
      		}
      		h3{
      			font-family: 'AvenirNextUL';
      			color: white;
      			-webkit-font-smoothing: antialiased;
      			text-shadow: rgb(0, 0, 0) 0 0 10px;
      		}
      		h4 > a{
      			font-family: 'AvenirNextUL';
                              color: white;
                              -webkit-font-smoothing: antialiased;
                              text-shadow: rgb(0, 0, 0) 0 0 10px;
      			font-weight: bold;
      		}
      		form{
      			display: flex;
      		}
      		.form-control{
      			width: 50%;
      		}
      		.btn-primary{
      			background-color: #e52f37;
      			border-color: #e52f37;
      		}
      		.sub-header{
      			font-weight:500;
      		}
      		.sub-header-two{
      			font-weight: 500;
      		}
      		@media screen and (max-width: 450px) {
      			.sub-header{
      				font-weight: 700 !important;
      			}
      			.sub-header-two{
                                      font-weight: 700 !important;
                              }
      		}
      		.main-footer{
      			position: absolute;
      			bottom:0;
      			width: 100%;
      			display: flex;
      			flex-direction: row;
      			flex-wrap: nowrap;
                              align-items: center;
                              justify-content: space-evenly;
      			padding-bottom: 1%;
      			padding-left: 30%;
      			padding-right: 30%;

      		}
      		.copyright-flex{
      			position: absolute;
                              bottom:0;
      			width: 100%;
      			text-align: center;
      			bottom: -15px;
      		}
      		p{
      			color: white;
      		}
        </style>
    <title>Socialites — All your social media in one place, finally.</title>
  </head>
  <body>
    @yield('content')
  </body>
</html>
