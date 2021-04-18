<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		img{
			width:30px;
			height:17px;
		}
        .ul{
        	margin-left: 900px;
        	list-style-type: none;
        }
        a{
        	margin-right: 15px;
        	color: #cc7894;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
	<div class = "h">
		<ul class = "ul">
			@php $locale = session()->get('locale'); @endphp
			<li>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="kz"><img src="{{asset('https://akorda.kz/assets/media/flag_mediumThumb.jpg')}}"> Қазақ тілі</a>
                            <a class="dropdown-item" href="en"><img src="{{asset('https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png')}}"> English</a>
                            <a class="dropdown-item" href="ru"><img src="{{asset('https://i1.wp.com/www.youngpioneertours.com/wp-content/uploads/2020/03/russian-flag-russian-flag-russia-flag-of-russia.jpg?fit=1332%2C850&ssl=1')}}"> Русcкий язык</a>
                </div>
			</li>
		</ul>
		<main class="py-4">
        @yield('content')
    </main>
	</div>
</body>
</html>