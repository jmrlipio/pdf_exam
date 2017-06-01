<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- Styles -->
<!-- Minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all">
<!-- Optional IE8 Support -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style type="text/css" media="all">
@page 
{
margin: 0cm;
padding: 0cm;
}
*{ 
    margin:0; 
    padding:0; 
    box-sizing:border-box; 
}
.container{max-width: 900px;}
.row{position: relative; display: block;}
table
{
    vertical-align: top;
}
thead:before, thead:after,
tbody:before, tbody:after,
tfoot:before, tfoot:after{display: none;}
body{margin: 0; padding: 0;}
p{font-size: 12px; line-height: 1.5em;}
.margin-0{margin: 0;}
.padding-0{padding: 0;}
.m-t-20{margin-top: 20px;}
.p-t-0{padding-top: 0px;}
.p-r-10{padding-right: 10px;}
.p-r-20{padding-right: 20px;}
.p-r-30{padding-right: 30px;}
.p-r-40{padding-right: 40px;}
.p-r-50{padding-right: 50px;}
.p-l-10{padding-left: 10px;}
.p-l-20{padding-left: 20px;}
.p-l-30{padding-left: 30px;}
.p-l-40{padding-left: 40px;}
.p-l-50{padding-left: 50px;}
.width-100{width: 100%;}
.primarycolor{color: #01b8e4;}
.headercont
{
    background: #1c3d50; 
    border-bottom: 10px solid #01b5e6; 
    height: 100px;
}
.headercont .col-md-12
{
    top: 20px;
    width: 100%;
}
.headercont .col-md-12 img
{
    width: 150px;
    height: 150px;
    border: 5px solid #01b5e6;
}
h3.name
{
    text-transform: uppercase;
}
.work-personal, .skills
{
    position: relative !important;
    background: #d9f2f9;
    color: #323232;
    border: none;
    display: block;
}
.work-personal h3, .skills h3
{
    text-align: left;
    background: #1c3d50;
    color: white;
    padding: 5px;
    border-left: 10px solid #00b8e8; 
}
.work-personal h4{font-size: 15px;}
.work-personal h4, .work-personal p
{
    text-align: left;
}    

.step-nav .line
{
    background: #1c3d50; 
    height: 5px; 
    position: absolute; 
    width: 100%; 
    top: -10px; 
    z-index: -10;
    top: 10px;
}
.step-nav ul{margin: 0px; padding: 0px;}
.step-nav ul li
{
    z-index: 100;
    position: relative;
    float: left;
    list-style-type: none;
    display: inline-block;
    height: 20px;
    margin-left: 70px;
    margin-right: 30px;
    width: 20px;
    border-top-left-radius: 10px 10px;
    border-bottom-right-radius: 10% 10%;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px 10px;
    border-bottom-right-radius: 10px 10px;
    background: white;
    border:  1px solid #1c3d50;
}
.step-nav ul li p
{
    left: -40px;
    width: 100px;   
    text-align: center;
}        
.step-nav ul li.first-li
{
    margin-left: 0px;
}
.step-nav ul li.first-li, .step-nav ul li.last-li
{
    background: #1c3d50;
}
.step-nav ul li.last-li
{
    margin-right: 0px;
}
ul.str_meter
{
    margin: 0; padding: 0;
}
ul.str_meter li
{
    position: relative;
    list-style-type: none;
    display: inline-block;
    height: 15px;
    width: 15px;
    border-top-left-radius: 8px 8px;
    border-bottom-right-radius: 8% 10%;
    border-top-right-radius: 8px;
    border-bottom-left-radius: 8px 8px;
    border-bottom-right-radius: 8px 8px;
    background: white;
    border: 1px solid #00b8e8;
}
ul.str_meter li.active
{
    background: #00b8e8;
}
.footer
{
    border-top:  10px solid #07b2ea; position: relative; height: 40px; background: #1c3d50;
}
</style>
</head>

<body>
<div class="row headercont">
    <div class="container">
        <div class="col-md-12 text-center">
            <img src="https://assets.entrepreneur.com/content/16x9/822/20150406145944-dos-donts-taking-perfect-linkedin-profile-picture-selfie-mobile-camera-2.jpeg" style="border-radius: 80px;" />     
        </div>
    </div>
</div>

<div class="row" style="margin-top: 85px;">
<div class="container">

<div class="row">
    <h3 class="name primarycolor text-center">{{ $users->first_name.' '.$users->last_name }} </h3>
    <h3 class="text-center margin-0">{{ $users->position }}</h1>
</div>

<div class="row m-t-20">
    <p>{{ $users->about_me }}</p>
</div>


<div class="row step-nav m-t-20">
<div class="col-md-12 padding-0">

<?php $sorted = order_array(json_decode($users->educations), 'end_date');?>

<ul>
    <li class="first-li"></li>
        @foreach($sorted as $edu)
            <li><p style="position: absolute; top: 30px;">{{ $edu['title'] }}</p></li>
        @endforeach
    <li class="last-li" style="float: right;"></li>
</ul>
<div class="line"></div>
</div>
</div>


<div class="row" style="margin-top: 70px;">
<div class="col-md-12 alert alert-info work-personal text-left">

<table class="padding-0 margin-0 width-100">
    <thead>
        <tr>
            <td class="p-r-50" width="40"><h3>Work Experience</h3></td>
            <td><h3>Personal Info</h3></td>
        </tr>
    </thead>
    <tbody>
    <tr>
    
    <td class="p-r-50" style="width: 300px;">
        @foreach(json_decode($users->experiences) as $exp)
            <h4><strong>{{ $exp->position }}</strong> [ {{ date('F Y', strtotime($exp->start_date)) }} - {{ date('F Y', strtotime($exp->end_date)) }}]</h4>
            <p>{{ $exp->description}}</p>
        @endforeach
    </td>
    
    <td style="width: 300px; vertical-align: top;">
        <h4>Birthday: {{ date('d F Y', strtotime($users->birthday)) }}</h4>
        <h4>Phone: +{{$users->phone}}</h4>
        <h4>E-mail: {{$users->email}}</h4>
        <h4>Address: {{$users->street_address}}</h4>
    </td>
    
    </tr>
    </tbody>
    </table>

</div>
</div>

<div class="row">
<div class="col-md-12 alert alert-info skills text-left p-t-0">

<table class="padding-0 margin-0 width-100">

    <thead>
        <tr>
            <td class="p-r-40"><h3>Proficiency Skill</h3></td>
            <td class="p-r-40"><h3>Professional Skill</h3></td>
            <td class="p-r-20"><h3>Personal Skill</h3></td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td style="width: 200px;">
                <table class="padding-0 margin-0 width-100">
                    @foreach(json_decode($users->skills) as $skill)
                    <tr>
                        <td>
                            <h4>{{ $skill->name }}</h4>
                        </td>
                        <td class="p-l-20" style="width: 150px;"> 
                            <ul class="str_meter">
                            {!! checkactivevalue($skill->strength) !!}
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
            
            <td style="width: 200px;"></td>
            <td style="width: 200px;"></td>
            
        </tr>
    </tbody>
</table>
</div>
</div>


</div>
</div>

<div class="row footer"></div>

</body>
</html>