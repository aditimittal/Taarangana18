<?php
	$var='		
		<div id="signup">
            <button onClick="window.location.reload()" type="button" class="close" data-dismiss="signup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="signup-wrap">
                <div class="container narrow">
                    
                    <h2 class="title-45">Register your <strong>interest for Taarangana \'18</strong></h2>
                    <p>We hope to see you at Taarangana \'18!</p>
                    
                    <form id="signup-form" class="form-inverse" data-toggle="validator" method="post" action="../module/signup2.php">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required name="name"  pattern="[a-z A-Z]{2,40}$" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" required name="numbr" pattern="[0-9]{10}$" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email Id</label>
                                    <input type="email" class="form-control" required name="email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <div class="form-group">
                                    <label>College Name </label>
									<input type="text" class="form-control" required name="clg" pattern="[a-zA-Z ]*$" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="cap">
                               <div class="g-recaptcha" data-sitekey="6LfYoz8UAAAAABs661drnQrn539cwR7qKY0O_Qem"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-220"><span>SUBMIT</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="signup-thanks">
                <div class="center-middle">
                    <div class="ri-inner">
                <p>Wait while your pass is loading...</p>
						<div id="response"></div>
                    </div>
                </div>
            </div>
        </div>
	';
	echo  $var;
?>