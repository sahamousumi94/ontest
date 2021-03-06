<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Description</title>
        <link rel="stylesheet" href="http://localhost/ontest/Static/css/bootstrap.min.css"/>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/googleJquery.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/jquery.validate.js"></script>
        <script type="text/javascript" src="http://localhost/ontest/Static/js/jquery-validate.bootstrap-tooltip.js"></script>

        <style type="text/css">
            #panel{
                position: relative;
                background-color: whitesmoke;
                color: #000; 
                padding-top: 1%;
                padding-bottom: 1%;
                margin: 1.3%;
                padding-left: 0%;
                width: 60%;
                margin-left: 10%;
                border-radius: 1em;
                opacity: 0.7;
                text-align: justify;
            }
            #name{
                box-shadow: 3px 8px 5px #e4f689;
                padding-right:5px;
                padding-left:5px;
                border: solid #a0c002;
                background-color: #f4f95e;
                color: #444;
                margin-top: 2%;
                margin-left: 5%;
                margin-right: 5.1%;
                font-size: 2em;
                opacity: 0.7;
            }
            body{
                background: url("http://localhost/ontest/Static/images/Exam.jpg") fixed;
                background-size: 98%;
            }
            #main{
                text-align: left;
            }
            #login{
                text-align: right;
                background-color: #115599;
                color: white;
                padding-top: 25px;
                padding-bottom: 5px;
                padding-right: 10px; 
            }
            #menu{
                text-align: right;
                background-color: #c6c6e5;
                color: white;
                padding-top: 10px;
                padding-bottom: 20px;
                padding-right: 10px;
                height: 25px;
            }
            #header h1{
                position: absolute;
                top:2.7%;
                left:5%;
                color: #1199ff;
                text-shadow: blue;
                font-stretch: extra-expanded;
                font-variant: small-caps;
                background-color: rgba(255, 255, 255, 0.7);
                padding-right:5px;
                padding-left:5px; 
                border: 2px solid;
                border-radius: 5px;
                box-shadow: 0px 10px 5px #888888;
            }
            #btn{
                float: right;
                width: 9em;
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
         <?php
            $attempted--;
            $question= $list[$attempted]->question;
            $option1 = $list[$attempted]->option_1;
            $option2 = $list[$attempted]->option_2;
            $option3 = $list[$attempted]->option_3;
            $option4 = $list[$attempted]->option_4;
            $q_no = $list[$attempted]->q_no;
            $positive=$list2[0]->positive_mark;
            $negative=$list2[0]->negative_mark;
            $num_of_questions = $list2[0]->number_of_questions;
        ?> 
        <div id="header">
            <h1>e-Xamine</h1>
        </div>
        <div id="main">
            <div id="login">
                <form id="loginform" class="form-inline row" role="form" action="<?= base_url('index/logout'); ?>" method="post">

                    <!-- -->
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="submit" id="submi" value="Logout" class="btn-danger form-control">
                        </div>
                    </div>

                </form>
            </div>
            <div id ="menu">
                <div id="btn">
                    <a href="<?php echo base_url('index'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="Home" class="btn-info form-control">
                        </div>
                    </a>
                </div>
                <div id="btn">
                    <a href="<?php echo base_url('home/contactus'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="Contact Us" class="btn-info form-control">
                        </div>
                    </a>
                </div>
                <div id="btn">
                    <a href="<?php echo base_url('home/about'); ?>">
                        <div class="form-group">
                            <input type="button" id="sub" value="About Us" class="btn-info form-control">
                        </div>
                    </a>
                </div>
            </div>
            <div id="panel">
               
                <div class="well" style="padding-left: 10">
                    
                    <h2>
                        <font color=red >Your Current Marks : <?php echo $marks; ?> <hr></font>
                    </h2> 
                    <h2><i><?php echo $q_no .". ". $question; ?> </i></h2>
               
                <form action="<?= base_url('/test/questionsubmit')?>" style="border-left-width: 10px;margin-left: 20px;" method ="post">
                    <input type ="radio" name="resp" value="<?php echo $option1; ?>" > <?php echo $option1 ?> <br/>
                    <input type ="radio" name="resp" value= "<?php echo $option2; ?>" > <?php echo $option2 ?> <br/>
                    <input type ="radio" name="resp" value= "<?php echo $option3; ?>" > <?php echo $option3 ?> <br/>
                    <input type ="radio" name="resp" value= "<?php echo $option4; ?>" > <?php echo $option4 ?> <br/>
                    <input type ="hidden" name=question_no value="<?php echo $q_no;?>" >
                    <input type ="hidden" name=test_no value="<?php echo $test_no;?>" >
                    <input type ="hidden" name=positive value="<?php echo $positive;?>" >
                    <input type ="hidden" name=negative value="<?php echo $negative;?>" >
                    <input type ="hidden" name=score value="<?php echo $marks;?>" >
                    <input type ="hidden" name=numq value="<?php echo $num_of_questions;?>" >
                    <input style="margin-left: 100px;" type="submit" name="submit" value="Submit">
                </form>
                </div>
            </div>
            

        </div>
            
           
    
    
    
  
