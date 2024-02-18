<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
rel="stylesheet"
/>
<style>
    header{
            
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 100px;
            z-index: 10;
            background: #445962;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            position: sticky;
            

        }
        header .logo{
            position: relative;
            font-size: 1.5em;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
        header .navigation{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 10px 0;
            

        }
        header .navigation li{
            list-style: none;
            margin: 0 10px;
        }
        header .navigation li a{
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            transition: 0.3s;
        }
        header .navigation li a:hover/*,
        header .navigation li a.active*/{
            color: aqua;
        }
</style>

</head>
<body>

    <header>
        <a href="#" class="logo">StudyBuddy</a>
        <ul class="navigation">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#aboutus">About us</a></li>
            <li><a href="#contactus">Contact us</a></li>
        </ul>
    </header>

    <div class="row">
        <div class="col-md-2 mt-0 vh-100 bg-secondary">
            <ul style="list-style:none">
                <li class="pt-2"><a href="{{route('admin.manage_questions')}}">Manage questions</a></li>
                <li class="pt-2"><a href="{{route('admin.unanswered_questions')}}">Unanswered questions</a></li>
                <li class="pt-2"><a href="{{route('admin.review_messages')}}">Review messages</a></li>
            </ul>
        </div>
        <div class="col-md-10">
                @yield('content')
        </div>
        

    </div>

        <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>

</body>
</html>