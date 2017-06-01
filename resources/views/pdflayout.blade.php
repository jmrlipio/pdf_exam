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


<!-- FOOTER SECTION - Before closing </body> tag -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style type="text/css" media="all">
        .container{max-width: 900px;}
        thead:before, thead:after,
        tbody:before, tbody:after,
        tfoot:before, tfoot:after
        {
            display: none;
        }
        body{margin: 0; padding: 0;}
        p{font-size: 12px;}
        .primarycolor
        {
            color: #01b8e4;
        }
        .headercont
        {
            background: #1c3d50; border-bottom: 10px solid #01b5e6; height: 200px;
        }
        .headercont .col-md-12
        {
                top: 70px;
                width: 100%;
        }
        .headercont .col-md-12 img
        {
            width: 200px;
            height: 200px;
            border: 5px solid #01b5e6;
  
        }
        .headercont .col-md-12 h1.name
        {
            text-transform: uppercase;
        }
        
        .step-navigation
        {
            height: 100px;
        }
        .step-navigation ul
        {
                padding: 0;
                margin: 0;
                float: left;
                margin-top: -30px;
                width: 1000px;
        }
        .step-navigation ul li
        {
                list-style-type: none;
    display: inline-table;
    height: 20px;
    width: 20px;
    border-radius: 300px;
    border: 2px solid #0e374d;
    background: white;
    float: left;
    margin-top: 23px;
    margin-left: 160px;
        }
        .step-navigation ul li:first-child
        {
            margin-left: -10px;
            background: #0e374d;
            padding: 8px;
        }
        .step-navigation ul li:last-child
        {
                float: right;
                background: #0e374d;
                margin-left: 90px;
                position: absolute;
                right: 40px;
                padding: 8px;
        }
        .step-navigation ul li p
        {
               position: absolute;
                margin-top: 30px;
                margin-left: -70px;
                width: 160px;
                text-align: center;
        }
        .step-navigation .main-line
        {
            background: #0e374d;
            min-height: 5px;
        }
        .work-personal, .skills
        {
                position: relative !important;
                background: #d9f2f9;
                border: none;
        }
        .work-personal h3, .skills h3
        {
            text-align: left;
            background: #1c3d50;
            color: white;
            padding: 10px;

            border-left: 10px solid #00b8e8; 
        }
        .work-personal h4{font-size: 15px;}
        .work-personal h4, .work-personal p
        {
            text-align: left;
        }    
        
        .footer
        {
        border-top:  10px solid #07b2ea; position: relative; height: 100px; background: #1c3d50;
        margin-top: 50px;
        }
        </style>
</head>

<body>
        <div class="row headercont">
        <div class="container">
            <div class="col-md-12 text-center">
                <img src="https://assets.entrepreneur.com/content/16x9/822/20150406145944-dos-donts-taking-perfect-linkedin-profile-picture-selfie-mobile-camera-2.jpeg" style="border-radius: 100px;" />     
            </div>
        </div>
        </div>
        
         <div class="row" style="margin-top: 100px;">
         <div class="container">

                <div class="row">
                <h1 class="name primarycolor text-center">{{ $users->first_name.' '.$users->last_name }} </h1>
                <h1 class="text-center">{{ $users->position }}</h1>
                </div>
                
                <div class="row" style="margin-top: 50px;">
                <p>{{ $users->about_me }}</p>
                </div>
                
                
                <div class="row" style="margin-top: 50px;">
                <div class="col-md-12 alert alert-info work-personal text-left" style="position: relative; display: block;">
                            
                            <table style="margin: 0px; padding: 0px; width: 100%;">
                                <thead>
                                <tr>
                                    <td width="40" style="padding-right: 30px;"><h3>Work Experience</h3></td>
                                    <td><h3>Personal Info</h3></td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                
                                    <td style="width: 300px; padding-right: 50px;">
                                @foreach(json_decode($users->experiences) as $exp)
                                    <h4>{{ $exp->position }} [ {{ date('F Y', strtotime($exp->start_date)) }} - {{ date('F Y', strtotime($exp->end_date)) }}]</h4>
                                    <p>{{ $exp->description}}</p>
                                @endforeach
                                    </td>
                                    
                                    <td style="width: 300px; vertical-align: top;">
                                        <h4>Birtday: {{ date('d F Y', strtotime($users->birthday)) }}</h4>
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
                <div class="col-md-12 alert alert-info skills text-left">
                
                <table style="margin: 0px; padding: 0px; width: 100%;">
                            
                                <thead>
                                <tr>
                                    <td style="padding-right: 40px;"> <h3>Proficiency Skill</h3></td>
                                    <td style="padding-right: 40px;"><h3>Professional Skill</h3></td>
                                    <td style="padding-right: 20px;">  <h3>Personal Skill</h3></td>
                                </tr>
                                </thead>
                            
                            <tbody>
                            <tr>
                            <td>
                               
                                @foreach(json_decode($users->skills) as $skill)
                                    <h4>{{ $skill->name }}</h4>
                                @endforeach
                            </td>
                            <td>
                                
                            </td>
                            <td>
                              
                            </td>
                            </tr>
                            </tbody>
                </table>
                </div>
                </div>
                
    
            </div>
         </div>
         
</body>
</html>