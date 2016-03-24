<div class="title"><?php echo $title; ?></div>

<form id="form" method="Post" name="form_valid" accept-charset="utf-8">
	<div class="form-all">
		<ul class="form-section page-section">
		<li>				
			<h1>Application Form</h1>
			<div>Please complete form below</div>					
		</li>
		<li>
			<label class="form-label-left" for="input_9"> Login <span class="form-required"> * </span> </label>
			<div class="form-input"> 
				<input id="first_9"  type="text" name="login" /> 					
			</div>
		</li><hr>
		<li>
			<label class="form-label-left" for="input_10"> Password <span class="form-required"> * </span> </label>
			<div class="form-input"> 
				<input id="first_10" type="text" name="password" /> 					
			</div>
		</li>
		<li>
			<label class="form-label-left" for="input_11"> Confirm password <span class="form-required"> * </span> </label>
			<div class="form-input"> 
				<input id="first_11" type="text" name="password1" /> 					
			</div>
		</li><hr>
		<li>
			<label class="form-label-left" for="input_12"> Email Address <span class="form-required"> * </span> </label>
			<div class="form-input">
				<input id="input_12" type="email" name="email" value="" /> 			
			</div>
		</li>
		<li>
			<label class="form-label-left" for="input_13"> Date of Birth <span class="form-required"> * </span></label>
			<div class="form-input">			
				<input id="dateb"  type="text" name="dob"/> 			
			</div>
		</li>		
		<li>			
			<button id="submit" class="read_more" type="submit"> Submit </button>							
		</li>
		<li style="display: none;">Should be Empty: <input type="text" name="website" value="" /></li>
		</ul>
	</div>
</form>

