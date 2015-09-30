<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginBootstrap</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            function getPassword() {
                //if have many user inputs use serilazation techanic
                //var data_ = $('#form1').serialize();
                
                $.ajax({
                    type: "POST",
                    url: 'pdocoection.php',
                    dataType: 'json',
                    data: {UN: $("#userName").val(), PW: $("#inputPassword").val()}, //while serilazation use the data_
                    success: function (result) {
                        if(result=='0'){
                          var ajaxDisplay = document.getElementById('ajaxDiv');
                          ajaxDisplay.innerHTML = "enter user name or password"; 
                        }
                        else if(result=='1'){
                          var ajaxDisplay = document.getElementById('ajaxDiv');
                          ajaxDisplay.innerHTML ="In valied user"; 
                        }
                        else{
                             window.location ='http://www.kbtpl.com/Mathanki/Congratulations.php';
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert(textStatus);
                    }
                });
            }
        </script>

    </head>
    <body>
        <p> <br/> </p> 
        <div class="container"  >   
            <div class="row">

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header" style="margin-top: 10px;">
                                <h3>Login Form</h3>
                            </div>

                            <form class="form-horizontal" id="form1">
                                <div class="form-group">
                                    <label for="userName" class="col-sm-2 control-label">UserName</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm chat-input" id="userName" placeholder="UserName" name="userName">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control input-sm chat-input" id="inputPassword" placeholder="Password" name="inputPassword">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" id="submit"class="btn btn-primary btn-md" onclick='getPassword()'><span class="glyphicon-log-in"></span>LogIn</button>
                                    </div>
                                </div>

                                <div id='ajaxDiv' class="form-group has-error">Mssages</div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>






</body>
</html>
