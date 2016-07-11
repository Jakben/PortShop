	<footer id="footer"><!--Footer-->
		
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">This is a Portfolio Site to show JKDonaldson's use of <span>PHP</span>, <span>MySQL</span> and the <span>MVC</span></p>
					<p class="pull-right"> This is not really selling clothes</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
	
	<!-- Log In Modal Starts -->
    <div id="log" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title" style="color: #ffb347; text-align: center;" ><b>Log In</b></h3>
                            </div>
                            <div class="modal-body">
                        <!--        <form method="post">
                                <h4 style="color: #ffb347; text-align: center;"><b>Username:  </b>
                                <input type="text" name="uname" id="usn" style=" border-radius: 25px;"></h4>
                                <h4 style="color: #ffb347; text-align: center;"><b>Password:  </b>
                                <input type="text" name="pword" id="passwd" style=" border-radius: 25px;"></h4><br>
                                <button type="button" class="btn btn-default btn-block btn-warning" data-dismiss="modal"><h4><b>Log In</b></button>
                                 </form>        
                            </div>-->
                            

                                <form method="post" action="">
                                     
                                             <h4 style="color: #ffb347; text-align: center;" ><b>Username : </b><br>
                                             <input type="text" maxlength="30" required autofocus name="username" /></h4><br>
                                        <br>
                                       
                                        
                                            <h4 style="color: #ffb347; text-align: center;" ><b>Password : </b> <br>
                                             <input type="password" maxlength="30" required name="password" /></h4><br>
                                         
                                         
                                             <input type="submit" name="login" class="btn btn-warning" value="Log me in" />
                            <input type="button" class="btn btn-warning pull-right" name="register" value="Register" onclick="location.href='views/register.php'" />
                                         
                               
                                     
                                 </form>
                                </div>

                        </div>
            </div>

        </div>
        <!-- Log In Modal ends -->
	
	
</body>
</html>